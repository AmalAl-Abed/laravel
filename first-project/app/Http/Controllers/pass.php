<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pass extends Controller
{
    public function home()
    {
        $data=["amal","leen","khaled"];
        return view('home',compact('data'));
    }
    public function about()
    {
        return view('about');
    }

    // // public function home()
    // {
    //     return view('home');
    // }
}
