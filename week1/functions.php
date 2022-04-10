<?php 



# Clean Function ..... 
function Clean($input)
{

    $input = trim($input);
    $input = strip_tags($input);
    $input = stripslashes($input);   //   /   \ 

    return $input;      

    //  return   trim(strip_tags(stripslashes($input)));

}
?>