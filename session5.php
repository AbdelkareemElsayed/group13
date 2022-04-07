<?php 


//  $file =   fopen('info.txt','a')  or die("can't open file");

//  $text = "C course \n"; 

//  fwrite($file,$text);


//  $text = "js course\n"; 

//  fwrite($file,$text);
 

//  fclose($file);



// $file =   fopen('info.txt','r')  or die("can't open file");

//   //  echo    fread($file,filesize('info.txt'));

//  // C course
// //  echo   fgetc($file); 


//   while(!feof($file)){
      
//    echo   fgetc($file).'<br>'; 
     
    

//     // if(trim($var) == "C course"){
//     //     echo 'found';
//     //     break ;
//     // }else{
//     //     echo   $var ;
//     // }
      
//         // echo  fgets($file).'<br>'; 
//     }
//    fclose($file);


 
//  $obj = '{
//        "name"  : "Root",
//        "email" : "Root@yahoo.com"
//         }';

//       $data =  json_decode($obj,true);

    //   var_dump($data);

    // echo $data->email; 


    // echo $data['name'];

   
     
    //  $data = ["name" => "test" , "age" => 20];


    //     echo   json_encode($data);


     $data =   file_get_contents("https://tools.learningcontainer.com/sample-json-file.json"); 

     $dataArr =  json_decode($data,true);

  


     echo($dataArr['Name']); 



?>