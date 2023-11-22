<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payment = payment::all();
        //return $users as json response
        return response()->json($payment);
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
        $payment = new Payment;
        $payment->card_type = $request->card_type;
        $payment->card_numb = $request->card_numb;
        $payment->card_name = $request->card_name;
        $payment->exp_date = $request->exp_date;
        $payment->cvv_card = $request->cvv_card;
        $payment->save();
        //return $users as json response
        $data = array(
            'message' => 'payment created successfully',
            'payment' => $payment
        );
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        return response()->json($payment);
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
    public function update(Request $request, Payment $payment)
    {
        $payment->card_type = $request->card_type;
        $payment->card_numb = $request->card_numb;
        $payment->card_name = $request->card_name;
        $payment->exp_date = $request->exp_date;
        $payment->cvv_card = $request->cvv_card;

        $payment->save();
        //return $users as json response
        $data = array(
            'message' => 'payment updated successfully',
            'payment' => $payment
        );
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();
        //return $users as json response
        $data = array(
            'message' => 'payment deleted successfully',
            'payment' => $payment
        );
        return response()->json($data);
    }
}
