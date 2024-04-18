<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SocialNetworkStoreRequest;
use App\Http\Requests\SocialNetworkUpdateRequest;
use App\Models\Restaurant;
use App\Models\SocialNetwork;
use Illuminate\Http\Request;

class SocialNetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Restaurant $restaurant)
    {
        $socialNetworks = SocialNetwork::socialNetworks($restaurant->id);
        return view('admin.social-networks.index', compact('restaurant', 'socialNetworks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Restaurant $restaurant)
    {
        return view('admin.social-networks.create', compact('restaurant'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Restaurant $restaurant, SocialNetworkStoreRequest $request)
    {
        $socialNetwork = SocialNetwork::create(array_merge($request->validated(), ['restaurant_id' => $restaurant->id]));
        return redirect()->route('social-networks.index', ['restaurant' => $restaurant])->with('success', 'Social Network stored successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant, SocialNetwork $socialNetwork)
    {
        return view('admin.social-networks.edit' , compact('socialNetwork', 'restaurant'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Restaurant $restaurant, SocialNetwork $socialNetwork, SocialNetworkUpdateRequest $request)
    {
        $socialNetwork->update($request->validated());
        return redirect()->route('social-networks.edit', [$restaurant, $socialNetwork])->with('success', 'Social Network updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant, SocialNetwork $socialNetwork)
    {
        $socialNetwork->delete();
        return redirect()->route('social-networks.index', $restaurant)->with('success', 'Social Network deleted successfully!');
    }
    public function update_status(Request $request)
    {
        $socialNetworkId = $request->input('socialNetworkId');
        $newStatus = $request->input('newStatus');

        SocialNetwork::where('id' , $socialNetworkId)->update([
            'status' => $newStatus
        ]);
    }
}
