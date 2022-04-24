<?php
require './clasess/student.php';

$student = new student;
$data = $student->showData();

?>


<!DOCTYPE html>
<html>

<head>
    <title>PDO - Read Records - PHP CRUD Tutorial</title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

    <!-- custom css -->
    <style>
        .m-r-1em {
            margin-right: 1em;
        }

        .m-b-1em {
            margin-bottom: 1em;
        }

        .m-l-1em {
            margin-left: 1em;
        }

        .mt0 {
            margin-top: 0;
        }
    </style>

</head>

<body>

<!-- container -->
<div class="container">


    <div class="page-header">
        <h1>Read Students </h1>
        <br>

    </div>


    <?php


    if (isset($_SESSION['Message'])) {
        foreach ($_SESSION['Message'] as $key => $value) {
            echo '* ' . $key . ' : ' . $value . '<br>';
        }
        unset($_SESSION['Message']);
    }

    ?>


    <a href="create.php">+ Account</a>

    <table class='table table-hover table-responsive table-bordered'>
        <!-- creating our table heading -->
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>action</th>
        </tr>

        <?php
        foreach ($data as $key => $value) {
            # code...

            ?>
            <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['email']; ?></td>
                <td><img src="./uploads/<?php echo $value['image']; ?>" alt="image" height="50px" width="50px"></td>
                <td>
                    <a href='delete.php?id=<?php echo $value['id'] ?>' class='btn btn-danger m-r-1em'>Delete</a>
                    <a href='edit.php?id=<?php echo $value['id'] ?>' class='btn btn-primary m-r-1em'>Edit</a>
                </td>
            </tr>

        <?php }
        ?>
        <!-- end table -->
    </table>

</div>
<!-- end .container -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- confirm delete record will be here -->

</body>

</html>