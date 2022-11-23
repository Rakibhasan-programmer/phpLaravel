@section('title', 'Edit Category')
@extends('master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center fw-bold fs-3">Edit Category</div>
                        <div class="card-body">
{{--                            <p class="text-center text-success">{{Session::get('message')}}</p>--}}
                            <form action="{{route('category.update', ['id' => $category->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row pb-3">
                                    <label for="" class="col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Enter Category Name" class="form-control" name="name" value="{{$category->name}}">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="" class="col-md-3">Category Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" placeholder="Enter Product Description.." name="description" id="" rows="10">{{$category->description}}</textarea>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="" class="col-md-3">Category Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                        <img src="{{asset('/').$category->image}}" alt="" height="50px" width="50px">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-dark px-5 fw-bold" value="Update New Category">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

