<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\User;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        return $user->friends;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(User $user, Request $request)
    {
        
        $friend = new Friend();
        $friend->user_id = $user->id;
        $friend->friend_id = $request->id;
        $friend->save();

        return $friend;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user, Friend $friend)
    {
        $user->friends()->where('friend_id', $friend)->delete();
    }
}
