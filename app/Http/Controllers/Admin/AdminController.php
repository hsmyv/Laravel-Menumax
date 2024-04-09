<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth('admin')->user();
        return view('admin.index', ['restaurants' => $user->restaurants]);
    }

}
