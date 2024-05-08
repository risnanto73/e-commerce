<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductGallery;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $product = Product::findOrFail($id);
        $gallery = $product->product_galleries;

        // dd($product, $gallery);
        // dd($product);

        return view('pages.admin.product.gallery.index', compact(
            'product',
            'gallery'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Product $product)
    {

        try {

            $files = $request->file('files');

            // foreach file, store each file to storage
            // digunakan untuk menyimpan file ke storage
            foreach ($files as $file) {
                //upload gambar(image)
                $file->storeAs('public/product/gallery', $file->hashName());

                //insert data ke database
                $product->product_galleries()->create([
                    'products_id' => $product->id,
                    'image' => $file->hashName()
                ]);

                // dd($product);
            }


            return redirect()->route('admin.product.gallery.index', $product->id)->with('success', 'Image uploaded successfully');
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->route('admin.product.gallery.index', $product->id)->with('error', 'Failed to upload image');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product, ProductGallery $gallery)
    {
        try {

            //get data product
            $product = $product->findOrFail($product->id);

            //get data image by id
            $gallery = $gallery->findOrFail($gallery->id);

            //delete image
            Storage::disk('local')->delete('public/product/gallery/' . basename($gallery->image));

            //delete data image from database
            $gallery->delete();

            return redirect()->route('admin.product.gallery.index', $product->id)->with('success', 'Image deleted successfully');
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->route('admin.product.gallery.index', $product->id)->with('error', 'Failed to delete image');
        }
    }
}
