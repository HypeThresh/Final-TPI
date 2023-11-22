<?php

namespace App\Http\Controllers;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purchases = Purchase::all();
        //return $purchase as json response
        return response()->json($purchases);
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
            $purchases = new Purchase;
            $purchases->product_quantity = $request->product_quantity;
            $purchases->amount = $request->amount;
            $purchases->purchase_state = $request->purchase_state;
            $purchases->save();
            //return $purchase as json response
            $data = array(
                'message' => 'Purchase created successfully',
                'purchase' => $purchases
            );
            return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Purchase $purchase)
    {
        //return $purchase as json response
        return response()->json($purchase);
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
    public function update(Request $request, Purchase $purchase)
    {
            $purchase->product_quantity = $request->product_quantity;
            $purchase->amount = $request->amount;
            $purchase->purchase_state = $request->purchase_state;
            $purchase->save();
            //return $purchase as json response
            $data = array(
                'message' => 'Purchase created successfully',
                'purchase' => $purchase
            );
            return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Purchase $purchase)
    {
        $purchase->delete();
        //return $purchase as json response
        $data = array(
            'message' => 'Purchase deleted successfully',
            'purchase' => $purchase
        );
        return response()->json($data);
    }
}
