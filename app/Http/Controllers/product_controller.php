<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class product_controller extends Controller
{
    public function index()
    {
        $product = product::all();
        return view('product', [
            "products" => $product,
            "no" => 1
        ]);
    }

    public function loginView()
    {
        return view('login');
    }

    public function proseslogin(Request $request)
    {
        $infologin = $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        if (Auth::attempt($infologin)) {
            return redirect("/");
        } else {
            return redirect('login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/login');
    }
}
