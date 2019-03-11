@extends('backend.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Add slider
                        <a class="float-right btn btn-info" href="{{route('slider.index')}}">All Slider</a>
                    </div>
                    @include('message')
                    <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="image">Slider Image</label><br>
                                <input type="file" name="image"  id="image">
                            </div>

                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" value="1" name="status" type="checkbox"> Publication
                                </label>
                            </div>


                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
@endsection