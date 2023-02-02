 <!-- Modal -->
 <div id="createProductModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                <h4 class="modal-title">Create New Product</h4> 
            </div> 
			<form method="POST" action="{{ route('products.store') }}" class="form-horizontal" role="form">
                @csrf                                   
                <div class="form-group">
                    <label class="col-md-2 control-label">Name</label>
                    <div class="col-md-10">
                        <input 
                            name="name"
                            type="text" 
                            class="form-control" 
                            placeholder="Product Name"
                            value="{{old('name')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Description</label>
                    <div class="col-md-10">
                        <textarea 
                            class="form-control" 
                            rows="5"
                            name="description"
                            placeholder="Product Description">
                            {{old('description')}}
                        </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="price">Price</label>
                    <div class="col-md-10">
                        <input 
                            type="number" 
                            id="price" 
                            name="price" 
                            class="form-control" 
                            placeholder="Product's price"
                            value="{{old('price')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="tax">Tax (%)</label>
                    <div class="col-md-10">
                        <input 
                            type="number" 
                            id="tax" 
                            name="tax" 
                            class="form-control" 
                            placeholder="Product's tax"
                            value="{{old('tax')}}">
                    </div>
                </div>
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button> 
                    <button class="btn btn-info">Create Product</button> 
                </div>
            </form>
        </div> 
    </div>
</div>
<!-- /.modal -->