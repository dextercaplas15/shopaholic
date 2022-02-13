@extends('layouts.main')

@section('title', '| Cancelled Orders')


@section('content')

<div class="wrap__navigation--dashboard">
    @include('admin.components.navigation')
</div>
<div class="wrap__body--dashboard">
    @include('admin.components.header')
    <div class="wrap__dashboard--inner">
        <div class="wrap__products">
        <table class="table table-striped">
        <thead>
          <tr>
            <th>Order ID</th>
            <th>Customer Name</th>
            <th>Delivery Address</th>
            <th>Product</th>
            <th>Quantity</th>
          </tr>
        </thead>
        <tbody>
        @foreach($cancelled as $cancel)
          <tr>
            <td>{{ $cancel->id }}</td>
            <td>{{ $cancel->name }}</td>
            <td>{{ $cancel->address }}</td>
            <td>{{ $cancel->product_id }}</td>
            <td>{{ $cancel->quantity }}</td>
          </tr>     
        @endforeach
      </tbody>
    </table>
    <div class="align-center mb-4">
	  		<a href="{!! $cancelled->previousPageUrl() !!}" class="btn btn-default">Prev</a>&nbsp;&nbsp;Page {!! $cancelled->currentPage() !!} of {!! $cancelled->lastPage() !!}&nbsp;&nbsp;<a href="{!! $cancelled->nextPageUrl() !!}" class="btn btn-default">Next</a>	
	    </div>
        </div>
    </div>    
</div>


