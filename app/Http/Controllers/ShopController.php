<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    // Master Page: http://vinyl_shop.test/shop or http://localhost:3000/shop
    public function index()
    {
        return 'Master Page works';
    }

    // Detail Page: http://vinyl_shop.test/shop/{id} or http://localhost:3000/shop/{id}
    public function show($id)
    {
        return "Details for record $id";
    }
}
