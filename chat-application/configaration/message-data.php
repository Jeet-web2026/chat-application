<?php

include('database.php');


$meaage = $_POST['message-content'];

date_default_timezone_set('Asia/Calcutta'); 
$time = date('h: ia');
$date = date('d');
$currentDay = date('l');

$meaageInput = "INSERT INTO `chat_data`(`id`, `messagedata`, `time`, `date`, `currentday`) VALUES ('','$meaage','$time', '$date', '$currentDay')";

$catchMessage = mysqli_query($connection, $meaageInput);

if (!$catchMessage) {
    echo "Data gayab";
} else {
    header("Location: ../user-messages.php");
    exit();
}

?>