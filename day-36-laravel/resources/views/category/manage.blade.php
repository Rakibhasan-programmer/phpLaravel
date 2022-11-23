@section('title', "All Categories")
@extends('master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">All Categories</h3>
                        </div>
                        <div class="card-body">
                            <p class="text-center text-success py-3">{{Session::get('message')}}</p>
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->description}}</td>
                                        <td>
                                            <img src="{{asset('/').$category->image}}" alt="" height="50px" width="50px">
                                        </td>
                                        <td>
                                            <a href="{{route('category.edit', ['id' => $category->id])}}" class="btn btn-outline-success px-4 mx-2">Edit</a>
                                            <a href="{{route('category.delete', ['id' => $category->id])}}" class="btn btn-outline-danger" onclick="confirm('Are you sure?')">Delete</a>
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
    </section>
@endsection
