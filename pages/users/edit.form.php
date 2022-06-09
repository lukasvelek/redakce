<?php

$id = htmlspecialchars($_GET['id']);

$user_query_sql = "SELECT * FROM `users` WHERE `id` LIKE '$id'";

$user = $db->query($user_query_sql);

$name = "";
$username = "";
$email = "";
$role = "";

foreach($user as $u) {
  $name = $u['name'];
  $username = $u['username'];
  $email = $u['email'];
  $role = $u['role'];
}

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
        <form action="?page=users&sub=edit&subsub=process" method="POST">
          <label for="name">Celé jméno: </label>
          <br>
          <input type="text" name="name" value="<?php echo($name); ?>" required>
          <br>
          <br>

          <label for="username">Uživatelské jméno: </label>
          <br>
          <input type="text" name="username" value="<?php echo($username); ?>" required>
          <br>
          <br>

          <label for="email">Email: </label>
          <br>
          <input type="email" name="email" value="<?php echo($email); ?>" required>
          <br>
          <br>

          <label for="role">Role uživatele: </label>
          <br>
          <select name="role">
            <?php

            switch($role) {
              case "admin":
                echo('<option value="admin" selected>Admin</option>
                      <option value="editor">Editor</option>
                      <option value="writer">Spisovatel</option>');
                break;
              case "editor":
                echo('<option value="admin">Admin</option>
                      <option value="editor" selected>Editor</option>
                      <option value="writer">Spisovatel</option>');
                break;
              case "writer":
                echo('<option value="admin">Admin</option>
                      <option value="editor">Editor</option>
                      <option value="writer" selected>Spisovatel</option>');
                break;
            }

            ?>
          </select>
          <br>
          <br>

          <input type="text" name="id" value="<?php echo($id); ?>" hidden>

          <input type="submit" value="Uložit změny">
        </form>
      </div>
    </div>
  </div>
</div>
