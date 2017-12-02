<?php
@session_start();

$user= $_SESSION["user"];
$email=$_SESSION["email"];
$firstname=$_SESSION["firstname"];
$lastname=$_SESSION["lastname"];
$gender=$_SESSION["gender"];
$date=$_SESSION["date"];
$image=$_SESSION["image"];

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    </head>
    <body>
        
        <table class="w3-table-all w3-hoverable w3-responsive">
            <div class="w3-container w3-xlarge w3-hover-blue w3-panel w3-yellow">
            Your Information is:
            </div> 
            <tr class="w3-hover-red"><td>User Name:</td> <td><?php echo $user; ?></td></tr>
            <tr class="w3-hover-orange"><td>First Name:</td><td><?php echo $fname; ?></td></tr>
            <tr class="w3-hover-yellow"><td> Last Name:</td><td><?php echo $lname; ?></td></tr>
            <tr class="w3-hover-green"><td>E-mail:</td><td><?php echo $mail; ?></td></tr>
            <tr class="w3-hover-blue"><td>Phone no.</td><td><?php echo $phone; ?></td></tr>            
            <tr><td>Profile Pic:</td>
            <td>
                <div class="w3-display-container">
                <img src="images/<?php print $image; ?>" style="width:100%;max-width:200px;" alt="Profile Pic">
               </div>
            </td>
            </tr>
            <br>
        </table>
        <a class="w3-btn w3-blue w3-text-shadow" href="update.php"><b>Update or Change Information</b></a>
        <br><br><br>
    </body>
</html>