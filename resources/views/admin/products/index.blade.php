@extends('layouts.main')

@section('title', '| All Products')


@section('content')

<div class="wrap__navigation--dashboard">
    @include('admin.components.navigation')
</div>
<div class="wrap__body--dashboard">
    @include('admin.components.header')
    <div class="wrap__dashboard--inner">
    <p class="mb-2">
      <button class="modal-button btn btn-success mr-2" href="#myModal1">Add New Product</button>
      </p>
      @include('admin.products.create')
      <div class="wrap__products">
        <table class="table table-striped">
        <thead>
          <tr>
            <th>PO #</th>
            <th>Invoice Date</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Expenses</th>
            <th>Related Cost</th>
            <th>Retail Price</th>
            <th width="20%">Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
          <tr>
            <td>{{$product->order}}</td>
            <td>{{$product->date}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->price}}</td>
            <td id="cost">{{number_format($product->price * $product->quantity)}}</td>
            <td>{{number_format($product->cost)}}</td>
            <td>{{number_format((($product->cost + ($product->price * $product->quantity)) / $product->quantity) * 1.25 )}}</td>
            <td class="wrap__data--cta">
              <a class="btn btn-primary mr-1 modal-button" href="{{ route('products.show', $product->id) }}">VIEW</a>
              <a class="btn btn-warning mr-1" href="{{ route('products.edit', $product->id) }}">UPDATE</a>
              {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) !!}
                  {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
              {!! Form::close() !!}
            </td>
            
          </tr>     
        @endforeach
      </tbody>
    </table>
    <div class="align-center mb-4">
	  		<a href="{!! $products->previousPageUrl() !!}" class="btn btn-default">Prev</a>&nbsp;&nbsp;Page {!! $products->currentPage() !!} of {!! $products->lastPage() !!}&nbsp;&nbsp;<a href="{!! $products->nextPageUrl() !!}" class="btn btn-default">Next</a>	
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
