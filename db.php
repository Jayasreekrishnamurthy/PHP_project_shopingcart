<?php

require "config/constants.php";

$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$db = "phpdata";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>