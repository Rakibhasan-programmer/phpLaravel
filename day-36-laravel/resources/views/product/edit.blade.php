@section('title', 'Update')
@extends('master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center fw-bold fs-3">Update Blog</div>
                        <div class="card-body">
{{--                            <p class="text-center text-success">{{Session::get('message')}}</p>--}}
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row pb-3">
                                    <label for="" class="col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <select name="category_id" id="" class="form-control">
                                            <option value="">---Select a Category---</option>
{{--                                            @foreach($categories as $category)--}}
{{--                                                <option value="{{$category['id']}}">{{$category['name']}}</option>--}}
{{--                                            @endforeach--}}
                                        </select>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="" class="col-md-3">Blog Title</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Enter Blog Title" class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="" class="col-md-3">Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" placeholder="Enter Short Description.." name="description" id="" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="" class="col-md-3">Blog Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-dark px-5 fw-bold" value="Update New Blog">
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

