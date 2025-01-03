<?php

namespace App\Http\Controllers;

use App\Models\activity_log;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProductInController extends Controller
{
    //
    public function index()
    {
        $productIn = activity_log::where('activity_type', 'masuk')->orderBy("created_at", "desc")->paginate(10);
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
        $validator = Validator::make($request->all(), [
            'product_id' => 'required|numeric',
            'qty' => 'required|numeric',
            'origin' => 'required|string',
        ]);

        if ($validator->fails()) {
            // You can customize the error message display here
            drakify('error', 'Failed to add new Product Income');

            return redirect()->route('productIn.index')->withErrors($validator)->withInput();
        }

        activity_log::create([
            'id' => (string) Str::uuid(),
            'product_id' => $request->product_id,
            'quantity' => $request->qty,
            'origin' => $request->origin,
            'activity_type' => 'masuk',
        ]);

        drakify('success', 'New Product Income has been added');

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

        smilify('success', 'Product Income has been updated');

        return redirect()->route('productIn.index');
    }

    public function destroy(activity_log $productIn)
    {
        activity_log::destroy($productIn->id);

        smilify('success', 'Product Income has been deleted');

        return redirect()->route('productIn.index');
    }
}
