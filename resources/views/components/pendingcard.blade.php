<h2 class="heading fs-3 bold text-primary mb-4">Pending pending</h2>
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
        @foreach($pending as $pend)
        <tr>
            <td>{{ $pend->id }}</td>
            <td>{{ $pend->name }}</td>
            <td>{{ $pend->address }}</td>
            <td>{{ $pend->product_id }}</td>
            <td>{{ $pend->quantity }}</td>
        </tr>     
        @endforeach
    </tbody>
</table>
<div class="align-center mb-4">
    <a href="{!! $pending->previousPageUrl() !!}" class="btn btn-default">Prev</a>&nbsp;&nbsp;Page {!! $pending->currentPage() !!} of {!! $pending->lastPage() !!}&nbsp;&nbsp;<a href="{!! $pending->nextPageUrl() !!}" class="btn btn-default">Next</a>	
</div>