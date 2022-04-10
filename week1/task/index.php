<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Students</title>
</head>

<body>


   <h3>List Students</h3>

    <?php

    $file = fopen('info.txt', "r") or die('unable to open file');


    while (!feof($file)) {

        $line = fgets($file);
 
        $data = explode('|', $line);

        if (count($data) > 0 && !empty($data[0])) {


            echo $line . '   <a href="remove.php?id=' . $data[0] . '">Remove</a>   <br>';
        }
    }

    fclose($file);
    ?>

</body>

</html>