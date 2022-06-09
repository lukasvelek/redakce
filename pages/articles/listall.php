<?php

$article_query_sql = "SELECT * FROM `articles`";



$articles = $db->query($article_query_sql);
$article_count = $db->numRows($article_query_sql);

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
        <table id="articles-list">
          <tr class="articles-list-row-header">
            <th>ID</th>
            <th>Nadpis</th>
            <th>Text</th>
            <th>Autor</th>
            <th>Datum publikace</th>
            <th>Tagy</th>
            <th colspan="2">Akce</th>
          </tr>
          <?php

          foreach($articles as $a) {
            $id = $a['id'];
            $title = $a['title'];
            $text = $a['text'];
            $author_id = $a['author_id'];
            $publish_date = $a['publish_date'];
            $tags = $a['tags'];

            $author_username = "";

            $author_sql = "SELECT `username` FROM `users` WHERE `id` LIKE '$author_id'";
            $author_query = $db->query($author_sql);

            foreach($author_query as $aq) {
              $author_username = $aq['username'];
            }

            $publish_date_cz = date("d.m.Y H:i:s", strtotime($publish_date));
            $short_text = $fw->cutTextByLength($text, "25");

            echo('<tr class="users-list-row">
                    <td>' . $id . '</td>
                    <td>' . $title . '</td>
                    <td>' . $short_text . '</td>
                    <td>' . $author_username . '</td>
                    <td>' . $publish_date_cz . '</td>
                    <td>' . $tags . '</td>
                    <td><a class="articles-list-link" href="?page=articles&sub=edit&subsub=form&id=' . $id . '">Upravit</a></td>
                    <td><a class="articles-list-link" href="?page=articles&sub=delete&id=' . $id . '">Odstranit</a></td>
                  </tr>');
          }

          ?>
        </table>
      </div>
    </div>
  </div>
</div>
