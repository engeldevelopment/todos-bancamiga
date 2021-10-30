<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumaController extends Controller
{
    public function sumar(Request $request)
    {
        $result = $request->a + $request->b;
        return view('result', compact("result"));
    }
}
