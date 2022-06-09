<?php

include('../../php/Databaze.php');
include('../scripts/Utils.php');

$utils = new Utils();
$db = new Databaze();

$tbl = htmlspecialchars($_GET['tbl']);
$hash = htmlspecialchars($_GET['h']);

$sql = "SELECT COUNT(`id`) AS `count` FROM `$tbl`";

$query = $db->query($sql);

$count = "";

foreach($query as $q) {
  $count = $q['count'];

  echo($count);
}

$sql = "INSERT INTO `api-calls` (`hash`, `function`, `result`)
        VALUES ('$hash', 'GET ROW COUNT OF $tbl', 'SUCCESS: $count')";

$query = $db->query($sql);

if($query === FALSE) {
  echo('error');
}

?>
