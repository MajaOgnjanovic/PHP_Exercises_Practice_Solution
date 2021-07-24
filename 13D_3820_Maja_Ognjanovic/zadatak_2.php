<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadatak 2</title>
</head>
<body>
    <p>Data su tri broja. Prikazati ih u rastućem redosledu.</p>

    <?php
        $a = mt_rand(10,50);
        $b = mt_rand(10,50);
        $c = mt_rand(10,50);
        echo "Tri broja: $a, $b, $c <br>";
        echo "Rastuci redosled je: ";

        if ($a < $b) {
            if ($a < $c) {
                if ($b < $c) {
                    echo "$a, $b, $c";
                }else {
                    echo "$a, $c, $b";
                }
            }else {
                echo "$c, $a, $b";
            }
        }else {
            if ($b < $c) {
                if ($a < $c) {
                    echo "$b, $a, $c";
                }else {
                    echo "$b, $c, $a";
                }
            }else {
                echo "$c, $b, $a";
            }
        }

        echo "<br>";
        //drugi nacin
        if ($a <= $b && $a <= $c) {
            if ($b <= $c) {
                echo "$a, $b, $c";
            }else {
                echo "$a, $c, $b";
            }
        }else {
            if ($b <= $a && $b <= $c) {
                if ($a <= $c) {
                    echo "$b, $a, $c";
                }else {
                    echo "$b, $c, $a";
                }
            }else {
                if ($a <= $b) {
                    echo "$c, $a, $b";
                }else {
                    echo "$c, $b, $a";
                }
            }
        }
        

        

    ?>
    
</body>
</html>