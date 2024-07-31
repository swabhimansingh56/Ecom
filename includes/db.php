<?php
$host = 'localhost';
$user = 'root'; // Default user for local servers
$password = ''; // Default password for local servers
$database = 'ecommerce';

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
