@extends('layouts.nav')

@section('content')

<div class="wraper container-fluid">
    <div class="page-title"> 
        <h3 class="title">Invoice</h3> 
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">
                    <h4>Invoice</h4>
                </div> -->
                <div class="panel-body">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-right"><img style="background: grey" src={{asset("img/single-logo.png")}} alt="logo">
                            </h4>
                            
                        </div>
                        <div class="pull-right">
                            <h4>Invoice # <br>
                                <strong>{{$invoice->created_at->format('Y-m-d')}}-{{$invoice->id}}</strong>
                            </h4>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="pull-left m-t-30">
                                <address>
                                  <strong>{{$invoice->client->name}}</strong><br>
                                  {{$invoice->client->email}}<br>
                                  San Francisco, CA 94107<br>
                                  <abbr title="Phone">P:</abbr> (123) 456-7890
                                  </address>
                            </div>
                            <div class="pull-right m-t-30">
                                <p><strong>Order Date: </strong> {{$invoice->created_at->format('Y M d')}}</p>
                                <p class="m-t-10"><strong>Order Status: </strong> <span class="label label-warning">Pending</span></p>
                                <p class="m-t-10"><strong>Order ID: </strong> #123456</p>
                            </div>
                        </div>
                    </div>
                    <div class="m-h-50"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table m-t-30">
                                    <thead>
                                        <tr class="row">
                                            <th class="col-md-1">Code</th>
                                            <th class="col-md-2">Item</th>
                                            <th class="col-md-6">Description</th>
                                            <th class="col-md-1">Unit Cost</th>
                                            <th class="col-md-1">Tax (%)</th>
                                            <th class="col-md-1">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($invoice->purchases as $purchase)
                                            <tr class="row">
                                                <td class="col-md-1">{{$purchase->product->id}}</td>
                                                <td class="col-md-2">{{$purchase->product->name}}</td>
                                                <td class="col-md-6">{{$purchase->product->description}}</td>
                                                <td class="col-md-1">{{$purchase->product->price}}</td>
                                                <td class="col-md-1">{{$purchase->product->tax}}</td>
                                                <td class="col-md-1">{{$purchase->product->price + ($purchase->product->price*$purchase->product->tax/100)}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="border-radius: 0px;">
                        <div class="col-md-3 col-md-offset-9">
                            <p class="text-right"><b>Sub-total:</b> {{$invoice->amount-$invoice->tax}}</p>
                            <p class="text-right">Taxs: {{$invoice->tax}}</p>
                            <hr>
                            <h3 class="text-right">USD {{$invoice->amount}}</h3>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
