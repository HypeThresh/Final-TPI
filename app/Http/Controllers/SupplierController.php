<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier = supplier::all();
        //return $users as json response
        return response()->json($supplier);
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
        $supplier = new Supplier;
        $supplier->name_supplier = $request->name_supplier;
        $supplier->supplier_contact = $request->supplier_contact;
        $supplier->save();
        //return $users as json response
        $data = array(
            'message' => 'supplier created successfully',
            'supplier' => $supplier
        );
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        return response()->json($supplier);
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
    public function update(Request $request, Supplier $supplier)
    {
        $supplier->name_supplier = $request->name_supplier;
        $supplier->supplier_contact = $request->supplier_contact;

        $supplier->save();
        //return $users as json response
        $data = array(
            'message' => 'supplier updated successfully',
            'supplier' => $supplier
        );
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        //return $users as json response
        $data = array(
            'message' => 'supplier deleted successfully',
            'supplier' => $supplier
        );
        return response()->json($data);
    }
}
