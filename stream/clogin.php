<?php
include("config.php");
session_start();
// error_reporting(E_ALL);
// ini_set('display_errors','1');
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sth =  $con->prepare("SELECT * FROM admins WHERE username=:username AND password=:password");
    $sth-> bindValue(':username', $username);
    $sth-> bindValue(':password', $password);

    if($sth->execute()) {
        header('Location: index.php');
        $_SESSION['username']= $username;
    } else {
        header('Location: error.php');
    }
}



?>