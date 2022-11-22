@section('title', 'Details Page')
@extends('master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="card">
                        <img src="{{asset('/')}}assets/images/program.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$student->name}}</h5>
                            <p class="card-text">{{$student->city}}</p>
                            <p class="card-text">{{$student->subject}}</p>
                            <p class="card-text">{{$student->CGPA}}</p>
                            <a href="{{route('student.manage')}}" class="btn btn-outline-dark">Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
