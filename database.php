<?php

$HOST = "localhost";
$dbname = "bestellen.db";
$username = "root";
$password = "";

$mysqli = new mysqli(hostname: $HOST, username: $username, password: $password, database: $dbname);

if ($mysqli->connect_errno) {
     die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;

?>