<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Hash, Auth, Validator};
use App\Models\AdminPerusahaan;


class AdminPerusahaanController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admin_perusahaans',
            'password' => 'required|string|min:8'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $adminPerusahaan = AdminPerusahaan::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
         ]);

        $token = $adminPerusahaan->createToken('auth_token')->plainTextToken;

        return response()
            ->json(['data' => $adminPerusahaan,'access_token' => $token, 'token_type' => 'Bearer', ]);
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password')))
        {
            return response()
                ->json(['message' => 'Unauthorized'], 401);
        }

        $adminPerusahaan = AdminPerusahaan::where('email', $request['email'])->firstOrFail();

        $token = $adminPerusahaan->createToken('auth_token')->plainTextToken;

        return response()
            ->json(['message' => 'Hi '.$adminPerusahaan->name.', welcome to home','access_token' => $token, 'token_type' => 'Bearer', ]);
    }

    // method for user logout and delete token
    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'You have successfully logged out and the token was successfully deleted'
        ];
    }
}
