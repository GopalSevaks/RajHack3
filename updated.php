<?php
include "connect.php";
include "define1.php";

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $date=$_POST['date'];


$sql = "UPDATE rajhack3 SET firstname='$firstname', lastname='$lastname', email='$email', gender='$gender', date='$date' WHERE username='$username'";

if($conn->query($sql)===TRUE)
{
    echo $firstname.".<br>Your Information updated Successfuly.";
    header( "refresh:2;url=index.php" );
    
}
else
{
    echo("Sorry... Couldn't Register.<br>". $conn->error);
}

$_SESSION["firstname"]=$firstname;
$_SESSION["lastname"]="$lastname";
$_SESSION["email"]="$email";
$_SESSION["gender"]="$gender";
$_SESSION["date"]="$date";

header("url=index.php");

?>