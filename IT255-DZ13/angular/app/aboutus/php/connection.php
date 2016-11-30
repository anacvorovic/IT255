<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, 'db2388');

if (!$conn) {
 die("Konekcija ima grešku" . mysqli_connect_error());
}



?>

