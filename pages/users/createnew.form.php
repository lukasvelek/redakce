<div class="col-md">
  <div class="row">
    <div class="col-md-2" id="dashboard-menu">
      <?php

      include('menus/users-menu.php');

      ?>
    </div>
    <div class="col-md">
      <div class="row">
        <form action="?page=users&sub=createnew&subsub=process" method="POST">
          <label for="name">Celé jméno: </label>
          <br>
          <input type="text" name="name" required>
          <br>
          <br>

          <label for="username">Uživatelské jméno: </label>
          <br>
          <input type="text" name="username" required>
          <br>
          <br>

          <label for="password">Heslo: </label>
          <br>
          <input type="password" name="password" required>
          <br>
          <br>

          <label for="email">Email: </label>
          <br>
          <input type="email" name="email" required>
          <br>
          <br>

          <label for="role">Role uživatele: </label>
          <br>
          <select name="role">
            <option value="admin">Admin</option>
            <option value="editor">Editor</option>
            <option value="writer">Spisovatel</option>
          </select>
          <br>
          <br>

          <input type="submit" value="Vytvořit uživatele">
        </form>
      </div>
    </div>
  </div>
</div>
