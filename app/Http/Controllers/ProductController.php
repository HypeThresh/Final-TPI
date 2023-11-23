<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        //return $products as json response
        $array = [];
        foreach($products as $product){
            $array[]= [
                'id' => $product->id,
                'name_product' => $product->name_product,
                'description_product' => $product->description_product,
                'img_product' => $product->img_product,
                'product_price'=> $product->product_price,
                'product_cost' => $product->product_cost,
                'product_stock' => $product->product_stock,
                'category' => $product->category,
                'supplier' => $product->supplier
            ];
        }

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

    public function attach(Request $request){
        $product = Product::find($request->product_id);
        $product->category()->attach($request->category_id);
        $data = array(
            'message' => 'Category attached successfully',
            'product' => $product
        );
        return response()->json($data);
    }

    public function attachCategory(Request $request){
        $product = Product::find($request->product_id);
        $product->category()->attach($request->category_id);
        $data = array(
            'message' => 'Category attached successfully',
            'product' => $product
        );
        return response()->json($data);
    }

    public function attachSupplier(Request $request){
        $product = Product::find($request->product_id);
        $product->supplier()->attach($request->supplier_id);
        $data = array(
            'message' => 'Supplier attached successfully',
            'product' => $product
        );
        return response()->json($data);
    }

    public function detach(Request $request){
        $product = Product::find($request->product_id);
        $product->category()->detach($request->category_id);
        $data = array(
            'message' => 'Category detached successfully',
            'product' => $product
        );
        return response()->json($data);
    }

    public function detachCategory(Request $request){
        $product = Product::find($request->product_id);
        $product->category()->detach($request->category_id);
        $data = array(
            'message' => 'Category detached successfully',
            'product' => $product
        );
        return response()->json($data);
    }

    public function detachSupplier(Request $request){
        $product = Product::find($request->product_id);
        $product->supplier()->detach($request->supplier_id);
        $data = array(
            'message' => 'Supplier detached successfully',
            'product' => $product
        );
        return response()->json($data);
    }
}
