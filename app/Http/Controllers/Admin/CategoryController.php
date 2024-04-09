<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Restaurant $restaurant)
    {
        $categories = Category::categories($restaurant->id);
        return view('admin.category.index', compact('categories', 'restaurant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Restaurant $restaurant)
    {
        return view('admin.category.create', compact('restaurant'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Restaurant $restaurant, CategoryStoreRequest $request)
    {
        try {
            Category::create(array_merge($request->validated(), ['restaurant_id' => $restaurant->id]));
            return redirect()->route('categories.index', ['restaurant' => $restaurant])->with('success', 'Category stored successfully!');
        } catch (\Throwable $e) {
            return redirect()->route('categories.create', ['restaurant' => $restaurant])->with('error', $e->getMessage());
        }
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
    public function edit(Restaurant $restaurant, Category $category)
    {
        return view('admin.category.edit' , compact('category', 'restaurant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Restaurant $restaurant, Category $category, CategoryUpdateRequest $request)
    {
            $category->update($request->validated());
            return redirect()->route('categories.edit', [$restaurant, $category])->with('success', 'Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant,Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index', $restaurant)->with('success', 'Category deleted successfully!');
    }



    public function update_status(Request $request)
    {
        $categoryId = $request->input('categoryId');
        $newStatus = $request->input('newStatus');

        Category::where('id' , $categoryId)->update([
            'status' => $newStatus
        ]);
    }
}
