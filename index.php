<?php

/*

Nacitani modulu / trid

*/
include('php/Databaze.php');
include('php/Framework.php');

/*

Tvorba objektu z nactenych modulu / trid

*/
$db = new Databaze();
$fw = new Framework();

?>
<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="utf-8" name="CHARSET" content="UTF-8">
    <title>Redakční systém</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="row">
      <?php

      /*

      Odkaz na soubor s chybovou hlaskou 404, tj. soubor/stranka neexistuje

      */
      $error404file = "pages/error/404.php";

      /*

      Nacte soubor podle atributu v URL adrese

      $page - skupina stranek
      $sub - stranka dane skupiny (pokud neexistuje, tak index.php)
      $subsub - rozdeleni dane stranky dane skupiny (nemusi existovat)

      Priklad: userlogin/login.form.php
        - skupina stranek, ktera zajistuje prihlaseni uzivatele
        - login je strankou skupiny
        - form definuje cast login stranky
        - tj. je to stranka, ve ktere je definovan formular pro prihlaseni uzivatele

      */
      if(isset($_GET['page'])) {
        $page = $fw->urlGet('page');

        $file = 'pages/' . $page . '/';

        if(isset($_GET['sub'])) {
          $sub = $fw->urlGet('sub');

          if(isset($_GET['subsub'])) {
            $subsub = $fw->urlGet('subsub');

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
      } else {
        // odkaz na prihlasovaci obrazovku
        header('Location: ?page=userlogin&sub=login&subsub=form');
      }

      ?>
    </div>
  </body>
</html>
