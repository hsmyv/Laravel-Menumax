<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OpeningTimeUpdateRequest;
use App\Http\Requests\RestaurantStoreRequest;
use App\Http\Requests\RestaurantUpdateRequest;
use App\Models\DeliveryInformation;
use App\Models\OpeningTime;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.restaurant.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RestaurantStoreRequest $request)
    {
        $restaurant = Restaurant::create(array_merge($request->validated(), ['admin_id' => auth('admin')->id()]));
        DeliveryInformation::create(['restaurant_id' => $restaurant->id]);
        OpeningTime::create(['restaurant_id' => $restaurant->id]);
        uploadImage($restaurant, 'restaurant-main-image');
        uploadImage($restaurant, 'restaurant-main-video');
        return redirect()->route('admins.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        return view('admin.restaurant.show' , compact('restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {

       $openingTime = $restaurant->openingTime;
       $deliveryInformation = $restaurant->deliveryInformation;
        return view('admin.restaurant.edit' , compact('restaurant', 'openingTime', 'deliveryInformation'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RestaurantUpdateRequest $request, Restaurant $restaurant)
    {
        $restaurant->update($request->validated());
        uploadImage($restaurant, 'restaurant-main-image');
        uploadImage($restaurant, 'restaurant-main-video');
        return redirect()->route('restaurants.edit', $restaurant)->with('success', 'Restaurant updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant)
    {
        $restaurant->products()->delete();
        $restaurant->delete();
        return redirect()->route('admins.index');
    }

    public function openingTime(Restaurant $restaurant, OpeningTimeUpdateRequest $request)
    {
        $openingTime = $restaurant->openingTime;
        $validatedData = $request->validated();

        $openingTime->update([
            'monday' => $validatedData['monday'], // Update each weekday column individually
            'tuesday' => $validatedData['tuesday'],
            'wednesday' => $validatedData['wednesday'],
            'thursday' => $validatedData['thursday'],
            'friday' => $validatedData['friday'],
            'saturday' => $validatedData['saturday'],
            'sunday' => $validatedData['sunday'],
        ]);

        return redirect()->route('restaurants.edit', $restaurant)->with('openingTime', 'Restaurant updated successfully!');

    }

    public function deliveryInformation(Restaurant $restaurant, OpeningTimeUpdateRequest $request)
    {
        $deliveryInformation = $restaurant->deliveryInformation;
        $validatedData = $request->validated();

        $deliveryInformation->update([
            'monday' => $validatedData['monday'], // Update each weekday column individually
            'tuesday' => $validatedData['tuesday'],
            'wednesday' => $validatedData['wednesday'],
            'thursday' => $validatedData['thursday'],
            'friday' => $validatedData['friday'],
            'saturday' => $validatedData['saturday'],
            'sunday' => $validatedData['sunday'],
        ]);

        return redirect()->route('restaurants.edit', $restaurant)->with('deliveryInformation', 'Restaurant updated successfully!');

    }
    public function update_status(Request $request)
    {
        $restaurantId = $request->input('restaurantId');
        $newStatus = $request->input('newStatus');

        Restaurant::where('id' , $restaurantId)->update([
            'status' => $newStatus
        ]);
    }

    public function remove_main_image(Request $request)
    {
        $media = Media::find($request->mediaId);
        if ($media) {
            $media->delete();
        }

    }
}
