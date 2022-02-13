@extends('layouts.main')

@section('title', '| All Products')


@section('content')

<div class="wrap__navigation--dashboard">
    @include('admin.components.navigation')
</div>
<div class="wrap__body--dashboard">
    @include('admin.components.header')
    <div class="wrap__dashboard--inner">
        <div class="col-md-12">
            <h1 class="fs-4 mb-4">Product Details</h1>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-4">
            <img src="{{ $product->image }}" width="100%" class="product-image"/>
        </div>
        <div class="col-md-8">
            <h2 class="fs-3 mb-4">{{ $product->name }}</h2>
            <p class="italic mb-6">{{ $product->description }}</p>
            <p><strong>RETAIL PRICE: </strong>{{ number_format($product->retail) }}</p>
        </div>
        <div class="clearfix"></div>
    </div>
</div>


