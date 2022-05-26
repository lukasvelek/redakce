<?php

/*

Nacitani modulu / trid

*/
include('php/Databaze.php');

/*

Tvorba objektu z nactenych modulu / trid

*/
$db = new Databaze();

?>
<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="utf-8" name="CHARSET" content="UTF-8">
    <title>Redakční systém</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php

    $error404file = "pages/error/404.php";

    if(isset($_GET['page'])) {
      $page = htmlspecialchars($_GET['page']);

      $file = 'pages/' . $page . '/';

      if(isset($_GET['sub'])) {
        $sub = htmlspecialchars($_GET['sub']);

        if(isset($_GET['subsub'])) {
          $subsub = htmlspecialchars($_GET['subsub']);

          $file = $file . $sub . '.' . $subsub . '.php';

          if(file_exists($file)) {
            include($file);
          } else {
            include($error404file);
          }
        } else {
          $file = $file . $sub . '.php';

          if(file_exists($file)) {
            include($file);
          } else {
            include($error404file);
          }
        }
      } else {
        $file = $file . 'index.php';

        if(file_exists($file)) {
          include($file);
        } else {
          include($error404file);
        }
      }
    }

    ?>
  </body>
</html>
