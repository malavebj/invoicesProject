@extends('layouts.nav')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">Updating Product ID={{$product->id}}</h3></div>
            <div class="panel-body">
                @include('partials.err-message')
                <form method="POST" action="{{ route('products.update', $product) }}" class="form-horizontal" role="form">
                    @csrf{{ method_field('PUT') }}                                   
                    <div class="form-group">
                        <label class="col-md-2 control-label">Name</label>
                        <div class="col-md-10">
                            <input 
                                name="name"
                                type="text" 
                                class="form-control" 
                                placeholder="Product Name"
                                value="{{old('name',$product->name)}}">
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
                                {{old('description',$product->description)}}
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
                                value="{{old('price',$product->price)}}">
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
                                value="{{old('tax',$product->tax)}}">
                        </div>
                    </div>
                    <div class="form-group pull-right">
                        <button class="btn btn-lg  btn-info">Update Product</button>
                  </div>
                </form>
            </div> <!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col -->
</div> <!-- End row -->

@endsection
