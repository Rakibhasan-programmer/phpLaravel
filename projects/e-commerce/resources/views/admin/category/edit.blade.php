@extends('admin.master')

@section('title')
    Update Category
@endsection

@section('body')
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-8 mx-auto">
                <div class="card p-5">
                    <div class="card-header">
                        <h3 class="text-center">Update Category</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update-category', ['id' => $category->id])}}" method="POST">
                            @csrf
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Category Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="name" value="{{$category->name}}">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Category Status</label>
                                <div class="col-md-8">
                                    <label for=""><input class="me-2" type="radio" name="status" value="1" {{$category->status == 1 ? 'checked' : ''}}>Published</label>
                                    <label for=""><input type="radio" name="status" value="0" {{$category->status == 0 ? 'checked' : ''}}>Unpublished</label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-info px-5" value="Update Category">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

