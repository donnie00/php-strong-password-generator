<?php

session_start();

$length = $_GET["length"];

// $lowercase = $_GET["lowercase"];
// $uppercase = $_GET["uppercase"];
// $numbers = $_GET["numbers"];
// $symbols = $_GET["symbols"];

$params = [
   'lowerCase' => 'abcdefghijklmnopqrstuvwxyz',
   'upperCase' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
   'numbers' => '012456789',
   'symbols' => '!@$?~_-#*&%+='
];

$filters = [
   'lowercase' => $_GET["lowercase"],
   'uppercase' => $_GET["uppercase"],
   'numbers' => $_GET["numbers"],
   'symbols' => $_GET["symbols"],
];

// $filteredParams = [];

// foreach ($filters as $key => $filter) {
//    var_dump($filter[$key]);
//    $filteredParams[] = $params[$filter];
// };

$mergedArray = implode('', $params);

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
