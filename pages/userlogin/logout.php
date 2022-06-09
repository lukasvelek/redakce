<?php

unset($_COOKIE['user_id']);
unset($_COOKIE['user_username']);
unset($_COOKIE['user_email']);
unset($_COOKIE['user_password']);
unset($_COOKIE['user_role']);

header('Location: ?');

?>
