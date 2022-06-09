<?php

include('../../php/Databaze.php');
include('../scripts/Utils.php');

$utils = new Utils();
$db = new Databaze();

$tbl = htmlspecialchars($_GET['tbl']);
$row = htmlspecialchars($_GET['row']);
$hash = htmlspecialchars($_GET['h']);

$sql = "SELECT `$row` AS `data` FROM `$tbl`";

$query = $db->query($sql);

foreach($query as $q) {
  echo($q['data'] . ",");
}

$sql = "INSERT INTO `api-calls` (`hash`, `function`, `result`)
        VALUES ('$hash', 'GET ROW COUNT OF $tbl', 'SUCCESS: DATA RETRIEVED')";

$query = $db->query($sql);

if($query === FALSE) {
  echo('error');
}

?>
