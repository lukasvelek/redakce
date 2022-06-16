<?php

/*

Trida Article (CLanek) je kostra pro vsechny clanky. Obsahuje vsechny atributy
a funkce potrebne k vykreslovani clanku.

Autor: Lukas Velek
Datum vytvoreni: 16.6.2022

*/
class Article {
  private $id;
  private $title;
  private $text;
  private $author_id;
  private $publish_date;
  private $tags;

  public function __construct($id, $title, $text, $author_id, $publish_date, $tags) {
    $this->id = $id;
    $this->title = $title;
    $this->text = $text;
    $this->author_id = $author_id;
    $this->publish_date = $publish_date;
    $this->tags = $tags;
  }

  public function drawArticle() {
    $html = '
      <article id="' . $this->id . '">
        <h2 class="article-title">' . $this->title . '</h2>
        <p class="article-text">' . $this->text . '</p>
        <h6 class="article-data">Autor: ' . $this->author_id .'
        | Datum publikace: ' . $this->normalDate($this->publish_date) . '
        | Tagy: ' . $this->tags . '</h6>
      </article>
    ';

    echo $html;
  }

  private function normalDate($date) {
    $normal_date = date("d.m.Y H:i:s", strtotime($date));

    return $normal_date;
  }
}

?>
