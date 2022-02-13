<!-- The Modal -->
<div id="myModal1" class="modal">
<!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header mb-2">
            <span class="close">&times;</span>
            <h2 class="fs-3">Add New Product</h2>
        </div>
        <div class="modal-body">
                {!! Form::open(array('route' => 'products.store')) !!}
				<div class="form-group col-md-12">
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
                        {{ Form::number ('quantity', null, array('class' => 'form-control', 'placeholder' => 'Qty.')) }}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::number ('price', null, array('class' => 'form-control', 'placeholder' => 'Purchase Price')) }}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::number ('cost', null, array('class' => 'form-control', 'placeholder' => 'Related Costs')) }}
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
    </div>
</div>