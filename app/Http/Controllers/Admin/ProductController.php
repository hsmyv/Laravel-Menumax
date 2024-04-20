<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Restaurant $restaurant)
    {
        $products = Product::products($restaurant->id);
        return view('admin.products.index', compact('restaurant', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Restaurant $restaurant)
    {
        $categories = Category::categories($restaurant->id);
        return view('admin.products.create', compact('restaurant', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Restaurant $restaurant, ProductStoreRequest $request)
    {
        $product = Product::create(array_merge($request->validated(), ['restaurant_id' => $restaurant->id]));
        uploadImage($product, 'product-image');
        return redirect()->route('products.index', ['restaurant' => $restaurant])->with('success', 'Product stored successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant, Product $product)
    {
        $categories = Category::categories($restaurant->id);
        return view('admin.products.edit' , compact('product', 'restaurant', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Restaurant $restaurant, Product $product, ProductUpdateRequest $request)
    {
            $product->update($request->validated());
            uploadImage($product, 'product-image');
            return redirect()->route('products.edit', [$restaurant, $product])->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant,Product $product)
    {
        $product->delete();
        return redirect()->route('products.index', $restaurant)->with('success', 'Product deleted successfully!');
    }

    public function update_status(Request $request)
    {
        $productId = $request->input('productId');
        $newStatus = $request->input('newStatus');

        Product::where('id' , $productId)->update([
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

    public function sendOrder(Request $request)
    {
        $productId = $request->input('productId');
        $product = Product::find($productId);
        $phone = $product->restaurant->phone;
        $totalPriceForRequest = $request->input('totalPrice');
        $count = $request->input('count');

        $message = "Yeni sifariş:\n";
        $message .= "Məhsul: $product->name\n";
        $message .= "Qiymət: $product->price\n";
        $message .= "Say: $count dənə\n";
        $message .= "Ümumi qiymət: $totalPriceForRequest\n";

        $whatsappLink = 'https://wa.me/'. $phone .'?text=' . urlencode($message);

        return response()->json(['whatsappLink' => $whatsappLink]);
    }

}
