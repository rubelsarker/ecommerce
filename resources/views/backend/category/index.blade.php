@extends('backend.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        All Category
                    </div>
                    @include('message')
                    <div class="card-body">

                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Parent Id</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name}}</td>
                                    <td>{{ $category->parent_id}}</td>
                                    <td>{{ $category->status}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <a class="float-right btn btn-info" href="{{route('category.create')}}">Add Category</a>
                    </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
@endsection