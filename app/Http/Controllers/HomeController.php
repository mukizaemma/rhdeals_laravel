<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Houses;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.home');
        } else {

            $categories = Categories::all();
            return view('user.home', compact('categories'));
        }
    }

    public function index()
    {
        if (Auth::id()) {
            return redirect('redirect');
        } else {
            $data = houses::all();
            $categories = Categories::all();
            return view('user.home')->with(compact('data', 'categories'));
        }
    }
}
