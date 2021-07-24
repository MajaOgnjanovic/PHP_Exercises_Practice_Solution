<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 2</title>
</head>

<body>
    <P>
        Napisati funkciju koja vraća div unutar kojeg se nalazi N span elemenata koji za tekst imaju
        redom brojeve od 1 do N

    </P>

    <?php

function vraca_div($n){
    $str = "";
    for ($i=1; $i <= $n ; $i++) {
    $str.= "<span>$i</span>";
    }
    return "<div>".$str."</div>";
    }
    
    echo vraca_div(5);

    ?>
</body>

</html>