@extends('admin.master')

@section('title')
    Manage Brand
@endsection


@section('body')
    <div class="row pt-5">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Manage Brand</h3>
                </div>
                <div class="card-body">
                    <p class="text-center text-success">{{Session::has('message') ? Session::get('message') : ''}}</p>
                    <table class="table table-hover table-bordered table-striped" id="basic-datatable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Brand Name</th>
                            <th>Brand Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($brands as $brand)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$brand->name}}</td>
                                <td>{{$brand->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('edit-brand', ['id' => $brand->id])}}" class="btn btn-success me-2 px-3">Edit</a>
                                    <a onclick="return confirm('Are you sure?')" href="{{route('delete-brand', ['id' => $brand->id])}}"  class="btn btn-danger me-2">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

