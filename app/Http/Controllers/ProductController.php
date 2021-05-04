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
    public function show(product $product)
    {
        return view('product.show', compact('product'));
    }
    public function edit(product $product)
    {
        return view('product.edit', compact('product'));
    }
    public function update(Request $request, product $product)
    {
        {
            $request->validate([
            'product_name'=>'required',
            'product_details'=>'required'
            ]);
            $product = Product::update($request->all());
            return redirect()->route('product.index')->with('success','product updated successfully');
        }
    }
    public function destroy(product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success','product deleted successfully');
    }
}
