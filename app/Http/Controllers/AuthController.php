<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Credentials;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    function index(){
        return view("credentials/login-page");
    }

    function login(Request $request){

        // Login Check
        $email = $request->email;
        $password = $request->password;

        $user = Credentials::where('email',  $email)->first();
        if (!$user) {
            return response()->json(['success'=>false, 'message' => 'Not Login successfull']);
        }

        if (!Hash::check($password,$user->password)) {
            return response()->json(['success'=>false, 'message' => 'password didnt match']);
        }

        // Set Sessions
        session(
            [
                'nama_lengkap' => $user->nama_lengkap, 
                'akses' => $user->akses,
                'email' => $user->email
            ]
        );

        // Redirect
        if($user->akses == 1){
            return redirect('/dsb_admin');
        }else if($user->akses == 2){
            return redirect('/dsb_users');
        }

    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
