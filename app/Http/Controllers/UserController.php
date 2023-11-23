<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Purchase;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('purchase.products','purchase.payment','wishlist.product')->get();
        //return $users as json response
        $array = [];
        foreach($users as $user){
            $array[]= [
                'id' => $user->id,
                'name' => $user->name,
                'username' => $user->username,
                'email' => $user->email,
                'gender'=> $user->gender,
                'age' => $user->age,
                'country' => $user->country,
                'main_addr' => $user->main_addr,
                'shipping_addr' => $user->shipping_addr,
                'rol' => $user->rol,
                'discount' => $user->coupon,
                'wishlist' => $user->wishlist,
                'purchase' => $user->purchase
            ];
        }
        return response()->json($array);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $users = new User;
        $users->name = $request->name;
        $users->username = $request->username;
        $users->email = $request->email;
        $users->age = $request->age;
        $users->gender = $request->gender;
        $users->password = $request->password;
        $users->country = $request->country;
        $users->main_addr = $request->main_addr;
        $users->shipping_addr = $request->shipping_addr;
        $users->rol = $request->rol;
        $users->save();
        //return $users as json response
        $data = array(
            'message' => 'User created successfully',
            'user' => $users
        );
        return response()->json($data);

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //return $users as json response
        return response()->json($user);
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
    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->gender = $request->gender;
        $user->password = $request->password;
        $user->country = $request->country;
        $user->main_addr = $request->main_addr;
        $user->shipping_addr = $request->shipping_addr;
        $user->save();
        //return $users as json response
        $data = array(
            'message' => 'User updated successfully',
            'user' => $user
        );
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        //return $users as json response
        $data = array(
            'message' => 'User deleted successfully',
            'user' => $user
        );
        return response()->json($data);
    }

    public function attach(Request $request){

        $user = User::find($request->user_id);
        $user->coupon()->attach($request->discount_id);
        $data = array(
            'message' => 'Discount attached successfully',
            'user' => $user
        );
        return response()->json($data);
    }
    
    public function attachWishlist(Request $request){

        $user = User::find($request->user_id);
        $user->wishlist()->attach($request->wishlist_id);
        $data = array(
            'message' => 'Wishlist attached successfully',
            'user' => $user
        );
        return response()->json($data);
    }

    public function attachPurchase(Request $request){

        $user = User::find($request->user_id);
        $user->purchase()->attach($request->purchase_id);
        $data = array(
            'message' => 'Purchasee attached successfully',
            'user' => $user
        );
        return response()->json($data);
    }

    public function attachPayment(Request $request){

        $user = User::find($request->user_id);
        $user->payment()->attach($request->payment_id);
        $data = array(
            'message' => 'Payment attached successfully',
            'user' => $user
        );
        return response()->json($data);
    }

    public function detach(Request $request){

        $user = User::find($request->user_id);
        $user->coupon()->detach($request->discount_id);
        $data = array(
            'message' => 'Discount detached successfully',
            'user' => $user
        );
        return response()->json($data);
    }

    public function detachWishlist(Request $request){

        $user = User::find($request->user_id);
        $user->wishlist()->detach($request->wishlist_id);
        $data = array(
            'message' => 'Wishlist detached successfully',
            'user' => $user
        );
        return response()->json($data);
    }

    public function detachPurchase(Request $request){

        $user = User::find($request->user_id);
        $user->purchase()->detach($request->purchase_id);
        $data = array(
            'message' => 'Purchase detached successfully',
            'user' => $user
        );
        return response()->json($data);
    }

}
