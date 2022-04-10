<?php

// date(format,timestamp);



/*
    ** date 
    d 01 : 31 
    D sun , MON 
    m  01 : 12 
    M
    F  
    y 
    Y
   */


//    echo  date('y M d');


/*
  time ... 
  h   01 - 12 
  H   00 - 23 
  i   00 - 59
  s   00 - 59 
  a   am - pm 
  A   AM - PM   
*/


// echo date('Y-m-d  h:i:s a');


// echo   time();   // 1649581625     //  2022-04-10 11:07:05 am      11:7 am 

//  echo 'Name : root &&  time : '. date('Y-m-d  h:i:s a',1649581625 );


//   echo     strtotime("2022-04-20 9:00:05 am ");   // 1650438005


//  echo 'Name : root &&  time : '. date('Y-m-d  h:i:s a',1650438005 );


//  date_default_timezone_set('africa/cairo');

//  echo date('Y-m-d  h:i:s a');

//  echo date_default_timezone_get();
#########################################################################################################


// function divide($parm1,$parm2){

//       if($parm2 == 0){
//           throw new Exception('param2 = 0  , error');
//       }
//        return ($parm1/$parm2); 

// }


// try{
// echo divide(1,0);
// }catch(Exception $e){
//   echo $e->getmessage();
// }





// try {
//     $age = 10;

//     if ($age < 20) {
//         throw new Exception('age must >= 20');
//     }
// } catch (Exception $e) {
//     echo $e->getmessage();
// } finally {
//     echo 'test Message Finally ';
// }
 

  // finally -  final 

  #################################################################################################################### 
  
  # MYSQL .....  (DB)

  # SQL ....     
  
  # User Table     

  /*
          Name     Email     Password
          x        x@x.com    123 
          y        y@y.com    456   

   */


?>