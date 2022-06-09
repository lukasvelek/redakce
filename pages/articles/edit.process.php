<?php

$title = $fw->urlPost('title');
$text = $fw->urlPost('text');
$tags = $fw->urlPost('tags');

$sql = "UPDATE `articles` SET `title` = '$title', `text` = '$text', `tags` = '$tags'
                          WHERE `id` LIKE '$id'";

$query = $db->query($sql);

if($query === TRUE) {
  header('Location: ?page=articles&sub=listall');
} else {
  echo('error updating article in db');
}

?>
