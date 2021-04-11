<?php

$password = 'Welkom123';
$hash = password_hash($password, PASSWORD_DEFAULT);
echo $password;
echo "<br>Het gehaste wachtwoord is<hr>";
echo $hash;

?>