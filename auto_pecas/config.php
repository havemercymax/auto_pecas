<?php

$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "estoque";

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName, 3007);

if (!$conn) {
  die("Falha na conexão: " . mysqli_connect_error());
}

//mysqli_close($conn);

?>