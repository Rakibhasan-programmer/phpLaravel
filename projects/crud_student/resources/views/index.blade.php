@extends('master')

@section('title')
    Home
@endsection

@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header bg-dark">
                            <h2 class="text-center text-white">Add Student</h2>
                        </div>
                        <div class="card-body">
                            <p class="text-center text-success">{{Session::get('message')}}</p>
                            <form action="{{route('new-student')}}" method="POST">
                                @csrf
                                <div class="row pt-3">
                                    <label for="" class="col-md-4">Name</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="text" name="name">
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <label for="" class="col-md-4">City</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="text" name="city">
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <label for="" class="col-md-4">Subject</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="text" name="subject">
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <label for="" class="col-md-4">CGPA</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="number" name="cgpa">
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-outline-dark form-control" value="Create New Student">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h2 class="text-center">Manage Student</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Name</td>
                                        <td>City</td>
                                        <td>Subject</td>
                                        <td>CGPA</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>City</td>
                                    <td>Subject</td>
                                    <td>CGPA</td>
                                    <td>Action</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
