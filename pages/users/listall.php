<?php

$user_query_sql = "SELECT * FROM `users`";

$users = $db->query($user_query_sql);
$user_count = $db->numRows($user_query_sql);

//echo($user_count);

?>
<div class="col-md">
  <div class="row">
    <div class="col-md-2" id="dashboard-menu">
      <?php

      include('menus/users-menu.php');

      ?>
    </div>
    <div class="col-md">
      <div class="row">
        <table id="users-list">
          <tr class="users-list-row-header">
            <th>ID</th>
            <th>Uživatelské jméno</th>
            <th>Email</th>
            <th>Role</th>
            <th colspan="2">Akce</th>
          </tr>
          <?php

          foreach($users as $user) {
            $id = $user['id'];
            $uz_jmeno = $user['username'];
            $email = $user['email'];
            $role = $user['role'];

            echo('<tr class="users-list-row">
                    <td>' . $id . '</td>
                    <td>' . $uz_jmeno . '</td>
                    <td>' . $email . '</td>
                    <td>' . $role . '</td>
                    <td><a class="users-list-link" href="?page=users&sub=edit&subsub=form&id=' . $id . '">Upravit</a></td>
                    <td><a class="users-list-link" href="?page=users&sub=delete&id=' . $id . '">Odstranit</a></td>
                  </tr>');
          }

          ?>
        </table>
      </div>
    </div>
  </div>
</div>
