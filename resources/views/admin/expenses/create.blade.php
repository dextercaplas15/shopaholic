<!-- The Modal -->
<div id="myModal2" class="modal">
<!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header mb-2">
            <span class="close">&times;</span>
            <h2 class="fs-3">Add Expense Item</h2>
        </div>
        <div class="modal-body">
                {!! Form::open(array('route' => 'expenses.store')) !!}
				<div class="form-group col-md-12">
                    {{ Form::text ('account', null, array('class' => 'form-control', 'placeholder' => 'Account Name')) }}
                </div>
                <div class="form-group">
                    <div class="form-group col-md-4">
                        {{ Form::text ('voucher', null, array('class' => 'form-control', 'placeholder' => 'Voucher #')) }}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::date ('date', null, array('class' => 'form-control', 'placeholder' => 'Invoice Date')) }}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::number ('cost', null, array('class' => 'form-control', 'placeholder' => 'Cost')) }}
                    </div>
					<div class="clearfix"></div>
				</div>
                <div class="form-group col-md-12">
					{{ Form::text ('description', null, array('class' => 'form-control', 'placeholder' => 'Expense Description')) }}
                    <br>
					<select class="form-control" name="product_id">
                            <option>Select Product</option>
						@foreach($products as $product)
							<option value='{{ $product->id }}'>{{ $product->order }}</option>
						@endforeach

					</select>
				</div>
                <div class="form-group col-md-12">
                    {{ Form::submit('Add Expense Item', array('class' => 'btn btn-success')) }}
                    <br>
				</div>
				<div class="clearfix"></div>
				{!! Form::close() !!}
        </div>
    </div>
</div>

