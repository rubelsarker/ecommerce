<?php

namespace App\Http\Controllers\Admin;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use Session;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $sliders = Slider::all();
        return view('backend.slider.index',compact('sliders'));
    }


    public function create()
    {
        return view('backend.slider.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'image' =>'required',
        ]);
        $slide = new Slider;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.' .$image->getClientOriginalExtension();
            $location = public_path('images/'.$filename);
            Image::make($image)->save($location);
            $slide->image = $filename;
        }
        $slide->status = $request->status;
        $slide->save();
        Session::flash('success','Slider Image Added Successfully !');
        return back();
    }

    public function destroy($id)
    {
        Slider::where('id',$id)->delete();
        Session::flash('success','Slider Image Deleted Successfully !');
        return redirect()->back();
    }
    public function unactive($id){
        Slider::where('id',$id)->update(['status' => 0]);
        Session::flash('success','Slider Image Un active !');
        return back();

    }
    public function active($id){
        Slider::where('id',$id)->update(['status' => 1]);
        Session::flash('success','Slider Image Active !');
        return back();
    }
}



