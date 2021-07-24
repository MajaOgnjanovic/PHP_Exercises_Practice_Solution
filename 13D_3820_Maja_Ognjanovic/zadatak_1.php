<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadatak 1</title>
    <style>
        .green{
            color: green;
        }
        .red{
            color: red;
        }
    </style>
</head>
<body>
    <p>Data su dva slucajna broja. Prikazati veci broj u zelenoj, a manji broj u crvenoj boji. Uraditi zadatak na 2 načina: <br>
    - Boje ubaciti u inline style <br>
    - Boju odrediti preko klase, tako da php samo pravi element sa odredjenom klasom.
</p>
    <?php
        $a = mt_rand(0,50);
        $b = mt_rand(0,50);
        // $a=55;
        // $b=55;
        echo "Brojevi su $a, $b <br>";
        echo'<hr>';
        echo "prvi nacin:";
        if ($a > $b) {
            echo "<p style='color: green'>Veci broj je: $a</p>";
            echo "<p style='color: red'>Manji broj je: $b</p>";
        }elseif($a=$b) {
            echo "<p>Brojevi su jednaki</p>";
        }
        else{
            echo "<p style='color: red'>Manji broj je: $a</p>";
            echo "<p style='color: green'>Veci broj je: $b</p>";  
        }


        echo'<hr>';
        echo "drugi nacin:";
        $r = "red";
        $g = "green"; 
        if ($a > $b) {
            echo "<p class='$g'>Veci broj je: $a</p>";
            echo "<p class='$r'>Manji broj je: $b</p>";
        }elseif($a==$b) {
            echo "<p>Brojevi su jednaki</p>";
        }else {
            echo "<p class='$g'>Veci broj je: $b</p>";
            echo "<p class='$r'>Manji broj je: $a</p>";
        }

    ?>
    
</body>
</html>