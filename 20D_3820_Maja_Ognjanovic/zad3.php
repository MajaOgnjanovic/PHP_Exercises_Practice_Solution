<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 3</title>
</head>

<body>
    <p>
        napisati funkciju koja vraca N div elemenata koji imaju M span elemenata, koji imaju tekst od 1 do M
    </p>
    <hr>

    <?php
    function kreiraj_div($n, $m)
    {
        $str = "";
        for ($i = 1; $i <= $n; $i++) {
            $str .= "<div>";
            for ($j = 1; $j <= $m; $j++) {
                $str .= "<span>$j</span>";
            }
            $str .= "</div>";
        }
        return $str;
    }

    echo kreiraj_div(5, 2);
    ?>
</body>

</html>