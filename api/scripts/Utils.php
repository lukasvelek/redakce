<?php

class Utils {
  public function __construct() {}

  public function GetRandomHash($length) {
    $string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890_,./@!*()";
    $strlen = strlen($string);

    $returnString = "";

    for($i = 0; $i < $length; $i++) {
      $r = random_int(0, ($strlen - 1));

      $returnString = $returnString . $string[$r];
    }

    return $returnString;
  }
}

?>
