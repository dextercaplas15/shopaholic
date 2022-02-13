@extends('layouts.main')

@section('title', '| All Expenses')

@section('content')

<div class="wrap__navigation--dashboard">
    @include('admin.components.navigation')
</div>
<div class="wrap__body--dashboard">
    @include('admin.components.header')
    <div class="wrap__dashboard--inner">
    <p class="mb-2">
      <button class="modal-button btn btn-success mr-2" href="#myModal2">Add Expense Item</button>      
      @include('admin.expenses.create')
      <div class="wrap__products">
        <table class="table table-striped">
        <thead>
          <tr>
            <th>Voucher #</th>
            <th>Date</th>
            <th>Expense Account</th>
            <th>Product ID</th>
            <th>Description</th>
            <th>Cost</th>
          </tr>
        </thead>
        <tbody>
        @foreach($expenses as $expense)
          <tr>
            <td>{{$expense->voucher}}</td>
            <td>{{$expense->date}}</td>
            <td>{{$expense->account}}</td>
            <td>{{$expense->product->id}}</td>
            <td>{{$expense->description}}</td>
            <td>{{$expense->cost}}</td>
          </tr>
        @endforeach
        </tbody>
        </table>
        
      <div class="align-center mb-4">
	  		<a href="{!! $expenses->previousPageUrl() !!}" class="btn btn-default">Prev</a>&nbsp;&nbsp;Page {!! $expenses->currentPage() !!} of {!! $expenses->lastPage() !!}&nbsp;&nbsp;<a href="{!! $expenses->nextPageUrl() !!}" class="btn btn-default">Next</a>	
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

