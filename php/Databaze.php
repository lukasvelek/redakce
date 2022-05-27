<?php

/*

Trida Databaze obsahuje informace o pripojeni k databazi. Aktualne pouze pro lokalni ucely.

Autor: Lukas Velek
Datum vytvoreni: 26.5.2022

*/
class Databaze {
    /*

    Adresa DB serveru

    */
    private $db_server;

    /*

    Uzivatelske jmeno DB

    */
    private $db_uz_jmeno;

    /*

    Uzivatelske heslo DB

    */
    private $db_uz_heslo;

    /*

    Nazev DB

    */
    private $db_nazev;

    /*

    Relace databaze

    */
    private $db_session;

    /*

    Konstruktor, ve kterem jsou prirazeny hodnoty promennym

    */
    function __construct() {
      $this->db_server = "localhost";
      $this->db_uz_jmeno = "root";
      $this->db_uz_heslo = "";
      $this->db_nazev = "redakce";

      $this->db_session = new mysqli($this->db_server, $this->db_uz_jmeno, $this->db_uz_heslo, $this->db_nazev);
    }

    /*

    Funkce, ktera provede operaci danou promennou $sql nad relaci databaze $db

    $sql - SQL retezec operaci

    Vraci vysledek operace

    */
    function query($sql) {
      return $this->db_session->query($sql);
    }

    /*

    Funkce, ktera vraci pocet vysledku vracenych funkci query()

    $sql - SQL retezec operaci

    Vraci pocet vysledku

    */
    function numRows($sql) {
      return $this->query($sql)->num_rows;
    }

    /*

    Funkce, ve ktere bude casem definovany postup tvorby tabulek v dane databazi

    */
    function tabulky() {

    }
}

?>
