<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::where('status', 1)->get();

        return view('user.index', compact('restaurants'));
    }

    public function restaurants()
    {
        $restaurants = Restaurant::where('status', 1)->get();
        return view('user.restaurant.index', compact('restaurants'));
    }

    public function restaurantsShow(Restaurant $restaurant)
    {
        return view('user.restaurant.show', compact('restaurant'));
    }
}
