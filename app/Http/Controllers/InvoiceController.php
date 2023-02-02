<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Purchase;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    function index() 
    {
        $this->authorize('view',new Invoice());
        $invoices=Invoice::all();
        return view('pages.invoices.index',compact('invoices'));
    }

    public function show(Invoice $invoice)
    {
        $this->authorize('view',new Invoice());
        return view('pages.invoices.show',compact('invoice'));
    }

    public function create()
    {
        $this->authorize('create',new Invoice());
        $invoice=new Invoice();
        $purchases=Invoice::purchasesWithoutInvoice();
        if(count($purchases)===0){
            return back()->with('flash','All Invoices have been created');
        }else{
            $invoice->invoiceRegister($invoice->amountsByInvoice($purchases));
            return back()->with('flash','New Invoices created');
        }
    }

}
