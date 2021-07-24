<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
</head>
<body>
    <p>
        2.	Napisati fju koja za dati niz koji predstavlja kolika je uspesnost uradjenih domacih po danima<br> ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'>28, 'petak=>28] pronalazi:<br>
        -	Koji dan je najuspesniji<br>
        -	Kolika je prosecna uspesnost<br>
        -	Razliku izmedju najbolje i najgore uspesnosti
    </p>
    <hr>
    <?php  
        $domaci = ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'=>28, 'petak'=>28];

        function najuspesniji($niz){
            $max = 0;
            $dan = "";
            foreach ($niz as $key => $value) {
                if ($max < $value) {
                    $max = $value;
                    $dan = $key;
                }   
            }
            return $dan;
        }
        echo "Najuspesniji dan je: ".najuspesniji($domaci);
        echo "<br>";


        function prosecna_uspesnost($niz){
            $ukupno = 0;
            foreach ($niz as $key => $value) {
                $ukupno += $value;
            }
            $pru = $ukupno/count($niz);
            return $pru;
        }
        echo "Prosecna uspesnost: ".prosecna_uspesnost($domaci);
        echo "<br>";

        function razlika($niz){
            $max = -INF;
            $min = INF;
            $razlika = 0;
            foreach ($niz as $key => $value) {
                if ($max < $value) {
                    $max = $value;
                }
                
                if ($min > $value) {
                    $min = $value;
                }
            }
            
            
            
            $razlika = $max - $min;
            return $razlika;
        }
        echo "Razlika izmedju najbolje i najgore uspesnosti je: ".razlika($domaci);



    ?>
</body>
</html>