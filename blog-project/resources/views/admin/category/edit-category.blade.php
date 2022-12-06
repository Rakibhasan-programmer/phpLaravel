@extends('admin.master')

@section('title')
    Update Category
@endsection


@section('body')
    <div class="row pt-5">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Update Category</h3>
                </div>
                <div class="card-body">
{{--                    <p class="text-center text-success">{{Session::has('message') ? Session::get('message') : ''}}</p>--}}
                    <form action="" method="POST">
                        @csrf
                        <div class="row mt-2">
                            <label for="" class="col-md-4">Category Name</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control" value="{{$category->name}}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="" class="col-md-4">Status</label>
                            <div class="col-md-8">
                                <label><input class="me-1" type="radio" name="status" value="1" {{ $category->status == 1 ? 'checked' : "" }}>Published</label>
                                <label><input type="radio" name="status" value="0" {{ $category->status == 0 ? 'checked' : "" }}>Unpublished</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-outline-success" value="Update Category">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

