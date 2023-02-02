@extends('layouts.nav')

@section('content')
    <div class="wraper container-fluid">
        <div class="page-title"> 
            <h3 class="title">PRODUCTS</h3> 
        </div>

        @forelse ($products as $product)
            <div class="row">
                <div class="col">
                    <div class="panel panel-color panel-primary">
                        <div class="panel-heading"> 
                            <h1 class="panel-title">{{$product->name}}</h1> 
                        </div> 
                        <div class="panel-body"> 
                            <div class="list-group"> 
                                <h4 class="list-group-item-heading">Product Description</h4> 
                                <p class="list-group-item-text">{{$product->description}}</p><br>
                                <p class="text-muted">Price:  {{$product->price}}</p>
                                <p class="text-muted">Tax:  {{$product->tax}}%</p>
                                <p class="text-muted">Total:  {{$product->price+$product->tax}}</p>
                                <p class="text-muted">Published at:  {{$product->created_at->format('m/d/Y')}}</p>
                            </div> <!-- list-group -->
                            @can('CreatePurchases', auth()->user())
                                <div class="panel-body">
                                    <a href="{{ route('purchase.store',$product) }}" class="btn btn-success btn-lg pull-right"><b>Buy Product</b></a>
                                </div>
                            @endcan
                        </div> 
                    </div>
                </div>
            </div>   
        @empty
            <div class="row"> 
                <div class="col-lg-12"> 
                    <li class="bg-danger text-white p-1">Not Products to sell</li>
                </div> 
            </div> <!-- End row -->   
        @endforelse  
    </div> <!-- END Wraper -->
@endsection