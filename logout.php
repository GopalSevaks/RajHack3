<?php

// remove all session variables
@session_unset(); 

// destroy the session 
@session_destroy(); 

header("refresh:0.2;url=login.php");
?>