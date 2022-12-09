@extends('admin.master')

@section('title')
    Manage Fruit
@endsection

@section('body')
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h3 class="text-center">All Fruits</h3>
                        </div>
                        <p class="text-success text-center">{{Session::has('message') ? Session::get('message') : ""}}</p>
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Fruits Name</th>
                                    <th>Fruits Price</th>
                                    <th>Fruits image</th>
                                    <th>Fruits Description</th>
                                    <th>Fruits status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($fruits as $fruit)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$fruit->category_id}}</td>
                                        <td>{{$fruit->name}}</td>
                                        <td>{{$fruit->price}}</td>
                                        <td><img src="{{asset($fruit->image)}}" alt="" style="height: 70px"></td>
                                        <td>{{\Illuminate\Support\Str::words($fruit->description, 4, '...')}}</td>
                                        <td>{{$fruit->status == 1 ? "Published" : "Unpublished"}}</td>
                                        <td>
                                            <a href="" class="btn btn-success ">Edit</a>
                                            <a onclick="return confirm('Are You Sure?')" href="" class="btn btn-danger">Delete</a>
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

