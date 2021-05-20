<?php

$user_name = $_GET['user-name'];
$user_pass = $_GET['user-pass'];

echo "Name: " . $user_name;
echo "<br>";
echo "Pass: " . $user_pass;

echo "<br>";
echo "<br>";

echo "created";
// header('Location: ' . $_SERVER['HTTP_REFERER']);

?>