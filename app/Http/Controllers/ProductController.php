<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function food_baverage() {
        return view('product.baverage');
    }

    public function beauty_health() {
        return view('product.health');
    }

    public function home_care() {
        return view('product.care');
    }

    public function baby_kid() {
        return view('product.kid');
    }
}
