<?php

/*

setcookie("user_id", $d['id']);
setcookie("user_username", $d['username']);
setcookie("user_email", $d['email']);
setcookie("user_password", $d['password']);
setcookie("user_role", $d['role']);

*/

unset($_COOKIE['user_id']);
unset($_COOKIE['user_username']);
unset($_COOKIE['user_email']);
unset($_COOKIE['user_password']);
unset($_COOKIE['user_role']);

header('Location: ?');

?>
