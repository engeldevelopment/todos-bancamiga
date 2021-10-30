<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumaController extends Controller
{
    public function sumar(Request $request)
    {
        $result = (int) $request->a + (int) $request->b;
        return view('result', compact("result"));
    }
}
