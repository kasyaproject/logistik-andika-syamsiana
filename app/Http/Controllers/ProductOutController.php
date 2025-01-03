<?php

namespace App\Http\Controllers;

use App\Models\activity_log;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProductOutController extends Controller
{
    //
    public function index()
    {
        $productOut = activity_log::where('activity_type', 'keluar')->orderBy("created_at", "desc")->paginate(10);
        // dump($productOut);
        return view('pages.ProductOutPage.index', compact('productOut'));
    }

    public function create()
    {
        $product = Product::orderBy('name')->get();

        return view('pages.ProductOutPage.create', compact('product'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'product_id' => 'required|numeric',
            'qty' => 'required|numeric',
            'destination' => 'required|string',
        ]);

        if ($validator->fails()) {
            // You can customize the error message display here
            drakify('error', 'Failed to add new Product Outcome');

            return redirect()->route('productOut.index')->withErrors($validator)->withInput();
        }

        activity_log::create([
            'id' => (string) Str::uuid(),
            'product_id' => $request->product_id,
            'quantity' => $request->qty,
            'origin' => $request->destination,
            'activity_type' => 'keluar',
        ]);

        drakify('success', 'New Product Outcome has been added');

        return redirect()->route('productOut.index');
    }

    public function edit(activity_log $productOut)
    {
        $productOut = activity_log::find($productOut->id);

        $product = Product::orderBy('name')->get();
        // dd($productOut->product);

        return view('pages.ProductOutPage.edit', compact('productOut', 'product'));
    }

    public function update(Request $request, activity_log $productOut)
    {
        $request->validate([
            'product_id' => 'required|numeric',
            'qty' => 'required|numeric',
            'destination' => 'required|string',
        ]);
        activity_log::where('id', $productOut->id)->update([
            'product_id' => $request->product_id,
            'quantity' => $request->qty,
            'origin' => $request->destination,
        ]);

        smilify('success', 'Product Outcome has been updated');

        return redirect()->route('productOut.index');
    }

    public function destroy(activity_log $productOut)
    {
        activity_log::destroy($productOut->id);

        smilify('success', 'Product Outcome has been deleted');

        return redirect()->route('productOut.index');
    }
}
