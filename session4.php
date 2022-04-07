<?php

//   session_start(); 

// code ..... 

//  $email = "test@yahoo.com"; 
// test@.com 
//  exit; 
//   https://www.linkedin.com/

########################################################################################

// FILTERS ......   
/*
    1- VALIDATION .... 
    2- SANITIZATION .... 
  */

// $age = "test20"; 

//   var_dump(filter_var($age,FILTER_VALIDATE_INT));

// $email ="testfcih.com"; 

//    var_dump(filter_var($email,FILTER_VALIDATE_EMAIL));

// $url = "localhost/group13/session4.php"; 

//    var_dump(filter_var($url,FILTER_VALIDATE_URL));

// $ip = "127.0.0.1.5"; 

//      var_dump(filter_var($ip,FILTER_VALIDATE_IP));

// FILTER_VALIDATE_FLOAT 
// FILTER_VALIDATE_BLOOLEAN 



// $age = "test20"; 

//   echo  filter_var($age,FILTER_SANITIZE_NUMBER_INT);

// $email = "test(fci)@gmail.com"; 

// var_dump(filter_var($email,FILTER_VALIDATE_EMAIL));

//   echo   filter_var($email,FILTER_SANITIZE_EMAIL);



// $url = "https://www.w3schoo��ls.co�m";

//     // var_dump(filter_var($url,FILTER_VALIDATE_URL));

//     echo filter_var($url,FILTER_SANITIZE_URL);


//    $text = "<h1>ROOT ACC</h1>";

//    echo  filter_var($text,FILTER_SANITIZE_STRING); 

//  echo strip_tags($text);

//    echo $text;



// function CheckEmail($email){

//     $status = 1; 


//     if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
       
//         $email = filter_var($email,FILTER_SANITIZE_EMAIL); 

//         if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
//             $status = 0; 
//         }

//     }
//     return ["status" => $status , "email" => $email];
// }



 





# Clean Function ..... 
function Clean($input)
{

    $input = trim($input);
    $input = strip_tags($input);
    $input = stripslashes($input);   //   /   \ 

    return $input;

    //  return   trim(strip_tags(stripslashes($input)));

}







if ($_SERVER['REQUEST_METHOD'] == "POST") {



    // CODE .... 
    $name     = Clean($_POST['name']);
    $email    = Clean($_POST['email']);
    $password = Clean($_REQUEST['password']);
    $age      = (int)Clean($_POST['age']);




    $errors = [];

    # Validate NAME ... 
    if (empty($name)) {

        $errors['Name']  = "Required";
    }

    # VALIDATE EMAIL 
    if (empty($email)) {
        $errors['Email']  = "Required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['Email']  = "Invalid Format";
    }


    # VALIDATE password 
    if (empty($password)) {

        $errors['Password']  = "Required";
    } elseif (strlen($password) < 6) {
        $errors['Password']  = "Length must Be >= 6 chars";
    }
    # Validate Age .. 

    if (empty($age)) {
        $errors['age']  = "Required";
    } elseif (!filter_var($age, FILTER_VALIDATE_INT)) {
        $errors['age']  = "Invalid Format";
    }


    # Check ERRORS 
    if (count($errors) > 0) {

        foreach ($errors as $key => $value) {
            echo '* ' . $key . ' : ' . $value . '<br>';
        }
    } else {



        $studentData = $name . '|||' . $email . '|||' . $password . '|||' . $age . "\n";


        $file =   fopen('info.txt', 'a')  or die("can't open file");
        fwrite($file, $studentData);
        fclose($file);


        // $_SESSION['name']   = $name; 
        // $_SESSION['email']  = $email; 
        // $_SESSION['age']    = $age; 

        //   setcookie('studentName',$name,time()+86400,'/'); 

    }
}


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Register</h2>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">New Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
            </div>

            <div class="form-group">
                <label for="exampleInputName">Age</label>
                <input type="number" class="form-control" name="age" id="exampleInputName" aria-describedby="" placeholder="Enter age">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



    <br>


    <a href="action.php?id=2013&name=RootAccount ">GO !!</a>


</body>

</html>


