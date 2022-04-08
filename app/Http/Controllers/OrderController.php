<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Order $order)
    {
        $orders = Order::with(['user'])->get();
        return view('vendor.order.index')->with([
            'orders' =>$orders,
            'order' =>$order,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'shipping_fullname' => 'required',
            'shipping_state' => 'required',
            'shipping_city' => 'required',
            'shipping_address' => 'required',
            'shipping_phone' => 'required',
            'shipping_zipcode' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

       //save to db
        $order = new Order();

        $order->shipping_fullname = $request->input('shipping_fullname');
        $order->shipping_state = $request->input('shipping_state');
        $order->shipping_city = $request->input('shipping_city');
        $order->shipping_address = $request->input('shipping_address');
        $order->shipping_phone = $request->input('shipping_phone');
        $order->shipping_zipcode = $request->input('shipping_zipcode');
        $order->latitude = $request->input('latitude');
        $order->longitude = $request->input('longitude');


        $order->payment_method = 'home_delivery';
        $order->order_number = uniqid('OrderNumber-');
        $order->status = 'pending';
        $order->is_paid = 0;

        $order->grand_total = \App\Models\Cart::totalPrice();
        $order->item_count = \App\Models\Cart::totalItems();

        $order->vendor_id = 6;
        $order->user_id = auth()->user()->id;
        $order->save();


        //save order items (services)

        foreach(session('cartItems') as $serviceId => $cartItem) {
            $orderItem = new OrderItem();

            $orderItem->service_id = $serviceId;
            $orderItem->order_id = $order->id;
            $orderItem->quantity = $cartItem['qty'];
            $orderItem->price = $cartItem['price'];

            $orderItem->save();
        }

        //empty the cart
        session()->remove('cartItems');


        //send mail to customer

        // Mail::to(auth()->user()->email)->send(new OrderCompleted);


        // return redirect()->route('order.completed');
        return redirect()->route('thankyou');
        // return redirect('/order-completed');
    }

    public function thankyou()
    {
        return view('frontend.pages.thankyou');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('vendor.order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $statusOptions = ['processing', 'pending', 'completed', 'decline'];

        return view('vendor.order.edit',compact('order','statusOptions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $order->status = $request->input('status');
        $order->is_paid = $request->input('is_paid');
        $order->notes = $request->input('notes');
        $order->save();


        return redirect()->route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
