<?php 
$servername = "localhost";
$username = "root";
$password = "XdEgOLLS[b_Jx[xA";
$dbname = "FuturePresident";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection failed". $conn->connect_error);
}

echo "connection established";

$conn->close();

?>