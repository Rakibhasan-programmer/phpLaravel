@extends('admin.master')

@section('title')
    Manage Category
@endsection

@section('body')
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h3 class="text-center">All Categories</h3>
                        </div>
                        <p class="text-success text-center">{{Session::has('message') ? Session::get('message') : ""}}</p>
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category Name</th>
                                        <th>Category Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->status == 1 ? "Published" : "Unpublished"}}</td>
                                            <td>
                                                <a href="{{route('edit-category', ['id' => $category->id])}}" class="btn btn-success px-4">Edit</a>
                                                <a onclick="return confirm('Are You Sure?')" href="{{route('delete-category', ['id' => $category->id])}}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
