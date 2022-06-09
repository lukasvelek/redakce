<?php

$title = $fw->urlPost('title');
$text = $fw->urlPost('text');
$tags = $fw->urlPost('tags');
$author_id = $_COOKIE['user_id'];

$sql = "INSERT INTO `articles` (`title`, `text`, `author_id`, `tags`)
        VALUES ('$title', '$text', '$author_id', '$tags')";

$query = $db->query($sql);

if($query === TRUE) {
  header('Location: ?page=articles&sub=listall');
} else {
  echo('error saving article into db');
}

?>
