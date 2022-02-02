<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "eigencms";

$conn = new mysqli($servername, $username, $password, $db);

if($conn->connect_error){
    echo "Error connecting";
    die($conn->connect_error);
}

?>