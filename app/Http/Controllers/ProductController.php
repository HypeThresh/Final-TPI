<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        //return $products as json response
        return response()->json($products);

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
    public function store(Request $request)
    {
    
            $product = new Product;
            $product->name_product = $request->name_product;
            $product->description_product = $request->description_product;
            $product->img_product = $request->img_product;
            $product->product_price = $request->product_price;
            $product->product_cost = $request->product_cost;
            $product->product_stock = $request->product_stock;
            $product->save();
            //return $products as json response
            $data = array(
                'message' => 'Product created successfully',
                'product' => $product
            );
            return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //return $products as json response
        return response()->json($product);
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
    public function update(Request $request, Product $product)
    {
            $product->name_product = $request->name_product;
            $product->description_product = $request->description_product;
            $product->img_product = $request->img_product;
            $product->product_price = $request->product_price;
            $product->product_cost = $request->product_cost;
            $product->product_stock = $request->product_stock;
            $product->save();
            //return $products as json response
            $data = array(
                'message' => 'Product updated successfully',
                'product' => $product
            );
            return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        //return $products as json response
        $data = array(
            'message' => 'Product deleted successfully',
            'product' => $product
        );
        return response()->json($data);
    }
}
