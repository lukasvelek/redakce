<?php

$id = $fw->urlGet('id');

$article_query_sql = "SELECT * FROM `articles` WHERE `id` LIKE '$id'";

$article = $db->query($article_query_sql);

$title = "";
$text = "";
$tags = "";

foreach($article as $a) {
  $title = $a['title'];
  $text = $a['text'];
  $tags = $a['tags'];
}

?>
<div class="col-md">
  <div class="row">
    <div class="col-md-2" id="dashboard-menu">
      <?php

      $fw->includeCurrentMenu();

      ?>
    </div>
    <div class="col-md">
      <div class="row">
        <form action="?page=articles&sub=edit&subsub=process" method="POST">
          <label for="name">Nadpis:</label>
          <br>
          <input type="text" name="title" value="<?php echo($title); ?>" required>
          <br>
          <br>

          <label for="username">Text:</label>
          <br>
          <textarea name="text" required><?php echo($text); ?></textarea>
          <br>
          <br>

          <label for="password">Tagy (oddělit čárkou):</label>
          <br>
          <input type="text" name="tags" value="<?php echo($tags); ?>" required>
          <br>
          <br>

          <input type="submit" value="Uložit změny">
        </form>
      </div>
    </div>
  </div>
</div>
