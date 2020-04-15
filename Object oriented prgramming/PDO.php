<?php
$serverName = "localhost";
$username = "root";
$password = "";


$conn = new mysqli($serverName, $username, $password);
if ($conn->connect_error) {
    die ("connection filed:" . $conn->connect_error);
}
echo "connection successfully";





$conn = mysqli_connect($serverName, $username, $password);
if (!$conn) {
    die("connection filed:" . mysqli_connect_error());
}
echo "connection successfully";




try {
    $conn = new PDO("mysql:host=$serverName; dbname=base_one", $username,$password);
    echo "connection success";
}
catch (PDOException $e){
    echo "connection failed: " . $e->getMessage();
    }
