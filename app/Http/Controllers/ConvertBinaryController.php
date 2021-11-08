<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertBinaryController extends Controller
{
    public function convertBinaryToDecimal(Request $request)
    {
        $number = $request->number;
        $convertDecimal = 0;
        $biner = 1;

        $temp = $number;
        while ($temp) {
            $lastDigit = $temp % 10;
            $temp = $temp / 10;

            $convertDecimal += $lastDigit
                * $biner;
            $biner = $biner * 2;
        }

        return $convertDecimal;
    }

    public function convertDecimalToBinary(Request $request)
    {
        $number = $request->number;
        $convertBinary = null;

        while ($number >= 1) {
            $calc = $number % 2;
            $number /= 2;
            $convertBinary = $calc . $convertBinary;
        }
        if ($convertBinary == null) {
            $convertBinary = 0;
        }

        return $convertBinary;
    }
}
