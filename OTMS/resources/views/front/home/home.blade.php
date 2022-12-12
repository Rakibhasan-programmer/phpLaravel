@extends('front.master')

@section('title')
    Home
@endsection

@section('body')
    <section>
        <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="{{asset('/')}}front/images/program.png" class="d-block" style="height: 90vh" alt="Course title">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{asset('/')}}front/images/flutter.png" class="d-block w-100" style="height: 90vh" alt="Course title">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{asset('/')}}front/images/next.png" class="d-block w-100" style="height: 90vh" alt="Course title">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
{{--    slider end--}}

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center pb-5">All Courses</h2>
                    <div class="row">
                        <div class="col-md-4 pt-3">
                            <div class="card">
                                <img src="{{asset('/')}}front/images/php.png" alt="" class="w-100" style="height: 250px">
                                <div class="card-body">
                                    <h4 class="card-title">Php Laravel</h4>
                                    <p>Price: 25000tk</p>
                                    <p>total hour: 200hours</p>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-outline-success float-end">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pt-3">
                            <div class="card">
                                <img src="{{asset('/')}}front/images/php.png" alt="" class="w-100" style="height: 250px">
                                <div class="card-body">
                                    <h4 class="card-title">Php Laravel</h4>
                                    <p>Price: 25000tk</p>
                                    <p>total hour: 200hours</p>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-outline-success float-end">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pt-3">
                            <div class="card">
                                <img src="{{asset('/')}}front/images/php.png" alt="" class="w-100" style="height: 250px">
                                <div class="card-body">
                                    <h4 class="card-title">Php Laravel</h4>
                                    <p>Price: 25000tk</p>
                                    <p>total hour: 200hours</p>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-outline-success float-end">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
