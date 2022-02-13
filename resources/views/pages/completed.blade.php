@extends('layouts.main')

@section('title', '| Completed Orders')


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
        @foreach($completed as $done)
          <tr>
            <td>{{ $done->id }}</td>
            <td>{{ $done->name }}</td>
            <td>{{ $done->address }}</td>
            <td>{{ $done->product_id }}</td>
            <td>{{ $done->quantity }}</td>
          </tr>     
        @endforeach
      </tbody>
    </table>
    <div class="align-center mb-4">
	  		<a href="{!! $completed->previousPageUrl() !!}" class="btn btn-default">Prev</a>&nbsp;&nbsp;Page {!! $completed->currentPage() !!} of {!! $completed->lastPage() !!}&nbsp;&nbsp;<a href="{!! $completed->nextPageUrl() !!}" class="btn btn-default">Next</a>	
	    </div>
        </div>
    </div>    
</div>


