<?php

namespace App\Http\Controllers;

use App\Models\Play;
use App\Models\User;
use Illuminate\Http\Request;

class PlayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        return $user->plays;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $play = new Play();
        $play->game_id = $request[0];
        $play->user_id = $request[1];
        $play->boss_id = $request[2];
        $play->bosses_ids = $request->bosses_ids;
        $play->win = $request->win;
        $play->save();
    }

    public function show(Request $request)
    {
        return Play::where('game_id', $request['game_id'])
            ->where('user_id', $request['user_id'])
            ->get();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Play $play, Request $request)
    {
        $play->game_id = $request->game_id;
        $play->user_id = $request->user_id;
        $play->boss_id = $request->boss_id;
        $play->bosses_ids = $request->bosses_ids;
        $play->win = $request->win;
        $play->update();
    }
}
