<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function result($number1, $how, $number2)
    {
        return view('calc/result', ['number1' => $number1, 'how' => $how, 'number2' => $number2]);
    }
}
