<?php

namespace App\Http\Controllers\Api\Tpk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'     => 'required',
            'password'  => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success'   => false,
                'message'   => 'Email dan Password Wajib Diisi!'
            ]);
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = auth()->user()->email;
            $token = $user->createToken('auth_token', ['tpk'])->plainTextToken;
            return response()->json(['access_token' => $token, 'token_type' => 'Bearer']);
        }

        return response()->json(['message' => 'Email Atau Password Salah!']);
    }
}
