<?php


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // CODE ..... 




    if (!empty($_FILES['image']['name'])) {

        $name    = $_FILES['image']['name'];
        $temPath = $_FILES['image']['tmp_name'];
        $size    = $_FILES['image']['size'];
        $type    = $_FILES['image']['type'];
        // image/png 

        $typesInfo  =  explode('/', $type);   // convert string to array ... 
        $extension  =  strtolower( end($typesInfo));      // get last element in array .... 



        $allowedExtension = ['png', 'jpeg', 'jpg'];   // allowed Extension    // PNG JPG 


        if (in_array($extension, $allowedExtension)) {

            # Create Final Name ... 
            $FinalName = time() . rand() . '.' . $extension;

            $disPath = 'uploads/' . $FinalName;

            if (move_uploaded_file($temPath, $disPath)) {

                echo 'Image Uploaded';
            } else {
                echo 'Error Try Again';
            }
        } else {
            echo 'InValid Extension';
        }
    } else {
        echo 'Image Required';
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Upload Image</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Upload</h2>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="exampleInputName">Image</label>
                <input type="file" name="image">
            </div>

            <button type="submit" class="btn btn-primary">GO!!</button>
        </form>
    </div>

</body>

</html>