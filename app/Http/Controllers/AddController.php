<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddController extends Controller
{
    public function addform() 
    {
        return view('add', ['title' => 'Add Item']);
    }

    public function add(Request $request)
    {
        $name = $request->input('product_name');
        $category = $request->input('product_category');
        $size = $request->input('product_size');
        $color = $request->input('product_color');
        DB::insert('insert into Products (Name, Category, Size, Color) values(?,?,?,?)',[$name, $category, $size, $color]);
        return view('add_success', ['title' => 'Add Item']);
    }
}