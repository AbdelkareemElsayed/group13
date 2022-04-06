<?php 
  
   session_start(); 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
      <h3>Student Data.... </h3>

      Name  : <?php   echo $_SESSION['name'];   ?>  <br>
      Email : <?php   echo $_SESSION['email'];   ?>  <br>
      Age   : <?php   echo $_SESSION['age'];   ?>


</body>
</html>