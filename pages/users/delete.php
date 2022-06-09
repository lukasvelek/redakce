<?php

$id = htmlspecialchars($_GET['id']);

$sql = "DELETE FROM `users` WHERE `id` LIKE '$id'";

$query = $db->query($sql);

if($query === TRUE) {
  header('Location: ?page=users&sub=listall');
} else {
  echo('error deleting user from db');
}

?>
