@extends('layouts.master')
@section('content')
<div class="row row-cols-1 row-cols-md-4 mt-3">
@foreach ($products as $product)
    <div class="col mb-4">
        <div class="card h-100">
            <a href="#"><img src="{{$product->imgPath}}" class="card-img-top" alt=""></a>
            <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">{{$product->details}}</p>
                <div class="d-flex justify-content-between">
                    <p class="text-primary">{{$product->price}}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection('content')


