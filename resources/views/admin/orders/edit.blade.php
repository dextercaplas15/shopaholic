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
            {!! Form::model($order, ['route' => ['orders.update',$order->id], 'method' => 'PUT' ]) !!}
            <div class="form-group col-md-12">
                <h2 class="fs-3 mb-4">Update Order</h2>
                {{ Form::text ('name', null, array('class' => 'form-control', 'placeholder' => 'Product Name')) }}
            </div>
            <div class="form-group col-md-12">
                    {{ Form::text ('name', null, array('class' => 'form-control', 'placeholder' => 'Customer Name')) }}
                </div>
                <div class="form-group col-md-12">
                    {{ Form::text ('address', null, array('class' => 'form-control', 'placeholder' => 'Delivery Addres')) }}
                </div>
                <div class="form-group">
                    <div class="form-group col-md-8">
                        {{ Form::text ('description', null, array('class' => 'form-control', 'placeholder' => 'Expense Description')) }}
                        <br>
                        <select class="form-control" name="product_id">
                                <option>Select Product</option>
                            @foreach($products as $product)
                                <option value='{{ $product->id }}'>{{ $product->order }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::number ('quantity', null, array('class' => 'form-control', 'placeholder' => 'Quantity')) }}
                    </div>
					<div class="clearfix"></div>
				</div>
            <div class="form-group col-md-12">
                {{ Form::submit('Update Order', array('class' => 'btn btn-success')) }}
                <br>
            </div>
            <div class="clearfix"></div>
            {!! Form::close() !!}
        </div>
        <div class="clearfix"></div>
    </div>
</div>