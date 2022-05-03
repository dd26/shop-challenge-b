<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index(Request $request)
    {
        $products = Product::all();
        $route = $request->route()->getName();
        $data = [
            'products' => $products,
            'route' => $route
        ];
        return view('pages/products.index', [
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('pages/products.create');
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();
        return redirect()->route('admin');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('pages/products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('pages/products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();
        return redirect()->route('admin');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin');
    }

}
