<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>3.</title>
</head>

<body>
  <?php echo "<hr style='border: 3px solid green';>"; ?>
  <p>1. Napisati funkciju koja prikazuje paragraf sa 2 spana unutra. Prvi span ima vase ime, drugi span vase prezime. Izracunati koliko ima slova u vasem imenu i prezimenu i zatim pozvati funkciju toliko puta. (primer: Ana Slovic - paragraf se prikazuje ukupno 9 puta)</p>
  <p><span>Maja</span> <span>Ognjanovic</span></p>14slova
  <hr>
  <?php

      $ime = "Maja";
      $prezime = "Ognjanovic";
      $a = strlen($ime) + strlen($prezime);
      echo "Ukupno ima slova: $a";

      function paragraf(){
        global $ime, $prezime;
        echo "<p>Ja se zovem <span>$ime</span> <span>$prezime</span></p>";
      }

      for ($i = 1; $i <= $a; $i++) {
        paragraf();
      }


  ?>




</body>

</html>