<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\OtpCode;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        request()->validate([
            'name' => [ 'required', 'min:3', 'max:25'],
            'email' => ['email', 'required', 'unique:users,email'],
            // 'password' => ['required', 'min:6'],
        ]);

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'email_verified_at' => null,
            'password' => bcrypt("12345678"),
            'remeber_token' =>   null,
            'role_id' =>  "2d409040-57fe-4280-9194-00ab401194c0",
            'photo' => null,

        ]);

        $otp = OtpCode::create([
            ''
        ]);

        return response()->json([
            'response_code' => "01",
            'response_message' => "silakan ceck email anda",
            $user
        ]);
    }
}
