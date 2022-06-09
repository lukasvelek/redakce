<div class="col-md">
  <div class="row">
    <div class="col-md-2" id="dashboard-menu">
      <?php

      $fw->includeCurrentMenu();

      ?>
    </div>
    <div class="col-md">
      <div class="row">
        <form action="?page=articles&sub=createnew&subsub=process" method="POST">
          <label for="name">Nadpis:</label>
          <br>
          <input type="text" name="title" required>
          <br>
          <br>

          <label for="username">Text:</label>
          <br>
          <textarea name="text" required></textarea>
          <br>
          <br>

          <label for="password">Tagy (oddělit čárkou):</label>
          <br>
          <input type="text" name="tags" required>
          <br>
          <br>

          <input type="submit" value="Vytvořit článek">
        </form>
      </div>
    </div>
  </div>
</div>
