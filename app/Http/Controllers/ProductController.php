<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {        
        $products = Product::paginate(20);
        return view('products.index',compact(['products']));
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return redirect()->back()->with('success','Product has been created Successfully');
    }

    public function show(Product $product)
    {        

        return view('products.show',compact(['product']));
    }

    public function edit(Product $product)
    {        
        return view('products.edit',compact(['product']));
    }

    public function update(Request $request, Product $product)
    {        
        $product->update($request->all());

        return redirect()->route('products.index')->with('success','Product has been updated Successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success','Product has been deleted Successfully');
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->ids;        
        \DB::table("products")->whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Products Deleted successfully."]);
    }
}