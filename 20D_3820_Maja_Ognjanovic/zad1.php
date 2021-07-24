<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 1</title>
</head>
<body>
    <p>
    Написати функцију која враћа већи од 3 броја (3 броја су прослеђени функцији кроз параметре)
    </p>
    <?php
    function veci_br($a, $b, $c){
        if ($a > $b  and $a > $c) {
            return $a;
        } elseif ($b > $c) {
            return $b;
        } else {
            return $c;
        }
    }

    echo veci_br(4, 3, 23);

?>
</body>
</html>