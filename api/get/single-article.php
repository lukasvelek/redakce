<?php

include('../../php/Databaze.php');
include('../scripts/Utils.php');
include('../Article.php');

$utils = new Utils();
$db = new Databaze();

$id = htmlspecialchars($_GET['id']);
$hash = htmlspecialchars($_GET['h']);

$sql = "SELECT * FROM `articles` WHERE `id` LIKE '$id'";

$query = $db->query($sql);

foreach($query as $q) {
  $id = $q['id'];
  $title = $q['title'];
  $text = $q['text'];
  $author_id = $q['author_id'];
  $publish_date = $q['publish_date'];
  $tags = $q['tags'];

  $article = new Article($id, $title, $text, $author_id, $publish_date, $tags);

  $article->drawArticle();
}

$sql = "INSERT INTO `api-calls` (`hash`, `function`, `result`)
        VALUES ('$hash', 'GET CONTENT OF articles WITH ID: $id', 'SUCCESS')";

$query = $db->query($sql);

if($query === FALSE) {
  echo('error');
}

?>
