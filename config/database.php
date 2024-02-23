<?php

$connection_info = array("UID" => "RhysUrbonas", "pwd" => "Whatsfordinner!", "Database" => "WhatsForDinner", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$server_name = "tcp:whatsfordinner.database.windows.net,1433";
$conn = sqlsrv_connect($server_name, $connection_info);

if (!$conn) {
    die("connection failed " . mysqli_connect_error());
}
// echo "connected successfully" . "<br>";
