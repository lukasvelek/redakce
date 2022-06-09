<?php

$name = htmlspecialchars($_POST['name']);
$username = htmlspecialchars($_POST['username']);
$password = md5(htmlspecialchars($_POST['password']));
$email = htmlspecialchars($_POST['email']);
$role = htmlspecialchars($_POST['role']);

$sql = "INSERT INTO `users` (`username`, `name`, `email`, `password`, `role`)
        VALUES ('$username', '$name', '$email', '$password', '$role')";

$query = $db->query($sql);

if($query === TRUE) {
  header('Location: ?page=users&sub=listall');
} else {
  echo('error saving user into db');
}

?>
