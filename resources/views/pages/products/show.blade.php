@extends('layouts.nav')

@section('content')

<div class="row">
    <div class="col-md-6">
		<div class="panel panel-color panel-primary">
            <div class="panel-heading"> 
                <h1 class="panel-title">{{$product->name}}</h1> 
            </div> 
            <div class="panel-body"> 
                <div class="list-group"> 
                    <h4 class="list-group-item-heading">product Description</h4> 
                    <p class="list-group-item-text">{{$product->description}}</p><br>
                    <small class="text-muted">Price:  {{$product->price}}</small>
                    <p><small class="text-muted">Tax (%):  {{$product->tax}}</small></p>
                    <small class="text-muted">Total:  {{$product->price+$product->tax}}</small>
                </div> <!-- list-group -->
                <div class="panel-body">
                    <a href="{{route('products.edit',$product)}}" class="btn btn-primary btn-block"><b>Edit Product</b></a>
                </div>
            </div> 
        </div>
	</div>
</div>

@endsection
