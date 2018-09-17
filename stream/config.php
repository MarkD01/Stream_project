<?php
$user = "root";
$pass = "";
try {

$con = new PDO('mysql:host=localhost;dbname=stream_db', $user, $pass);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
}

catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>