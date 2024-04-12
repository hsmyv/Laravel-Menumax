<?php

namespace App\Providers;

use App\Models\Admin;
use App\Models\IpAddress;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        // $currentID = auth()->guard('admin')->id();
        // $currentIP =  request()->ip();

        // $ip_address = IpAddress::where('ip_address', $currentIP)
        //     ->where('admin_id', '!=', $currentID)
        //             ->get();

        // $admins = [];
        // foreach ($ip_address as $ip) {
        // $admin = $ip->admin;
        //     if ($admin) {
        //         $admins[] = $admin;
        //     }
        // }


        // View::share('components.admin.header',["admins" =>  $admins]);


        View::composer('*', function ($view) {
            $admins = Admin::all();
            $view->with('admins', $admins);
        });
    }
}
