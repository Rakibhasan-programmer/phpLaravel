@section('title', 'Student Page')
@extends('master')

@section('body')
    <section class="py-5 d-flex justify-content-center align-items-center" style="height: 80vh">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h3 class="text-white fw-bold text-center">ADD STUDENT</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('student.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row pb-3">
                                    <label for="" class="col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="" class="col-md-3">City</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="city">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="" class="col-md-3">Subject</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="subject">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="" class="col-md-3">CGPA</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="cgpa">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn btn-outline-dark" id="btn" value="Create New Student">
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
