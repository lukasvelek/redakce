<?php

$name = $fw->urlPost('name');
$username = $fw->urlPost('username');
$password = md5($fw->urlPost('password'));
$email = $fw->urlPost('email');
$role = $fw->urlPost('role');

$sql = "INSERT INTO `users` (`username`, `name`, `email`, `password`, `role`)
        VALUES ('$username', '$name', '$email', '$password', '$role')";

$query = $db->query($sql);

if($query === TRUE) {
  header('Location: ?page=users&sub=listall');
} else {
  echo('error saving user into db');
}

?>
