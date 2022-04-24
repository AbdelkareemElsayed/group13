<?php

require './clasess/student.php';


$id = $_GET['id'];

# Create Studen Obj .....
$student = new student;

$data = $student->getData($id);


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $result = $student->update($_POST, $id);

    foreach ($result as $key => $value) {
        echo '* ' . $key . ' : ' . $value . '<br>';
    }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
    <h2>Update Student</h2>

    <form action="edit.php?id=<?php echo $data[0]['id']; ?>" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" class="form-control" id="exampleInputName" aria-describedby="" name="name"
                   value="<?php echo $data[0]['name'] ?>" placeholder="Enter Name">
        </div>


        <div class="form-group">
            <label for="exampleInputEmail">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"
                   value="<?php echo $data[0]['email'] ?>" placeholder="Enter email">
        </div>


        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>


</body>

</html>