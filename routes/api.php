<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BossController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PlayController;
use App\Http\Controllers\FriendController;

Route::apiResource('users', UserController::class);

Route::apiResource('users.friends', FriendController::class)->except([
  'show'
]);

Route::apiResource('users.plays', PlayController::class)->only([
  'index'
]);

Route::apiResource('plays', PlayController::class)->only(
  'store', 'update'
);

Route::get('/plays', [PlayController::class, 'show']);

Route::apiResource('games', GameController::class)->only([
  'index', 'store'
]);

Route::apiResource('bosses', BossController::class)->only([
  'index', 'show'
]);

Route::post('login', [LoginController::class, 'login']);