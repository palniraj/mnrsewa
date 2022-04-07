<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceCategory;
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
    public function home(){
        $servicecategories = ServiceCategory::where('is_featured', 'on')->where('status', 'active')->pluck('name');
        // dd($servicecategories);
        $services = Service::all();
        return view('frontend.pages.home')->with([
        'servicecategories' => $servicecategories,
        'services' => $services,
        ]);
    }
  
}
