<?php
	include "connect.php";
    $username= $_POST['username'];
    $email= $_POST['email'];    
    $password= $_POST['password'];
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $gender= $_POST['gender'];
    $date= $_POST['date'];

    include "create.php";
?>