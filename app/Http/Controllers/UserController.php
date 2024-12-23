<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'premium' => 'integer|between:0,1',
            'max_score' => 'integer',
            'image' => 'nullable',
        ]);
        
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->premium = 0;
        $user->max_score = 0;
        $user->image = $request->image;
        $user->save();

        return $user;
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $user, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'premium' => 'integer|between:0,1',
            'max_score' => 'integer',
            'image' => 'nullable',
        ]);
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->premium = $request->premium;
        $user->max_score = $request->max_score;
        $user->image = $request->image;
        $user->update();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        if(is_null($user)) {
            return response()->json('The operation has been cancelled.', 404);
        }

        return response()->noContent();
    }
}
