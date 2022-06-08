<?php

// query.php?h=HASH&sect=SECTION_NAME&act=ACTION_TYPE[&rows=ROW_LIST_SEPARATED_BY_SEMICOLON]
// HASH = USER's HASH
// SECTION_NAME = USERLIST
// ACTION_TYPE = ROW_COUNT, LIST
// ROW_LIST_SEPARATED_BY_SEMICOLON = selection of rows to return, only if ACTION_TYPE is LIST
//    - use ALL for all

// ?h=&sect=USERLIST&act=ROW_COUNT

include('../php/Databaze.php');
include('Utils.php');

$db = new Databaze();
$utils = new Utils();

$section = htmlspecialchars($_GET['sect']);
$action = htmlspecialchars($_GET['act']);

$call_hash = htmlspecialchars($_GET['h']);
$call_function = "";
$call_result = "";

if($section == "USERLIST") {
  if($action = "ROW_COUNT") {
    $call_function = "USERLIST -> ROW_COUNT";
    $sql = "SELECT COUNT(`id`) AS `count` FROM `users`";

    $query_result = $db->query($sql);

    foreach($query_result as $qr) {
      $call_result = "SUCCESS -> " . $qr['count'];
      echo($qr['count']);
    }
  }
}

$sql = "INSERT INTO `api-calls` (`hash`, `function`, `result`)
        VALUES ('$call_hash', '$call_function', '$call_result')";

$query = $db->query($sql);

if($query === FALSE) {
  echo('error');
}

?>
