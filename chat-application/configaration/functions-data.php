<?php

include ('database.php');

function displayData(){
    global $connection;
    $fetchQuery = "SELECT * FROM `login_data` WHERE `id` = 31";

    $allData = mysqli_query($connection, $fetchQuery);

    return $allData;
}

function displayanotherData(){
    global $connection;
    $fetchanotherQuery = "SELECT * FROM `login_data` WHERE `id` = 34";

    $anotherData = mysqli_query($connection, $fetchanotherQuery);

    return $anotherData;
}

function displaymessageData(){
    global $connection;
    $fetchmessageQuery = "SELECT * FROM `chat_data`";

    $messageData = mysqli_query($connection, $fetchmessageQuery);

    return $messageData;
}


?>