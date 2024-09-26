<?php

include('database.php');



$fullname = $_POST['fullname'];
$email = $_POST['email'];
$mob = $_POST['mob'];
$pass = $_POST['pass'];


$datainput = "INSERT INTO `login_data`(`id`, `fullname`, `email`, `mob`, `pass`) VALUES ('','$fullname','$email','$mob','$pass')";

$result = mysqli_query($connection, $datainput);


if (!$result) {
    echo "Data gayab";
} else {
    header("Location: ../index.php");
    exit();
}



?>
