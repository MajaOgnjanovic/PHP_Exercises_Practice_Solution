<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>domaci 16</title>
</head>
<body>
    <p>
        *Sve je jedan zadatak podeljen na 3 celine<br>
        1.	Uneti 4 broja preko forme. U php fajlu ucitati ta 4 broja preko $_GET.<br>
        2.	(nastavak) Proveriti uslov da li je drugi broj veci od prvog, i četvrti od treceg. Ako uslov nije ispunjen, prikazati gresku (die).<br>
        3.	(nastavak) Ako je uslov ispunjen, izračunati 
        zbir onih brojeva od prvog do drugog koji su deljivi sa 4, 
        pa zbir onih brojeva od trećeg do četvrtog koji su deljivi sa 3. 
        Prikazati koji je zbir veći.
    </p>
    <hr>

    <?php

        $prvi = "";
        if (isset($_GET['prvi'])) {
            $prvi = $_GET['prvi'];
        }
        $drugi = "";
        if (isset($_GET['drugi'])) {
            $drugi = $_GET['drugi'];
        }
        $treci = "";
        if (isset($_GET['treci'])) {
            $treci = $_GET['treci'];
        }
        $cetvrti = "";
        if (isset($_GET['cetvrti'])) {
            $cetvrti = $_GET['cetvrti'];
        }

        $x = 0;
        $y = 0;
        if ($drugi > $prvi && $cetvrti > $treci) {
            for ($i = $prvi; $i <= $drugi; $i++) { 
                if ($i % 4 == 0) {
                    $x = $x + $i;
                }
            }

            for ($i = $treci; $i <= $cetvrti ; $i++) { 
                if ($i % 3 == 0) {
                    $y = $y + $i;
                }
            }

            echo "Zbir brojeva deljivih sa 4 je: $x<br>";
            echo "Zbri brojeva deljivih sa 3 je: $y<br>";

            if ($x > $y) {
                echo "Veci je zbir brojeva deljivih sa 4: $x";
            }else {
                echo "Veci je zbir brojeva deljivih sa 3: $y";
            }

        }else {
            die("die");
        }

        

    ?>
    
</body>
</html>