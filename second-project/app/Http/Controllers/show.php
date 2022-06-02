<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class show extends Controller
{
    public function add(Request $request)
    {
        $F_operator = $request->input('fnum');
        $S_operator = $request->input('lnum');

        $result = $F_operator + $S_operator;

        return view("calculater", ['result' => $result]);
    }
    // public function subtract(Request $request)
    // {
    //     $F_operator = $request->input('fnum');
    //     $S_operator = $request->input('lnum');

    //     $result = $F_operator - $S_operator;

    //     return view("calculater", ['result' => $result]);
    // }
}
