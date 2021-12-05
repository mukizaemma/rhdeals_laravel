<?php

namespace App\Http\Controllers;

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
            return view('user.home');
        }
    }

    public function index()
    {
        if (Auth::id()) {
            return redirect('redirect');
        } else {
            $data = houses::all();
            return view('user.home', compact('data'));
        }
    }
}
