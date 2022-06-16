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
      </div>
    </div>
  </div>
</div>
