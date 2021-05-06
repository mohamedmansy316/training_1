<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $product = Product::latest()->paginate(4);
       return view('product.index' , compact('product'));
    }
    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'product_name'=>'required',
        'product_details'=>'required'
        ]);
        $product = Product::create($request->all());
        return redirect()->route('product.index')->with('success','product added successfully');
    }
    public function show($product_id)
    {
        $product = product::findOrFail($product_id);
        return view('product.show', compact('product'));
    }
    public function edit($product_id)
    {
        $product = product::findOrFail($product_id);
        return view('product.edit', compact('product'));
    }
    public function update(Request $request, $product_id)
    {
        {
            $request->validate([
            'product_name'=>'required',
            'product_details'=>'required'
            ]);
            $product = product::findOrFail($product_id);
            $product->update($request->all());
            return redirect()->route('product.index')->with('success','product updated successfully');
        }
    }
    public function destroy($product_id)
    {
        //Get the product
        $product = product::findOrFail($product_id);
        //Delete
        $product->delete();
        //Return with success
        return redirect()->route('product.index')->withSuccess('product deleted successfully');
    }
}
