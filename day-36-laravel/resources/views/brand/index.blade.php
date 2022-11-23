@section('title', 'Brand')
@extends('master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center fw-bold fs-3">Add Brand</div>
                        <div class="card-body">
                            <p class="text-center text-success">{{Session::get('message')}}</p>
                            <form action="{{route('brand.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row pb-3">
                                    <label for="" class="col-md-3">Brand Name</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Enter Category Name" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="" class="col-md-3">Brand Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" placeholder="Enter Product Description.." name="description" id="" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="" class="col-md-3">Brand Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-dark px-5 fw-bold" value="Create New Brand">
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


