<?php

$uzjmeno = htmlspecialchars($_POST['uzjmeno']);
$uzheslo = htmlspecialchars($_POST['uzheslo']);

$uzheslo_md5 = md5($uzheslo);

$user_data_query = "SELECT * FROM `users` WHERE `username` LIKE '$uzjmeno' AND `password` LIKE '$uzheslo_md5'";

$user_data = $db->query($user_data_query);
$query_rows = $db->numRows($user_data_query);

$uzivatel = "";

if($query_rows == 1) {
  foreach($user_data as $d) { // d = data
    setcookie("user_id", $d['id']);
    setcookie("user_username", $d['username']);
    setcookie("user_email", $d['email']);
    setcookie("user_password", $d['password']);
    setcookie("user_role", $d['role']);
  }
}

// presmerovani na hlavni stranku (dashboard)
header('Location: ?page=dashboard');

?>
