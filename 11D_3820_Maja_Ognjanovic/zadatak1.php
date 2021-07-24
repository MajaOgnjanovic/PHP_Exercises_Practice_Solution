<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 1</title>
</head>
<body>
<!--Dve promenljive imena birate sami imaju vrednosti 200 i 80. Izracunati i prikazati njihov zbir, proizvod, razliku i kolicnik.-->
<?php
   $x=200;
   $y=80;
   $zbir=$x+$y;
   $razlika=$x-$y;
   $proizvod=$x*$y;
   $kolicnik=$x/$y;

   echo "Zbir dva broja je: $zbir";
   echo"<hr>";
   echo "Razlika dva broja je: $razlika";
   echo"<hr>";
   echo "Proizvod dva broja je: $proizvod";
   echo"<hr>";
   echo "Kolicnik dva broja je: $kolicnik";

?>
</body>
</html>