@extends('master')

@section('title')
    Home
@endsection

@section('content')
    <div class="container pt-5">
        <div class="row mx-auto">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header bg-dark">
                            <h2 class="text-center text-white">Update Student</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{route('update', ['id' => $student->id])}}" method="POST">
                                @csrf
                                <div class="row pt-3">
                                    <label for="" class="col-md-4">Name</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="text" name="name" value="{{$student->name}}">
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <label for="" class="col-md-4">City</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="text" name="city" value="{{$student->city}}">
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <label for="" class="col-md-4">Subject</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="text" name="subject" value="{{$student->subject}}">
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <label for="" class="col-md-4">CGPA</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="number" name="cgpa" value="{{$student->cgpa}}">
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-outline-dark form-control" value="Update New Student">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
