<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    public function index()
    {
        $users = DB::select('select * from Products');
        return view('delete',['users'=>$users, 'title'=> 'Delete Item']);
    }

    public function delete($id) 
    {
        DB::delete('delete from Products where Id = ?', [$id]);
        return view('delete_success', ['title' => 'Delete Item']);
    }
}
