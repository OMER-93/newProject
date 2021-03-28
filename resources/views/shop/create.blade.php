@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-12">
            <form action="{{route('home.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="#productName">Product Name</label>
                <input name="name" class="form-control" id="#productName" type="text">
            </div>

            <div class="form-group">
                <label for="#productPrice">Product Price</label>
                <input name="price" class="form-control" id="#productPrice" type="number" min=0>
            </div>

            <div class="form-group">
                <div class="custom-file">
                    <label for="#productImage">Product Image Address(URL)	&nbsp;</label>
                    <input class="form-control" name="imgPath" id="productImage" type="text">
                </div>
            </div>

            <div class="form-group">
                <input name="status" class="mx-2" id="status" type="checkbox" aria-label="Publish ">
                <label for="#status"> Publish</label>
            </div>

            <div class="form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Product Description</span>
                </div>
                <textarea name="details" rows="10" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Create-Product</button>
            </form>
        </div>
    </div>
</div>
@endsection('content')
