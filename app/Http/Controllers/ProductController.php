<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::paginate(5);
        return view('backend.product.index', compact('products'));
    }


    public function create()
    {
        return view('backend.product.create');
    }


    public function store(Request $request)
    {
        $product = product::create([

            "image" => $request->image,
            "name" => $request->name,
            "unit" => $request->unit,
            "price" => $request->price,
            "stock" => $request->stock,
            "description" => $request->description
        ]);

        return redirect()->route('product.index')->with('success', 'Product Created Successfully');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $product = Product::find($id);
        return view('backend.product.edit', compact('product'));
    }


    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update([
            "image" => $request->image,
            "name" => $request->name,
            "unit" => $request->unit,
            "price" => $request->price,
            "stock" => $request->stock,
            "description" => $request->description
        ]);

        return redirect()->route('product.index')->with('success', 'Product Updated Successfully');
    }


    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product Deleted Successfully');
    }
}
