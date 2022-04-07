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


      <?php 
      
          if(isset($_COOKIE['studentName'])){
              echo 'Name : '.$_COOKIE['studentName'];
          }
      
      ?>


</body>
</html>