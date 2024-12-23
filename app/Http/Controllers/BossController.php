<?php

namespace App\Http\Controllers;

use App\Models\Boss;

class BossController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Boss::all();
    }

    /**
     * Display the specified resource.
     */
    public function show(Boss $boss)
    {
        return $boss;
    }
}
