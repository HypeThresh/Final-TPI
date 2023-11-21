<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        //return $users as json response
        return response()->json($users);
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
}
