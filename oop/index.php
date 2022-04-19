<?php
// oop .... 

class user{
    var $name; 
    var $email; 


    function  __construct($val1,$val2){
        
        $this->name  = $val1;
        $this->email = $val2;

    }



     
    // function setName($val){
    //      $this->name = $val;
    // }


    function getName(){
        return $this->name;
    }




        
//     function setEmail($val){
//         $this->email = $val;
//    }


   function getEmail(){
       return $this->email;
   }



    function Message($input){
        return 'Welcome to OOP , '.$input;
    }


    function __destruct()
    {
        echo 'Destruct Method';
    }



}



$admin = new user("Root Account","Root@yahoo.com"); 

//   echo $admin->Message("ADMIN"); 


     # SET ADMIN NAME .... 
    //  $admin->setName("Root Account"); 
     # GET NAME ..... 
     ECHO  $admin->getName().'<BR>';

     # set & get email ... 
    //  $admin->setEmail("root@yahoo.com"); 
     ECHO $admin->getEmail();


  echo '<br>';

// $student = new user("Student Accoutn","Student@gmail.com"); 

// //   # SET USER NAME .... 
// //   $student->setName("Student Account"); 
// //   # GET NAME ..... 
//   ECHO  $student->getName().'<br>';

//   ECHO  $student->getEmail();

// echo $student->Message("USER"); 






?>