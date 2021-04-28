<?php
require "conn.php";
// $user_name = $_GET['user-name'];
// $user_pass = $_GET['user-pass'];

// if($user_name == 'sheriff' && $user_pass == 123 )
// {
//     echo 'welcome';
// }else{
//     echo 'non auth';
// }

$query = "select * from users;";
$run_query = mysqli_query($conn, $query);

if($run_query)
{
    // echo 'runned';
}

foreach($run_query as $element)
{
    echo "<br>";
    echo $element['name']. "<br>";
}