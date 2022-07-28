<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $role=Auth::user()->role;

        if($role=='0')
        {
            return view('home');
        }

        else
        {
            return view('homeUser');
        }
    }
}
