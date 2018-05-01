<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function index()
    {
        return view('frontend.shop');
    }
}
