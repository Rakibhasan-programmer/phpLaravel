@extends('front.master')


@section('body')
    <div class="product-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Our</span> Products</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
                    </div>
                </div>
            </div>

            <div class="row">
               @foreach($fruits as $fruit)
                    <div class="col-md-4 py-3">
                        <div class="card">
                            <img src="{{asset($fruit->image)}}" alt="" class="img-top">
                            <div class="card-body">
                                <h3 class="card-title">{{$fruit->name}}</h3>
                                <p class="card-details">{{$fruit->price}}</p>
                                <p class="card-details">{{\Illuminate\Support\Str::words($fruit->description, 5, '...')}}</p>
                                <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
