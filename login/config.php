<?php 

$server = "localhost";
$user = "yuvraj";
$pass = "yuvraj";
$database = "User";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>