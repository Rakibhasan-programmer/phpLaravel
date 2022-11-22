@extends('master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header text-center fw-bold fs-3">All Category Information</div>
                        <div class="card-body">
                            <table class="table table-hover table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$category['name']}}</td>
                                            <td>{{$category['description']}}</td>
                                            <td><img src="{{asset('/').$category['image']}}" alt="" height="40px" width="80px"></td>
                                            <td>
                                                <a href="{{route('category.edit', ['id' => $category->id])}}" class="btn btn-outline-success px-3 me-2">Edit</a>
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

