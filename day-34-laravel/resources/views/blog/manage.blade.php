@extends('master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header text-center fw-bold fs-3">All Blogs Information</div>
                        <div class="card-body">
                            <table class="table table-hover table-bordered table-striped pt-5">
                                <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>Blog Title</th>
                                    <th>Category Name</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$blog['title']}}</td>
                                        <td>{{$blog['category']->name}}</td>
                                        <td>{{$blog['status'] == 1 ? 'Published' : "Unpublished"}}</td>
                                        <td><img src="{{asset('/').$blog['image']}}" alt="" height="40px" width="80px"></td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <a href="" class="btn btn-outline-info px-3">Details</a>
                                            <a href="{{route('blog.edit', ['id' => $blog->id])}}" class="btn btn-outline-success px-3 mx-3">Edit</a>
                                            <a href="" class="btn btn-outline-danger px-3">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


