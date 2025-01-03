<?php

namespace App\Http\Controllers;

use App\Models\activity_log;
use App\Models\Product;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    //
    public function ProductIn()
    {
        $productIn = activity_log::where('activity_type', 'masuk')->paginate(10);
        $product = activity_log::all();
        // dump($product);
        return view('pages.ProductInPage.index', compact('productIn'));
    }
    public function ProductInDestroy(Product $product)
    {
        activity_log::destroy($product->id);

        return redirect()->route('product.ProductIn');
    }

    public function ProductOut()
    {
        $productOut = activity_log::where('activity_type', 'keluar')->paginate(10);
        // dump($productOut);
        return view('pages.ProductOutPage.index', compact('productOut'));
    }
}
