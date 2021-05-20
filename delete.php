<?php
require "conn.php";

echo $id = $_GET['code'];
$deleteQuery = " Delete From users WHERE id = '$id';";

$runQuery = mysqli_query($conn, $deleteQuery);

echo "deleted";
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>