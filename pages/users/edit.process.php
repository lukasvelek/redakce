<?php

$id = $fw->urlPost('id');
$name = $fw->urlPost('name');
$username = $fw->urlPost('username');
$email = $fw->urlPost('email');
$role = $fw->urlPost('role');

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
