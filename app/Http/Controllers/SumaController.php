<?php

namespace App\Http\Controllers;

use App\Http\Requests\SumRequest;
use Illuminate\Http\Request;

class SumaController extends Controller
{
    public function sumar(SumRequest $request)
    {
        $request->validated();

        $result = (int) $request->a + (int) $request->b;
        
        return view('result', compact("result"));
    }
}
