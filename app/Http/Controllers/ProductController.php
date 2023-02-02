<?php

namespace App\Http\Controllers;

use App\Http\Requests\createProductRequest;
use App\Http\Requests\updateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index() 
    {
        $this->authorize('view',new Product());
        $products=Product::all();
        return view('pages.products.index',compact('products'));
    }

    public function show(Product $product)
    {
        $this->authorize('view',$product);
        return view('pages.products.show',compact('product'));
    }

    public function edit(Product $product)
    {   
        $this->authorize('update',$product);
        return view('pages.products.edit',compact('product'));
    }

    public function update(updateProductRequest $request, Product $product)
    {    
        $this->authorize('update',$product);
        $product->update($request->all());
        return redirect()->route('products.show', $product)->with('flash','Your product has been updated');
    }

    public function store(createProductRequest $request)
    {
        $this->authorize('create',new Product());
        Product::create($request->validated());
        return redirect()->route('products.index')->with('flash','The Product has been Created Succefully');
    }

    function destroy(Product $product) 
    {
        $this->authorize('delete',$product);
        $product->delete();
        return redirect()->route('products.index')->with('flash','The Product has been Deleted');
    }
}
