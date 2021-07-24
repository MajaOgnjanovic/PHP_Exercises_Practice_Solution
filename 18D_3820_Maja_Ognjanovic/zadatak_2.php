<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 zadatak</title>
</head>
<body>
    <p>
        2.	Množiti sve brojeve od 30 ka 1, sve dok proizvod ne predje 100.000. Prikazati konacan rezultat crvenom bojom a poslednje pomnozeni broj - zelenom.
    </p>
    <hr>
    <?php
        $a = 30;
        $p = 1;
        $pp = $a; 
        while ($p <= 100000) {
            $p = $p * $a; 
            $pp = $a; 
            $a--;  
        }
        echo "<p>Proizvod brojeva je:<span style='color:red'> $p</span></p>";
        echo "<p>Poslednji pomnozeni broj je:<span style='color:green'> $pp</span></p>";
        
        
    ?>
    
</body>
</html>