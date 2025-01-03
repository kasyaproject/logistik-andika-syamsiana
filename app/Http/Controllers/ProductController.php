<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $product = Product::orderBy("created_at", "desc")->paginate(10);
        // dump($product);

        return view('pages.ProductPage.index', compact('product'));
    }

    public function create()
    {
        return view('pages.ProductPage.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:5|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'description' => 'required|string|min:5',
        ]);

        Product::create($request->all());

        return redirect()->route('product.index');
    }

    public function edit(Product $product)
    {
        $product = Product::find($product->id);
        // dump($product);

        return view('pages.ProductPage.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|min:5|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'description' => 'required|string|min:5',
        ]);

        Product::where('id', $product->id)->update($request->only('name', 'price', 'stock', 'description'));

        return redirect()->route('product.index');
    }

    public function destroy(Product $product)
    {
        Product::destroy($product->id);

        return redirect()->route('product.index');
    }
}
