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
        $services = Service::with('user')->get();
        $itid = ServiceCategory::where('parent_id', 3)->get('id');
        $healthid = ServiceCategory::where('parent_id', 2)->get('id');
        $householdid = ServiceCategory::where('parent_id', 1)->get('id');
        $itservices = Service::whereIn('servicecategory_id', $itid)->get();
        $healthservices = Service::whereIn('servicecategory_id', $healthid)->get();
        $householdservices = Service::whereIn('servicecategory_id', $householdid)->get();
        // dd($healthservices);
        return view('frontend.pages.home')->with([
        'servicecategories' => $servicecategories,
        'services' => $services,
        'itservices' => $itservices,
        'healthservices' => $healthservices,
        'householdservices' => $householdservices,
        ]);
    }
  
}
