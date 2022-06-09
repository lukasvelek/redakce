<?php

$id = htmlspecialchars($_POST['id']);
$name = htmlspecialchars($_POST['name']);
$username = htmlspecialchars($_POST['username']);
$email = htmlspecialchars($_POST['email']);
$role = htmlspecialchars($_POST['role']);

$sql = "UPDATE `users` SET `name` = '$name', `username` = '$username', `email` = '$email',
                           `role` = '$role'
                       WHERE `id` LIKE '$id'";

$query = $db->query($sql);

if($query === TRUE) {
  header('Location: ?page=users&sub=listall');
} else {
  echo('error update user in db');
}

?>
