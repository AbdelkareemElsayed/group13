<?php
// Task .... 
// input a     c
// output b    d 


//    function nextChar($char){

//         $nextChar = ++$char;     // z   >>> aa 


//        if(strlen($nextChar) > 1){
//            $nextChar = $nextChar[0]; 
//        }

//         return $nextChar; 
//    }

// echo nextChar('x');



//   $index = ord('b');

//    $nextChar = $index + 1; 

//   echo chr($nextChar);



# Task 2 .... 

// input >> http://godady.com/20130299 
// output >>> 20130299  

//   $url = "http://godady.com/20130299";


//    $ArrValues =  explode('/',$url);
//   echo  end($ArrValues); 

//  $index = strrpos($url,'/');      // strpos

//   echo  substr($url,$index+1);


############################################################################################################################


# Arrays .... 

// $name = "root"; 
// $age = 20; 


// indexed Array .... 

//   $students = array('x','y','z');

//  $student = ['Root',2013,3.4];

// print_r($student);    // Array ( [0] => Root [1] => 2013 [2] => 3.4 ) 


//   echo $student[1]; 


// foreach($student as  $key => $value){

//   echo '* '.$key .' : '. $value.'<br>';

// }

/*
* 0 : Root
* 1 : 2013
* 2 : 3.4
*/


# ASSOCIATIVE ARRAY ..... 

// $student = [ 'name' => 'Root','id' =>  201322, 'GPA' =>  3.4];

// print_r($student);    // Array ( [name] => Root [id] => 201322 [GPA] => 3.4 )


//  echo $student['name']; 

// foreach($student as  $key => $value){

//   echo '* '.$key .' : '. $value.'<br>';

// }


# MULTIDIMENSIONAL ARRAY .... 

// $students = [
//     [ 'name' => 'Root','id' =>  201322, 'GPA' =>  3.4],
//     [ 'name' => 'X','id' =>  201311, 'GPA' =>  3.00 , 'level' => 3 ],
//     [ 'name' => 'Y','id' =>  201323, 'GPA' =>  3.8]  
// ];

// foreach ($students as $key => $value) {
//     # code...

//      foreach ($value as $keystudent => $student) {
//          # code...

//          echo '  '.$keystudent.' : '.$student.' ';

//      }

//      echo '<br>';

// }


// $students = ['B','A','X','D'];

// sort($students);  // Array ( [0] => A [1] => B [2] => D [3] => X )
// rsort($students); // Array ( [0] => X [1] => D [2] => B [3] => A )

//   print_r($students); 


//$studentsAges = ["x" => 20 , 'a' => 30 , 'c' => 15 , 'z' => 10 ];

//  asort($studentsAges);  // Array ( [z] => 10 [c] => 15 [x] => 20 [a] => 30 )
//  arsort($studentsAges); // Array ( [a] => 30 [x] => 20 [c] => 15 [z] => 10 )
//  ksort($studentsAges);  // Array ( [a] => 30 [c] => 15 [x] => 20 [z] => 10 )
//  krsort($studentsAges); // Array ( [z] => 10 [x] => 20 [c] => 15 [a] => 30 )
// print_r($studentsAges);

// =====================================================================================================

# SUPER GLOBALS ......  
// 1- $GLOBALS[]
###############################################


// $age = 20; 
// $name = "root"; 
// $gpa = 3.4; 
// function getDetails(){

// // global  $age , $name;

// $gpa = 4; 

// $GLOBALS['gpa']  = $gpa;

// echo 'age : '.$GLOBALS['age'].' || Name :'.$GLOBALS['name'];


// }

// getDetails();
// print_r($GLOBALS);
####################################################################################################################### 
# 2- $_SERVER  


// print_r($_SERVER);
// echo $_SERVER['HTTP_HOST'];
// ECHO $_SERVER['SERVER_NAME'];
// ECHO $_SERVER['PHP_SELF'];
// ECHO $_SERVER['SCRIPT_NAME'];
// ECHO $_SERVER['QUERY_STRING'];
// ECHO $_SERVER['SERVER_ADDR'];
// ECHO $_SERVER['REMOTE_ADDR'];       
// ECHO $_SERVER['REQUEST_METHOD'];

//    POST    VS  GET    .... 

################################################################################### 

 /*
     - $_POST    // POST 
     - $_GET     // GET  
     - $_REQUEST  // ALL 
 */


  if($_SERVER['REQUEST_METHOD'] == "POST"){

    // CODE .... 
   $name     = $_POST['name'];
   $email    = $_POST['email'];
   $password = $_REQUEST['password'];
   $age      = (int)$_POST['age'];


  $errors = []; 

  # Validate NAME ... 
  if(empty($name)){

    $errors['Name']  = "Required"; 
  }

  # VALIDATE EMAIL 
  if(empty($email)){

    $errors['Email']  = "Required"; 
  }


    # VALIDATE password 
    if(empty($password)){

        $errors['Password']  = "Required"; 
      }
  # Validate Age .. 

    if(empty($age)){
        $errors['age']  = "Required"; 
      
    }elseif(!is_int($age)){
          $errors['age']  = "Invalid Format";
      }


    # Check ERRORS 
     if(count($errors) > 0 ){

        foreach($errors as $key => $value){
            echo '* '.$key.' : '.$value.'<br>';  
        }

     }else{
         echo 'Valid Data';
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

        <form   action="<?php echo $_SERVER['PHP_SELF'];?>"   method="post">

            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control"   name="name"  id="exampleInputName" aria-describedby="" placeholder="Enter Name">
            </div>  


            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="email" class="form-control"  name = "email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">New Password</label>
                <input type="password" class="form-control" name="password"   id="exampleInputPassword1" placeholder="Password">
            </div>

            <div class="form-group">
                <label for="exampleInputName">Age</label>
                <input type="text" class="form-control"   name="age"  id="exampleInputName" aria-describedby="" placeholder="Enter age">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



    <br>


    <a href="action.php?id=2013&name=RootAccount ">GO !!</a>


</body>

</html>