<?php

$id = $fw->urlGet('id');

$sql = "DELETE FROM `articles` WHERE `id` LIKE '$id'";

$query = $db->query($sql);

if($query === TRUE) {
  header('Location: ?page=articles&sub=listall');
} else {
  echo('error deleting article from db');
}

?>
