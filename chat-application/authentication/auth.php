<?php

include('../configaration/database.php');


$loginEmail = $_POST['login-email'];
$loginPass = $_POST['login-password'];

$registerinput = "INSERT INTO `register_data`(`id`, `loginemail`, `loginpassword`) VALUES ('','$loginEmail','$loginPass')";

$result = mysqli_query($connection, $registerinput);

if (!$result) {
    echo "Data not received!";
} else {
    header("Location: ../user.php");
    exit();
}

?>
