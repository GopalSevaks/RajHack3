<?php
session_start();
include "define1.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Update Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    </head>
    <body>
      <div class="w3-third">

        <div class="w3-container w3-panel w3-red">
            Update Information
        </div>
        <form class="w3-container" action="updated.php" method="POST" enctype="multipart/form-data">
               
               <label class="w3-container w3-text-purple">First name  :
                   <input class="w3-input" type="text" name="firstname" value="<?php echo $firstname; ?>">
               </label>
               <label class="w3-container w3-text-purple">Last name  :
                   <input class="w3-input" type="text" name="lastname" value="<?php echo $lastname; ?>">
               </label>
               <label class="w3-container w3-text-purple">E-mail ID  :
                   <input class="w3-input" type="text" name="email" value="<?php echo $email; ?>">
               </label>
               <label class="w3-container w3-text-purple">Gender  :
                   <input class="w3-input" type="tel" name="gender" value="<?php echo $gender; ?>">
               </label>
               <label class="w3-container w3-text-purple">Password  :
                   <input class="w3-input" type="password" name="password" value="<?php echo $password; ?>">
               </label>
               <label class="w3-container w3-text-purple">Date :</label>
               <input class="w3-input" type="date" name="date" value="<?php echo $date; ?>">
               <br>
            <input class="w3-btn w3-orange w3-round" type="submit" name="" value="Update">
        </form>
     </div>
     <br>
     <br>
    </body>
</html>