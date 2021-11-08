<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PalindromeController extends Controller
{
    public function checkPalindrome()
    {
        $string = request()->input('string'); // get the request
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);  // remove special characters
        $string = strtolower($string);
        $reverseString = strrev($string);

        if ($string == $reverseString) {
            return "Palindrome";
        } else {
            return "Not palindrome";
        }
    }
}
