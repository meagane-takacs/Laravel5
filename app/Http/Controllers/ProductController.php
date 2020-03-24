<?php

namespace App\Http\Controllers;

use App\Http\Controllers;

class ProductController extends Controller
{
    public function productListf()
    {
        return view ('productList');
    }

    public function productSheetf()
    {
        return view ('productSheet');
    }
}
