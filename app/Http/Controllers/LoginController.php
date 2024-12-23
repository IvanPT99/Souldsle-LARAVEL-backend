<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\AuthenticationException;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login(Request $request, AuthenticationException $exception)
    {
        if ($request['id']){
            $user = User::where('id', $request['id'])->first();
        } else {
            $user = User::where('email', $request['email'])->first();
        }

        if ($user) {
            if ($user && Hash::check($request->password, $user->password)) {
                return $user;
            }

            return response()->json(['message' => $exception->getMessage()], 401);
        }
    }
}
