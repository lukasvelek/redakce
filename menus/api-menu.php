<?php

include('menus/user-info.php');

?>
<div class="row">
  <a class="dashboard-menu-link" href="?page=dashboard">Hlavní stránka</a>
  <a class="dashboard-menu-link" href="?page=articles&sub=listall">Články</a>
  <a class="dashboard-menu-link" href="?page=users&sub=listall">Uživatelé</a>
  <a class="dashboard-menu-link" href="?page=api&sub=home">API</a>
    <a class="dashboard-menu-sublink" href="?page=api&sub=request&subsub=list">Seznam požadavků</a>
    <a class="dashboard-menu-sublink" href="?page=api&sub=registration&subsub=list">Seznam registrací</a>
</div>
