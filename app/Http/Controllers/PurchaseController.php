<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function store(Product $product)
    {   
        $this->authorize('create',new Purchase());
        Purchase::create([
            'user_id'=>auth()->id(),
            'product_id'=>$product->id,
        ]);
        return back()->with('flash','Purchase created successfully');   
    }
}
