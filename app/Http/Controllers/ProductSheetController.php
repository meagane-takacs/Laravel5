<?php

namespace App\Http\Controllers;

use App\Http\Controllers;

class ProductSheetController extends Controller
{
    public function __invoke()
    {
        return view ('productSheet');
    }
}
