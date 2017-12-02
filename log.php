<?php
   include("connect.php");
   @session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      @$email = $_POST['email'];
      @$password = $_POST['password']; 
      
      @$sql = "SELECT * FROM rajhack3 WHERE email = '$email' and password = '$password'";
      @$result = mysqli_query($conn,$sql);
      $row= mysqli_fetch_array($result, MYSQLI_ASSOC);
      if($row)
      {
          $_SESSION["firstname"]=$row["firstname"];
          $_SESSION["lastname"]=$row["lastname"];
          $_SESSION["gender"]=$row["gender"];
          $_SESSION["date"]=$row["date"];
          $_SESSION["username"]=$row["username"];
      }
      include("define1.php");
  
      $count= mysqli_num_rows($result);
  
      if($count==1)
      {       
           $_SESSION["email"]="$email";
  
      header("location: index.php");
      }
      else
      {
          echo $count."Invalid Email or Password";
          echo isset($row["firstname"]);
        header("refresh:10.2;url=login.php");
      }
  }
?>
