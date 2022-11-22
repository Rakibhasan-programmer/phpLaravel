@extends('master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center fw-bold fs-3">Edit Blog Information</div>
                        <div class="card-body">
                            {{--                            <p class="text-center text-outline-success">{{Session['message']}}</p>--}}
                            <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row pb-3">
                                    <label for="" class="col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <select name="category_id" id="" class="form-control">
                                            <option value="">---Select a Category---</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category['id']}}">{{$category['name']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="" class="col-md-3">Blog Title</label>
                                    <div class="col-md-9">
                                        <input value="{{$blog['title']}}" type="text" placeholder="Enter Blog Title" class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="" class="col-md-3">Short Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" placeholder="Enter Short Description.." name="short_description" id="" rows="5">{{$blog['short_description']}}</textarea>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="" class="col-md-3">Long Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" placeholder="Enter Long Description.." name="long_description" id="" rows="8">{{$blog['long_description']}}</textarea>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="" class="col-md-3">Blog Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                        <img src="{{asset('/').$blog['image']}}" alt="" height="50px" width="50px">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-dark px-5 fw-bold" value="Create New Blog">
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

