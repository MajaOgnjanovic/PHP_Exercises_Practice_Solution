<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 2</title>
    <style>
    td{
        width:30px;
        height: 30px;
    }
    </style>
</head>
<body>
    <p>
    2.	Dat je slucajan broj od 1 do 64.
Napraviti tabelu 8x8. Sirina i visina svake celije je 30px i imaju border 1px. 
Celiji sa datim brojem postaviti crnu pozadinu. (preko klase ili inline style). 
Npr ako je broj 11, onda je celija u drugom redu i 3.koloni obojena crno.

    </p>

    <?php
   $a=mt_rand(1,64);
   echo $a;
        echo "<table border=1 solid black  style='border-collapse: collapse'>";

           for ($i=0; $i <8 ; $i++) { 
              echo "<tr>";
                for ($j=1; $j <=8 ; $j++) { 
                  
                   if ($a==$i*8+$j) {
                       echo "<td style='background-color:black ; color:white; text-align:center'>$a</td>";
                   }else{
                       echo"<td></td>";
                   }
                }

              echo "</tr>";
           }


        echo "</table>";
?>
</body>
</html>