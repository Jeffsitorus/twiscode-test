<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/convert-binary-to-decimal', 'ConvertBinaryController@convertBinaryToDecimal');
$router->get('/convert-decimal-to-binary', 'ConvertBinaryController@convertDecimalToBinary');
$router->get('/check-palindrome', 'PalindromeController@checkPalindrome');
$router->get('/transaction/list', 'TransactionController@index');
