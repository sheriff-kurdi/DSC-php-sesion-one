<?php
$conn = mysqli_connect("localhost","root","","dsc");

if($conn)
{
    echo 'connected';
}else{
    echo 'failed';
}

