<?php

namespace App\Http\Controllers;

use App\Models\Credentials;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dsb_admin(){
        if(!session('akses')){
            return redirect('/');
        }

        $data_admin = Credentials::all();
        return view("dsb_admin",compact("data_admin"));
    }

    public function dsb_users(){
        if(!session('akses')){
            return redirect('/');
        }

        $data_users = Credentials::where('akses',2)->get();
        return view("dsb_users",compact("data_users"));
    }

    public function profile(){
        if(!session('akses')){
            return redirect('/');
        }

        $data_profile = Credentials::where('email',session('email'))->first();
        return view("profile",compact("data_profile"));
    }

    public function master(){
        if(!session('akses')){
            return redirect('/');
        }

        $data_master = Credentials::all();
        return view("datamaster",compact("data_master"));
    }
}
