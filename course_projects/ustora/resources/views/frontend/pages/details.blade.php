@extends('frontend.layouts.master')

@section('title')
    Details
@endsection

@section('frontend_content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset($product->image)}}" alt="" style="width: 270px">
            </div>
        </div>
    </div>

@endsection

