@extends('layouts.main')

@section('title', '| All Orders')


@section('content')

<div class="wrap__navigation--dashboard">
    @include('admin.components.navigation')
</div>
<div class="wrap__body--dashboard">
    @include('admin.components.header')
    <div class="wrap__dashboard--inner">
    <p class="mb-2">
      <button class="modal-button btn btn-success mr-2" href="#myModal3">New Order</button>
      @include('admin.orders.create')
      <div class="wrap__products">
        <div class="wrap__products">
        <table class="table table-striped">
        <thead>
          <tr>
            <th>Order ID</th>
            <th>Customer Name</th>
            <th>Item Purchased</th>
            <th>Quantity</th>
            <th>Sales</th>
            <th>Order Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
          <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->name }}</td>
            <td>{{ $order->product->name }}</td>
            <td>{{ $order->quantity }}</td>
            <td>{{ number_format($order->quantity * (($order->product->cost + ($order->product->price * $order->product->quantity)) / $order->product->quantity) * 1.25 ) }}</td>
            <td>{{ $order->status }}</td>
            <td>
            <a class="btn btn-warning mr-1" href="{{ route('orders.edit', $order->id) }}">UPDATE</a>
            </td>
          </tr>     
        @endforeach
      </tbody>
    </table>
    <div class="align-center mb-4">
	  		<a href="{!! $orders->previousPageUrl() !!}" class="btn btn-default">Prev</a>&nbsp;&nbsp;Page {!! $orders->currentPage() !!} of {!! $orders->lastPage() !!}&nbsp;&nbsp;<a href="{!! $orders->nextPageUrl() !!}" class="btn btn-default">Next</a>	
	    </div>
            
        </div>
    </div>
</div>


<script>
// Get the button that opens the modal
var btn = document.querySelectorAll("button.modal-button");

// All page modals
var modals = document.querySelectorAll('.modal');

// Get the <span> element that closes the modal
var spans = document.getElementsByClassName("close");

// When the user clicks the button, open the modal
for (var i = 0; i < btn.length; i++) {
 btn[i].onclick = function(e) {
    e.preventDefault();
    modal = document.querySelector(e.target.getAttribute("href"));
    modal.style.display = "block";
 }
}
// When the user clicks on <span> (x), close the modal
for (var i = 0; i < spans.length; i++) {
 spans[i].onclick = function() {
    for (var index in modals) {
      if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
    }
 }
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
     for (var index in modals) {
      if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
     }
    }
}

</script>
