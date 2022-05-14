<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function index()
    {
        $users = DB::table('Products')->simplePaginate(5);
        return view('edit',['users'=>$users, 'title'=>'Products']);
    }

    public function show($id) 
    {
        $users = DB::select('select * from Products where id =?',[$id]);
        return view('product_edit',['users'=>$users, 'title'=>'Edit Items']);
    }

    public function edit(Request $request,$id)
    {
        $name = $request->input('product_name');
        $category = $request->input('product_category');
        $size = $request->input('product_size');
        $color = $request->input('product_color');
        DB::update('update Products set Name = ? where id = ?', [$name,$id]);
        DB::update('update Products set Category = ? where id = ?', [$category,$id]);
        DB::update('update Products set Size = ? where id = ?', [$size,$id]);
        DB::update('update Products set Color = ? where id = ?', [$color,$id]);
        return view('edit_success', ['title' => 'Edit Items']);
    }
}
