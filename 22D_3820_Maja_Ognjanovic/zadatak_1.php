<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
</head>
<body>
    <p>
        1.	Napisati fju koja za dati niz brojeva izracunava i prikazuje da li ima vise trocifrenih ili dvocifrenih brojeva. (koristiti for)
    </p>
    <hr>
    <?php
        function niz($niz){
            $dbrojac = 0;
            $tbrojac = 0;
            for ($i=0; $i < count($niz); $i++) { 
                if ($niz[$i] > 9 and $niz[$i] < 100) {
                    $dbrojac++;
                }
                if ($niz[$i] > 99 and $niz[$i] < 1000) {
                    $tbrojac++;   
                }
            }
            if ($dbrojac > $tbrojac) {
                echo "Ima vise dvocifrenih brojeva.";
            }elseif ($dbrojac == $tbrojac) {
                echo "Ima isti broj dvocifrenih i trocifrenih brojeva.";
            }
            else {
                echo "Ima vise trocifrenih brojeva.";
            }
        }

        $x = [2,456,87,15,19,114,13];
        niz($x);
    ?>
    
</body>
</html>