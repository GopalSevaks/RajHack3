<?php
session_start();
$localhost="localhost";
$user="root";
$password="";
$database="rajhack3";

$conn=mysqli_connect("$localhost","$user","$password","$database");
/*if($conn->connect_error)
{
    die("Couldn't Connect");
}
else
{
    echo "Connection Successful";
}*/

?>