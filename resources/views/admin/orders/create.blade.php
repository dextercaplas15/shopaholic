<!-- The Modal -->
<div id="myModal3" class="modal">
<!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header mb-2">
            <span class="close">&times;</span>
            <h2 class="fs-3">New Order</h2>
        </div>
        <div class="modal-body">
                {!! Form::open(array('route' => 'orders.store')) !!}
				<div class="form-group col-md-12">
                    {{ Form::text ('name', null, array('class' => 'form-control', 'placeholder' => 'Customer Name')) }}
                </div>
                <div class="form-group col-md-12">
                    {{ Form::text ('address', null, array('class' => 'form-control', 'placeholder' => 'Delivery Addres')) }}
                </div>
                <div class="form-group">
                    <div class="form-group col-md-8">
                        <select class="form-control" name="product_id">
                                <option>Select Product</option>
                            @foreach($products as $product)
                                <option value='{{ $product->id }}'>{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::number ('quantity', null, array('class' => 'form-control', 'placeholder' => 'Quantity')) }}
                    </div>
					<div class="clearfix"></div>
				</div>
                <div class="form-group col-md-12">
                    <select class="form-control" name="status">
                            <option>Select Status</option>
                            <option value="pending">Pending (Unpaid)</option>
                            <option value="completed">Completed </option>
                            <option value="cancelled">Cancelled</option>
                    </select>
                </div>
                <div class="form-group col-md-12">
                    {{ Form::submit('Add Order', array('class' => 'btn btn-success')) }}
                    <br>
				</div>
				<div class="clearfix"></div>
				{!! Form::close() !!}
        </div>
    </div>
</div>

