<?php

namespace App\Http\Controllers;

use App\Models\activity_log;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductInController extends Controller
{
    //
    public function index()
    {
        $productIn = activity_log::where('activity_type', 'masuk')->paginate(10);
        // dump($product);

        return view('pages.ProductInPage.index', compact('productIn'));
    }

    public function create()
    {
        $product = Product::orderBy('name')->get();

        return view('pages.ProductInPage.create', compact('product'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'product_id' => 'required|numeric',
            'qty' => 'required|numeric',
            'origin' => 'required|string',
        ]);

        activity_log::create([
            'id' => (string) Str::uuid(),
            'product_id' => $request->product_id,
            'quantity' => $request->qty,
            'origin' => $request->origin,
            'activity_type' => 'masuk',
        ]);

        return redirect()->route('productIn.index');
    }

    public function edit(activity_log $productIn)
    {
        $productIn = activity_log::find($productIn->id);

        $product = Product::orderBy('name')->get();
        // dd($productIn->product);

        return view('pages.ProductInPage.edit', compact('productIn', 'product'));
    }

    public function update(Request $request, activity_log $productIn)
    {
        $request->validate([
            'product_id' => 'required|numeric',
            'qty' => 'required|numeric',
            'origin' => 'required|string',
        ]);
        activity_log::where('id', $productIn->id)->update([
            'product_id' => $request->product_id,
            'quantity' => $request->qty,
            'origin' => $request->origin,
        ]);
        return redirect()->route('productIn.index');
    }

    public function destroy(activity_log $productIn)
    {
        activity_log::destroy($productIn->id);

        return redirect()->route('productIn.index');
    }
}
