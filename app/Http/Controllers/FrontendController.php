<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function freelregister()
    {
        return view('auth.freelregister');
    }
    public function compregister()
    {
        return view('auth.compregister');
    }
    public function custregister()
    {
        return view('auth.custregister');
    }
  
}
