<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Restaurant $restaurant)
    {
        $subcategories = Category::subCategories($restaurant->id);
        return view('admin.sub-category.index', compact('subcategories', 'restaurant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Restaurant $restaurant)
    {
        $categories = Category::categoriesForDropdown($restaurant->id);
        return view('admin.sub-category.create', compact('categories', 'restaurant'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Restaurant $restaurant, CategoryStoreRequest $request)
    {
        try {
            Category::create(array_merge($request->validated(), ['restaurant_id' => $restaurant->id]));
            return redirect()->route('subcategories.index', $restaurant)->with('success', 'Sub Category stored successfully!');
        } catch (\Throwable $e) {
            return redirect()->route('subcategories.create', $restaurant)->with('error', 'An error occurred while creating the sub category.');
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
    public function edit(Restaurant $restaurant,Category $subcategory)
    {
        $categories = Category::categoriesForDropdown($restaurant->id);
        return view('admin.sub-category.edit' , compact('subcategory', 'categories', 'restaurant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Restaurant $restaurant, Category $subcategory, CategoryUpdateRequest $request)
    {
        $subcategory->update($request->validated());
        return redirect()->route('subcategories.edit', [$restaurant, $subcategory])->with('success', 'Sub Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant, Category $subcategory)
    {
        $subcategory->delete();
        return redirect()->route('subcategories.index', $restaurant)->with('success', 'Sub Category deleted successfully!');
    }
}
