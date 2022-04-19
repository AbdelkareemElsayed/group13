<?php 
########################################################################################################
require '../helpers/db.php';
require '../helpers/functions.php';
require '../helpers/checklogin.php';

# Fetch Id .... 
$id = $_GET['id']; 

# Validate Id .... 

if(!validate($id,'int')){
    $message = ["Error" => "Invalid Id"];
}else{
    
    # Fetch image name .... 
    $sql  = "select image from blogs where id = $id"; 
    $op   = doQuery($sql); 
    $data =  mysqli_fetch_assoc($op);




    if (!(($_SESSION['user']['role_id'] == 2) || ($_SESSION['user']['role_id'] == 5 && $_SESSION['user']['id'] == $data['addedBy']))) {
        $message = ["Error" => "Can't complete this Operation"];

        # Set Session ... 
        $_SESSION['Message'] = $message;

        header("Location: ".url('/blogs/'));
        exit();
    }


    $sql = "delete from blogs where id = $id"; 

    $op = doQuery($sql); 

    if($op){

        removeFile( $data['image']);
        $message = ["Success" => "Raw Removed"];
    }else{
        $message = ["Error" => "Error Try Again"];
    }

}

# Set Session ... 
$_SESSION['Message'] = $message; 

header("Location: index.php");
