<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public static function totalItems()
    {
        if(session()->has('cartItems')) {
            return count(session('cartItems'));
        }

        return 0;

    }

    public static function totalPrice()
    {
        $totalPrice = 0;

        if (session()->has('cartItems')) {

            $allItems = session('cartItems');

            foreach($allItems as $item) {
                $totalPrice = $totalPrice + $item['price'];
            }

        }

        return $totalPrice;
    }
}
