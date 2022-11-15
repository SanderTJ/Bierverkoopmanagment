<?php

$HOST = "localhost";
$dbname = "inloggen.db";
$username = "root";
$password = "";

$mysqli = new mysqli($HOST, $username, $password, $dbname);

if ($mysqli->connect_errno) {
     die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;











 ?>