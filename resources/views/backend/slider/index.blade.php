@extends('backend.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        All slider
                    </div>
                    @include('message')
                        <div class="card-body">

                            <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sliders as $slider)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td> <img src="{{url('')}}/images/{{$slider->image}}" style="width: 75px; height: 75px;" class="img-fluid"></td>
                                    <td>
                                        @if($slider->status == 1)
                                            <span class=" bg-success p-2 text-white">Active</span>
                                        @else
                                            <span class="bg-danger p-2 text-white">UnActive</span>
                                        @endif

                                    </td>
                                    <td>
                                        @if($slider->status == 1)
                                            <a href="{{route('unactive',$slider->id)}}" class="p-2"> <i class="far fa-thumbs-down text-danger"></i></a>
                                        @else
                                            <a href="{{route('active',$slider->id)}}" class="p-2"><i class="far fa-thumbs-up text-success"></i></a>
                                        @endif
                                            <form id="delete-form-{{$slider->id}}" action="{{route('slider.destroy',$slider->id)}}" method="post" style="display: none;">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}

                                            </form>
                                            <a href="" class="p-2" onclick="if(confirm('Are you sure, You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{$slider->id}}').submit();}
                                                    else {
                                                    event.preventDefault();
                                                    }">
                                                <i class="fas fa-trash-alt  text-danger"></i>
                                            </a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a class="float-right btn btn-info" href="{{route('slider.create')}}">Add Slider</a>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
@endsection