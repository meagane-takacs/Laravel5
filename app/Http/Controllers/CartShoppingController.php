<?php

namespace App\Http\Controllers;

use App\Http\Controllers;

class CartShoppingController extends Controller
{
    public function __invoke()
    {
        return view ('cartShopping');
    }
}
