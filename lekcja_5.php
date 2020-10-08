<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>formularze</title>
  </head>
  <body>
    <form action="#" method="get">
      <input type="text" name="surname" autofocus>
      <input type="submit" value="Wyślij"><hr>
    </form>
    <?php
    //isset()
      if (!empty($_GET['surname'])) {  // sprawdzamy czy jest puste
        $surname = $_GET['surname'];
        echo "wprowadiłeś dane: $surname<hr>";
        echo '<a href=".lekcja_5.php">powrót do formularza</a>';
        // tu piszemy kod
      }else{
        echo <<<form
        <form action="#" method="get">
          <input type="text" name="surname" autofocus>
          <input type="submit" value="Wyślij"><hr>
        </form>
    form;
      }
     ?>
  </body>
</html>
