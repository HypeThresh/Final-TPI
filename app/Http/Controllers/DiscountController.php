<?php

namespace App\Http\Controllers;
use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $discounts = Discount::all();
        return response()->json($discounts);
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
            $discounts = new Discount;
            $discounts->first_disc = $request->first_disc;
            $discounts->available_coupon = $request->available_coupon;
            $discounts->save();
            //return $users as json response
            $data = array(
                'message' => 'Discount created successfully',
                'discount' => $discounts
            );
            return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Discount $discount)
    {
        return response()->json($discount);
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
    public function update(Request $request, Discount $discount)
    {   
        $discount->first_disc = $request->first_disc;
        $discount->available_coupon = $request->available_coupon;
        $discount->save();
        //return $users as json response
        $data = array(
            'message' => 'Discount updated successfully',
            'discount' => $discount
        );
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Discount $discount)
    {
        $discount->delete();
        //return $users as json response
        $data = array(
            'message' => 'Discount deleted successfully',
            'discount' => $discount
        );
        return response()->json($data);
    }

    public function attach(Request $request){

        $discount = Discount::find($request->discount_id);
        $discount->coupon()->attach($request->user_id);
        $data = array(
            'message' => 'Discount attached successfully',
            'discount' => $discount
        );
        return response()->json($data);
    }   
}
