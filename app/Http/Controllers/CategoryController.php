<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();
        //return $users as json response
        return response()->json($category);
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
        $category = new Category;
        $category->category_name = $request->category_name;
        $category->save();
        //return $users as json response
        $data = array(
            'message' => 'category created successfully',
            'category' => $category
        );
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return response()->json($category);
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
    public function update(Request $request, Category $category)
    {
        $category->category_name = $request->category_name;

        $category->save();
        //return $users as json response
        $data = array(
            'message' => 'category updated successfully',
            'category' => $category
        );
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        //return $users as json response
        $data = array(
            'message' => 'category deleted successfully',
            'category' => $category
        );
        return response()->json($data);
    }
}
