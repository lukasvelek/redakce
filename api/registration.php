<?php

// nacteni dulezitych knihoven
include('../php/Databaze.php');
include('scripts/Utils.php');

// vytvoreni instanci dulezitych knihoven
$db = new Databaze();
$utils = new Utils();

// nacteni informaci o uzivateli z url
$username = htmlspecialchars($_GET['u']);
$password = htmlspecialchars($_GET['p']);

$password_md5 = md5($password);

// nacteni jestli uzivatel v databazi uz existuje
$sql = "SELECT `id` FROM `api-registrations`
        WHERE `username` LIKE '$username'
        AND `password` LIKE '$password_md5'";

$query_result = $db->query($sql);
$query_result_rows = $db->numRows($sql);

// tvorba noveho hashe
$newhash = $utils->GetRandomHash(32);

if($query_result_rows == "1") {
  // uzivatel v databazi jiz existuje
  $id = "";

  foreach($query_result as $qr) {
    $id = $qr['id'];
  }

  // aktualizace hashe
  $sql_update_hash = "UPDATE `api-registrations`
                      SET `hash` = '$newhash'
                      WHERE `id` LIKE '$id'";

  $sql_update_hash_result = $db->query($sql_update_hash);

  if($sql_update_hash_result === TRUE) {
    // vypis hashe na obrazovku
    echo($newhash);
  } else {
    echo("error");
  }
} else {
  // uzivatel v databazi jeste neexistuje
  $sql_create = "INSERT INTO `api-registrations` (`username`, `password`, `hash`)
                 VALUES ('$username', '$password_md5', '$newhash')";

  $sql_create_result = $db->query($sql_create);

  if($sql_create_result === TRUE) {
    // vypis hashe na obrazovku
    echo($newhash);
  } else {
    echo("error");
  }
}

?>
