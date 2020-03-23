<?php

namespace App\Http\Controllers;

use App\Http\Controllers;

class ProductListController extends Controller
{
    public function __invoke()
    {
        return view ('productList');
    }
}
