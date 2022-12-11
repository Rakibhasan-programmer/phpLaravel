@extends('backend.layouts.master')

@section('title')
    Edit Product
@endsection


@section('backend_content')

    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Edit Product</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update-product', ['id' => $product->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Category Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="category_name" class="form-control" value="{{$product->category_name}}">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Brand Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="brand_name" class="form-control" value="{{$product->brand_name}}">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Product Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control" value="{{$product->name}}">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Product Price</label>
                                <div class="col-md-8">
                                    <input type="number" name="price" class="form-control" value="{{$product->price}}">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Product Description</label>
                                <div class="col-md-8">
                                    <textarea  name="description" id="desc" rows="5" class="form-control">{{$product->description}}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Product Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control">
                                    <img src="{{asset($product->image)}}" alt="" style="height: 70px">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Status</label>
                                <div class="col-md-8">
                                    <label><input class="me-1" type="radio" name="status" value="1" {{$product->status == 1 ? 'checked' : ""}} >Published</label>
                                    <label><input type="radio" name="status" value="0" {{$product->status == 0 ? 'checked' : ""}}>Unpublished</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-info" value="Update Product">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



