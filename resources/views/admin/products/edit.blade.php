@extends('layouts.main')

@section('title', '| Update Product')


@section('content')

<div class="wrap__navigation--dashboard">
    @include('admin.components.navigation')
</div>
<div class="wrap__body--dashboard">
    @include('admin.components.header')
    <div class="wrap__dashboard--inner">
        <div class="col-md-12">
            {!! Form::model($product, ['route' => ['products.update',$product->id], 'method' => 'PUT' ]) !!}
            <div class="form-group col-md-12">
                <h2 class="fs-3 mb-4">Update Product</h2>
                {{ Form::text ('name', null, array('class' => 'form-control', 'placeholder' => 'Product Name')) }}
            </div>
            <div class="form-group">
                <div class="form-group col-md-6">
                    {{ Form::text ('order', null, array('class' => 'form-control', 'placeholder' => 'Purchase Order #')) }}
                </div>
                <div class="form-group col-md-6">
                    {{ Form::date ('date', null, array('class' => 'form-control', 'placeholder' => 'Invoice Date')) }}
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="form-group col-md-12">
                {{ Form::textarea ('description', null, array('class' => 'form-control', 'placeholder' => 'Product Description')) }}
            </div>
            <div>
                <div class="form-group col-md-4">
                    {{ Form::number ('quantity', null, array('class' => 'form-control', 'placeholder' => 'Quantity')) }}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::number ('price', null, array('class' => 'form-control', 'placeholder' => 'Purchase Price')) }}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::number ('cost', null, array('class' => 'form-control', 'placeholder' => 'Selling Price')) }}
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="form-group col-md-12">
                {{ Form::text ('image', null, array('class' => 'form-control', 'placeholder' => 'Image Source Link')) }}
            </div>
            <div class="form-group col-md-12">
                {{ Form::submit('Add Product', array('class' => 'btn btn-success')) }}
                <br>
            </div>
            <div class="clearfix"></div>
            {!! Form::close() !!}
        </div>
        <div class="clearfix"></div>
    </div>
</div>