@extends('backend.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Add Category
                        <a class="float-right btn btn-info" href="{{route('category.index')}}">All Category</a>
                    </div>
                    @include('message')
                    <form action="{{route('category.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="card-body">
                            <div class="form-group">
                                <label> Category Name</label>
                                <input type="text" placeholder="Category Name" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="subcat">Parent Category</label>
                                <select class="form-control" name="parent_id" id="subcat">
                                    <option value="0">Main Category</option>
                                    @foreach($subCats as $subcat)
                                        <option value="{{$subcat->id}}">{{$subcat->name}}</option>
                                    @endforeach
                                </select>
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