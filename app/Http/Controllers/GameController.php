<?php

namespace App\Http\Controllers;

use App\Models\Game;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Game::latest()->first();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $id = rand(1, 25);
        echo $id;

        $game = new Game();
        $game->boss_id = $id;
        $game->save();
    }
}
