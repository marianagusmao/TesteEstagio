<?php

$host = "127.0.0.1:3307";
$user = "root";
$pass = "usbw";
$banco = "testestagio";

$conn = new mysqli($host, $user, $pass, $banco);
if ($conn->connect_error) die ("Fatal Error");

?>