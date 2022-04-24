<?php

require './clasess/student.php';

$id = $_GET['id'];
$student = new student;

$data = $student->getData($id);


$result = $student->remove($id);

if ($result) {

    unlink('./uploads/' . $data[0]['image']);

    $_SESSION['Message'] = ["Message" => "Raw Removed"];
} else {
    $_SESSION['Message'] = ["Message" => "Error Try Again"];
}

header("location: index.php");


?>