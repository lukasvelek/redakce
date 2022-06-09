<?php

/*

Trida Framework obsahuje funkce, ktere umoznuji vykonavani nejakych cinnosti bez opakovani kodu

Autor: Lukas Velek
Datum vytvoreni: 9.6.2022

*/
class Framework {
  /*

  Konstruktor, ktery aktualne nema zadny ucel

  */
  public function __construct() {

  }

  /*

  Za pomoci funkce urlGet() zjisti aktualni "page" z URL a pomoci includeMenu() nacte menu

  */
  public function includeCurrentMenu() {
    return $this->includeMenu($this->urlGet("page"));
  }

  /*

  Nacte menu za pomoci $currentPage ze slozky "menus/"

  */
  public function includeMenu($currentPage) {
    include('menus/' . $currentPage . '-menu.php');
  }

  /*

  Vrati z URL hodnotu daneho GET atributu

  */
  public function urlGet($name) {
    return htmlspecialchars($_GET[$name]);
  }

  /*

  Brati hodnotu daneho POST atributu

  */
  public function urlPost($name) {
    return htmlspecialchars($_POST[$name]);
  }
}

?>
