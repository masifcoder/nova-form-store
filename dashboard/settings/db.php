<?php

$host = "localhost";
$user = "root";
$pwd  = "";
$db   = "stepupdb";

$conn = mysqli_connect($host, $user, $pwd, $db);
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
