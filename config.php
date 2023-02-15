<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "merchandise_shop";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('DIE.')</script>");
}

?>
