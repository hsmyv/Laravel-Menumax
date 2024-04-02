<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Models\IpAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login_form()
    {
        return view('admin.auth.login');

    }


    public function login(AdminLoginRequest $request)
    {

            $validated = $request->validated();

        if (Auth::guard('admin')->attempt($validated, $request->boolean('remember'))) {
                $this->ip_address();
                return redirect()->route('admin.index');
        }
            throw ValidationException::withMessages([
                'error' => 'Invalid Credentials'
            ]);


    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login.form');
    }

    function ip_address()
    {
        $currentID = auth()->guard('admin')->id();
        $currentIP =  request()->ip();
        $existingIpAddress = IpAddress::where('ip_address', $currentIP)
                                ->where('admin_id', $currentID)
                                ->first();

        if (!$existingIpAddress) {
            IpAddress::create([
                'admin_id' => $currentID,
                'ip_address' => $currentIP,
            ]);
        }

    }

}
