@extends('admin.master')

@section('title')
    Add Category
@endsection

@section('body')
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card p-5">
                    <div class="card-header">
                        <h3 class="text-center">Add Category</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-center text-success">{{Session::has('message') ? Session::get('message') : ""}}</p>
                        <form action="{{route('new-category')}}" method="POST">
                            @csrf
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Category Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Category Status</label>
                                <div class="col-md-8">
                                    <label for=""><input class="me-2" type="radio" name="status" value="1" checked>Published</label>
                                    <label for=""><input type="radio" name="status" value="0">Unpublished</label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-info px-5" value="Add Category">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
