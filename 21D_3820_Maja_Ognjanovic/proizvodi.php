<?php
    require "proizvod.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proizvodi</title>
    <style>
        div{
            width: 200px;
            display: inline-block;
            border: 1px solid lightgray;
            text-align: center;
            margin: 0 10px;
            
        }
        img{   
            width: 200px;
            height: 200px;   
        }
        .crveno{
            color: red;
        }
        .zeleno{
            color: green;
        }
    </style>
</head>
<body>
    <p>
    1.	Napraviti fajl proizvod.php koji sadrzi samo jednu funkciju koja za dato ime proizvoda, sliku, cenu i popust pravi div (echo) za prikaz svih podataka.<br>
    Div za proizvod ce biti sirine 200px, display inline-block ili float left, a sadrzi sliku (dimenzije 200x200), ispod toga naziv, ispod toga cena. <br>
    Ako je popust veci od 0, cena je obojena crveno, a prikazana je i cena sa popustom u zelenoj boji.<br>
    Ako je popust 0, prikazana je samo prava cena.<br>
    CSS nemojte inline, ali moze style u istom fajlu ako vam je lakse.<br>
    2.	Napraviti stranicu proizvodi.php koja pomocu gornje funkcije pravi 3 proizvoda po zelji (birajte naziv i sliku), ali su dva proizvoda sa popustom i jedan bez. (ne mogu ciklusi, pozivate 3 puta funkciju)
    </p>
    <hr>

    <?php
        proizvod("Tonik", 1, 100, 20);
        proizvod("Sampon", 2, 120, 30);
        proizvod("Krema", 3, 130);
    ?>
    
</body>
</html>