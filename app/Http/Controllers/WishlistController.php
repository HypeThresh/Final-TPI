<?php

namespace App\Http\Controllers;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wishlist = Wishlist::all();
        return response()->json($wishlist);
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
            $wishlist = new Wishlist;
            $wishlist->name_wishlist = $request->name_wishlist;
            $wishlist->save();
            //return $users as json response
            $data = array(
                'message' => 'Wishlist created successfully',
                'wishlist' => $wishlist
            );
            return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Wishlist $wishlist)
    {
        return response()->json($wishlist);
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
    public function update(Request $request, Wishlist $wishlist)
    {
        $wishlist->name_wishlist = $request->name_wishlist;
        $wishlist->save();
        //return $users as json response
        $data = array(
            'message' => 'Wishlist updated successfully',
            'wishlist' => $wishlist
        );
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wishlist $wishlist)
    {
        $wishlist->delete();
        //return $users as json response
        $data = array(
            'message' => 'Wishlist deleted successfully',
            'wishlist' => $wishlist
        );
        return response()->json($data);
    }

    public function attach(Request $request){
        $wishlist = Wishlist::find($request->wishlist_id);
        $wishlist->products()->attach($request->product_id);
        $data = array(
            'message' => 'Product attached successfully',
            'wishlist' => $wishlist
        );
        return response()->json($data);
    }
}
