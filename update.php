<?php

$user_name = $_GET['user-name'];
$user_pass = $_GET['user-pass'];
$user_id = $_GET['user-id'];


echo "Name: " . $user_name;
echo "<br>";
echo "Pass: " . $user_pass;
echo "<br>";
echo "Pass: " . $user_id;
echo "<br>";
echo "<br>";

echo "updated";
// header('Location: ' . $_SERVER['HTTP_REFERER']);

?>