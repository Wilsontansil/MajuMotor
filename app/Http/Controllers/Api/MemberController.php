<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    // Register
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:55',
            'email' => 'email|required|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        $user = new Member();
        $user->code = 'MEMBER-001'; // TODO: Generate code
        $user->username = $validatedData['username'];
        $user->email = $validatedData['email'];
        $user->password = $validatedData['password'];
        $user->save();

        $accessToken = $user->createToken('authToken')->accessToken;

        return response(['user' => $user, 'access_token' => $accessToken]);
    }
}
