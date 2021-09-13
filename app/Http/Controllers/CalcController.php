<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function result($number1, $how, $number2)
    {
        $result = 0;

        if ($how == 'addition')
        {
            $result = $number1 + $number2;
        }
        elseif ($how == 'subtraction')
        {
            $result = $number1 - $number2;
        }
        elseif ($how == 'multiplication')
        {
            $result = $number1 * $number2;
        }
            elseif ($how == 'division')
        {
            $result = $number1 / $number2;
        }

        return view('calc/result', ['result' => $result]);
    }
}
