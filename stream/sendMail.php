<?php

$msg = 'Name: ' . $_POST['Name'] . 'E-Mail: ' . $_POST['E-Mail'] . 'Subject: ' . $_POST['subject'] . 'Message: ' . $_POST['message'];
$msg = wordwrap($msg,150);


mail("leafcsgo@outlook.com", "My subject", $msg);
?>