<?php

$length = $_GET["length"];

$lowercaseLetters = 'abcdefghijklmnopqrstuvwxyz';
$uppercaseLetters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$numbers = '012456789';
$symbols = '!@$?~_-#*&%+=';

$mergedArray = $lowercaseLetters . $uppercaseLetters . $numbers . $symbols;

$passwordGenerator = function ($length, $merged) {
   $password = [];
   while (count($password) < $length) {
      $index = rand(0, strlen($merged) - 1);
      $password[] = $merged[$index];
   }

   return implode('', $password);
};

echo '<pre>';


echo '</pre>';
