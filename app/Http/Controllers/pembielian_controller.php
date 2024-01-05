<?php

namespace App\Http\Controllers;

use App\Models\pembelian;
use App\Models\product;
use Illuminate\Http\Request;

class pembielian_controller extends Controller
{
    public function add(product $product)
    {
        return view('pembelian', [
            'products' => $product
        ]);
    }
    public function addproses(Request $request)
    {
        pembelian::create($request->all());
        return (redirect('/'));
    }
    public function show()
    {
        $data = pembelian::all();
        return view('beli', [
            "datas" => $data,
        ]);
    }

    public function delete(string $nama)
    {
        pembelian::where('nama_pembeli', '=', $nama)->delete();
        return (redirect('/'));
    }
}
