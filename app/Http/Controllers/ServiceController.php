<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'search']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::where('user_id', Auth::id())->get();

        return view('vendor.service.index')->with([
            'services' => $services,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ServiceCategory::all();
        return view('vendor.service.create')->with([
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/service/';
            $serviceImage = date('YmdHis') . "." .$image->getClientOriginalExtension();
            $image->move($destinationPath, $serviceImage);
            $input['image'] = "$serviceImage";
        }
        Service::create($input);
        return redirect(route('service.index'))->with('success', 'Service Added Successfully');
    }

    public function search(Request $request)
    {

        $query = $request->input('query');

        $services = Service::where('name','LIKE',"%$query%")->paginate(10);

        return view('vendor.service.catalog',compact('services'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $categories = ServiceCategory::all();
        return view('vendor.service.edit')->with([
            'categories' => $categories,
            'service' => $service,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $input = $request->all();
//

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/service/';
            $serviceImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $serviceImage);
            $input['image'] = "$serviceImage";
        }else{
            unset($input['image']);
        }

        $service->update($input);
        return redirect(route('service.index'))->with('success', 'Service Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect(route('service.index'))->with('success', 'Service Deleted Successfully');

    }


    public function addToCart($serviceId)
    {
        $service = Service::find($serviceId);

        $allCartItems = [];

        $newItemToAdd =  [
                    'name' => $service->name,
                    'price' => $service->price,
                    'qty' => '1'
        ];

        if(session()->has('cartItems')) {
            $allCartItems = session()->get('cartItems');
        }

        //service already in cart
        if (isset($allCartItems[$serviceId])) {
            $allCartItems[$serviceId]['qty'] = $allCartItems[$serviceId]['qty'] + 1 ;
            $allCartItems[$serviceId]['price'] = $service->price * $allCartItems[$serviceId]['qty'];
        }else {
            $allCartItems[$serviceId] =  $newItemToAdd;
        }

        session()->put('cartItems', $allCartItems);

        return back()->withMessage("Item has been added to cart");

    }

    public function reduceQuantity($serviceId)
    {
        $service = service::find($serviceId);

        $allCartItems = [];

        if (session()->has('cartItems')) {
            $allCartItems = session()->get('cartItems');
        }

        //service already in cart
        if (empty($allCartItems[$serviceId])) {
            return back()->withMessage('No item to remove');
        }

        $qty = $allCartItems[$serviceId]['qty'];

        if($qty > 1) {
            $allCartItems[$serviceId]['qty']--;
            $allCartItems[$serviceId]['price'] = $service->price * $allCartItems[$serviceId]['qty'];
        }

        session()->put('cartItems', $allCartItems);

        return back()->withMessage("Item has been removed from cart");

    }

    public function viewCart()
    {
        // session()->remove('cartItems');
        $allItems = session('cartItems') ?? [];

        // if(isset(session('cartItems'))) {
        //     $allItems  = session('cartItems')
        // }else {
        //     $allItems = [];
        // }

        return view('frontend.pages.cart', compact('allItems'));
    }

    public function deleteCart($serviceId)
    {
        $existingCartItems = session('cartItems');

        if(isset($existingCartItems[$serviceId])) {

            //delete that
            unset($existingCartItems[$serviceId]);

            session()->put('cartItems', $existingCartItems);
        }

        return back();
    }

    // public function updateCart($serviceId)
    // {

    // }

    public function checkout()
    {
        $cartItems = session('cartItems');

        // $address = auth()->user()->address;


        return view('frontend.pages.checkout', compact('cartItems'));
    }

}
