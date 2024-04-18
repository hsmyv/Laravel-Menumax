<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminStoreRequest;
use App\Http\Requests\AdminUpdateRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth('admin')->user();
        return view('admin.index', ['restaurants' => $user->restaurants]);
    }

    public function show(Admin $admin)
    {
        return view('admin.customer.show', ['customer' => $admin]);
    }

    public function create()
    {
        return view('admin.customer.create');
    }

    public function store(AdminStoreRequest $request)
    {

       $admin = Admin::create($request->validated());
       uploadImage($admin, 'admin-image');
       return redirect()->route('admins.index')->with('success', 'Admin created successfully!');

    }
    public function edit(Admin $admin)
    {
        return view('admin.customer.edit' , compact('admin'));
    }
    public function update(Admin $admin, AdminUpdateRequest $request)
    {
        try {

        if ($request->filled('password')) {
            $admin['password'] = $request->input('password');
        }
            $admin->update($request->validated());
            uploadImage($admin, 'admin-image');
            return redirect()->route('admins.edit', $admin)->with('success', 'Admin updated successfully!');
        } catch (ValidationException $th) {
            return redirect()->route('admins.edit', $admin)->with('error', 'An error occurred while updating the customer');
        }

    }

    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect()->route('admins.index')->with('success', 'Admin deleted successfully!');
    }

    public function update_status(Request $request)
    {
        $adminId = $request->input('adminId');
        $newStatus = $request->input('newStatus');

        admin::where('id' , $adminId)->update([
            'status' => $newStatus
        ]);
    }

    public function remove_image(Request $request)
    {
        $media = Media::find($request->mediaId);
        if ($media) {
            $media->delete();
        }
    }

}
