<?php

namespace App\Http\Controllers;

use App\Models\activity_log;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $activityLog = activity_log::all();
        // dump($productIn);
        return view('dashboard', compact('activityLog'));
    }
}
