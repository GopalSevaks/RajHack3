<?php
$sql= "INSERT INTO rajhack3(username,email,password,firstname,lastname,gender,date) VALUES ('$username','$email','$password','$firstname','$lastname','$gender','$date')";
            
if($conn->query($sql)===TRUE)
{
    echo"Thankyou! ". $firstname.".<br>You are Registered Successfuly.";
    include "show.php";
}
else
{
    echo("Sorry... Couldn't Register.<br>". $conn->error);
    session_unset(); 

    // destroy the session 
    session_destroy(); 

    header("refresh:2;url=index.php");
}
?>
