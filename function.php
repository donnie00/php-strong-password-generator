<?php

session_start();

$length = $_GET["length"];

$params = [
   [
      'name' => 'lowercase',
      'value' => 'abcdefghijklmnopqrstuvwxyz',
      'toUse' => isset($_GET["lowercase"])
   ],
   [
      'name' => 'uppercase',
      'value' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
      'toUse' => isset($_GET["uppercase"])
   ],
   [
      'name' => 'numbers',
      'value' => '012456789',
      'toUse' => isset($_GET["numbers"])
   ],
   [
      'name' => 'symbols',
      'value' => '!@$?~_-#*&%+=',
      'toUse' => isset($_GET["symbols"])
   ]
];

$filteredParams = [];

foreach ($params as $param) {
   if ($param['toUse']) {
      $filteredParams[] = $param['value'];
   }
};

$mergedArray = implode('', $filteredParams);

$passwordGenerator = function ($length, $merged) {
   $password = [];
   while (count($password) < $length) {
      $index = rand(0, strlen($merged) - 1);
      $password[] = $merged[$index];
   }

   return implode('', $password);
};

if (isset($length)) {
   $yourPassword = $passwordGenerator($length, $mergedArray);

   $_SESSION['password'] = $yourPassword;

   header("Location: passwordPage.php");
};
