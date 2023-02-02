@extends('layouts.nav')

@section('content')
    @include('partials.err-message')
    <div class="wraper container-fluid">
        <div class="page-title row"> 
            <h3 class="title col-md-6">INVOICES</h3> 
            <a 
                class="btn btn-primary col-md-2 pull-right"
                href="{{ route('invoices.create') }}">
                <strong>Create New Invoices</strong>
            </a>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title push-righ">Invoice per Client</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Client</th>
                                                <th>Amount</th>
                                                <th>Created at</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                                    
                                        <tbody>
                                            @forelse ($invoices as $invoice)
                                                <tr>
                                                    <td>{{$invoice->id}}</td>
                                                    <td>{{$invoice->client->name}}</td>
                                                    <td>{{$invoice->amount}}</td>
                                                    <td>{{$invoice->created_at->format('Y-m-d')}}</td>
                                                    <td>
                                                        <a  href="{{ route('invoices.show',$invoice)}}" 
                                                            class="btn btn-xs btn-success">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>                                                    
                                                </tr>
                                            @empty
                                                <li class="bg-danger text-white p-1"><h2><strong>Not invoices Created</strong></h2></li>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Row -->
    </div>
    
@endsection
