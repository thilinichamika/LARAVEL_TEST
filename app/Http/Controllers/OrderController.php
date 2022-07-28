<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderAll()
    {
        return view('orderAll');
    }
    public function orderAdd()
    {
        return view('orderAdd');
    }
    public function orderAllUser()
    {
        return view('orderAllUser');
    }
    public function orderAddUser()
    {
        return view('orderAddUser');
    }
}
