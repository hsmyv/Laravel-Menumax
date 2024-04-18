<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\AdminUpdateRequest;
use App\Models\Admin;
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
                return redirect()->route('admins.index');
        }
            throw ValidationException::withMessages([
                'error' => 'Invalid Credentials'
            ]);


    }

    public function logout(Request $request){
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
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

    function switch_account(Request $request, $id)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $admin = Admin::find($id);
        Auth::login($admin);
        return redirect()->route('admins.index');

    }

    function profile()
    {
        $admin = auth('admin')->user();
        return view('admin.profile.edit', compact('admin'));
    }

    function update_profile(Admin $admin, AdminUpdateRequest $request)
    {
        if ($request->filled('password')) {
            $admin['password'] = $request->input('password');
        }
            $admin->update($request->validated());
            uploadImage($admin, 'admin-image');
            return redirect()->route('admin.profile')->with('success', 'Profile updated successfully!');
    }
}
