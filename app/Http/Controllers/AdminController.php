<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function product()
    {
        return view('admin.product');
    }

    // public function tender()
    // {
    //     return view('admin.services.tenders');
    // }
}
