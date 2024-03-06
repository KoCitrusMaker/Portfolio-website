<?php

//Params to connect to a database
$dbHost = "localhost";
$dbUser = "id19050845_grave_digger";
$dbPass = "Long_Forgotten_P4st";
$dbName = "id19050845_berrygrave";

//Connection to database
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Database connection failed!");
}

?>
