<?php

$request_query_sql = "SELECT * FROM `api-calls`";

$requests = $db->query($request_query_sql);
$request_count = $db->numRows($request_query_sql);

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
        <table id="requests-list">
          <tr class="requests-list-row-header">
            <th>ID</th>
            <th>Popis</th>
            <th>Výsledek</th>
            <th>Hash uživatele</th>
            <th colspan="2">Akce</th>
          </tr>
          <?php

          foreach($requests as $r) {
            $id = $r['id'];
            $function = $r['function'];
            $result = $r['result'];
            $hash = $r['hash'];

            echo('<tr class="requests-list-row">
                    <td>' . $id . '</td>
                    <td>' . $function . '</td>
                    <td>' . $result . '</td>
                    <td>' . $hash . '</td>
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
