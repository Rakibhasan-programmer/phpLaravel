@extends('master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Login</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('login')}}" method="POST">
                                @csrf
                                <div class="row pb-3">
                                    <label for="" class="col-md-4">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="" class="col-md-4">Password</label>
                                    <div class="col-md-8">
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8 d-flex justify-content-center align-items-center">
                                        <input type="submit" class="btn btn-outline-dark px-5" value="Login">
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
