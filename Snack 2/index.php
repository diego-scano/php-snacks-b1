<!-- SNACK 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”. -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      if(strlen($_GET["name"]) > 3 && strpos($_GET["mail"], "@") !==false && strpos($_GET["mail"], ".") !==false && is_numeric($_GET["age"])) {
        echo "Accesso riuscito";
      } else {
        echo "Accesso negato";
      };

    ?>

  </body>
</html>
