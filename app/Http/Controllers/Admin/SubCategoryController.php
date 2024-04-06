<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = Category::subCategories();
        return view('admin.sub-category.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::categoriesForDropdown();
        return view('admin.sub-category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request)
    {
        try {
            Category::create($request->validated());
            return redirect()->route('subcategories.index')->with('success', 'Sub Category stored successfully!');
        } catch (\Throwable $e) {
            return redirect()->route('subcategories.create')->with('error', 'An error occurred while creating the sub category.');
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
    public function edit(Category $subcategory)
    {
        $categories = Category::categoriesForDropdown();
        return view('admin.sub-category.edit' , compact('subcategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryUpdateRequest $request, Category $subcategory)
    {
        $subcategory->update($request->validated());
        return redirect()->route('subcategories.edit', $subcategory)->with('success', 'Sub Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $subcategory)
    {
        $subcategory->delete();
        return redirect()->route('subcategories.index')->with('success', 'Sub Category deleted successfully!');
    }
}
