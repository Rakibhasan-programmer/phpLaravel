@extends('admin.master')

@section('title')
    Manage Product
@endsection


@section('body')
<div class="row pt-5">
    <div class="col-md-10 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Manage Products</h3>
            </div>
            <div class="card-body">
                <p class="text-center text-success">{{Session::has('message') ? Session::get('message') : ''}}</p>
                <table class="table table-hover table-bordered table-striped" id="basic-datatable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Brand Name</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->brand->name}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{!!\Illuminate\Support\Str::words($product->description, 4, '....')!!}</td>
                                <td><img src="{{asset($product->image)}}" alt="" width="70" height="70"></td>
                                <td>{{$product->status == 1 ? "Published" : "Unpublished"}}</td>
                                <td class="w-50">
                                    <a href="{{route('edit-product', ['id' => $product->id])}}" class="btn btn-success px-3">Edit</a>
                                    <a onclick="return confirm('Are You Sure?')" href="{{route('delete-product', ['id' => $product->id])}}" class="btn btn-danger">Delete</a>
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

