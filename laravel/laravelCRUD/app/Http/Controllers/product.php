<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class product extends Controller
{
    //this method will be show products
    public function index() {}
    //this method will be create products
    public function create()
    {
        return view('product.create');
    }
    //this method will be show store product
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:4',
            'sku' => 'required|min:5',
            'price' => 'required|Numeric',
        ]);
        if ($validator->fails()) {
            return redirect()->route('product.crate')->withInput()->withErrors($validator);
        }
        echo "okay";
    }
    //this method will be show edit product page
    public function edit() {}
    //this method will be update products
    public function update() {}
    //this method will be delete products
    public function delete() {}
}
