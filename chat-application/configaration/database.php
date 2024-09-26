
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chatmind";


// database connection
$connection = mysqli_connect($servername, $username, $password, $dbname);
if(!$connection){
    echo "Connection Failed!";
}

?>