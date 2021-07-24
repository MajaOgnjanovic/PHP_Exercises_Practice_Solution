<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 zadatak</title>
</head>
<body>
    <p>
        3.	Prikazati brojeve od 30 do 99, ali preskociti sve one cija je prva cifra deljiva sa 3, ili je druga cifra deljiva sa 4.
    </p>
    <hr>
    <?php

        echo "Brojevi od 30 do 99, sem onih cija je prva cifra deljiva sa 3 ili onih cija je druga cifra deljiva sa 4 su:<br>";

        $a = 30;
        while ($a <= 99) {

            $pc = floor($a / 10); //prva cifra
            $dc = $a - floor($a / 10)*10; // 38-(floor38/10)*10 = 38-3*10 = 38-30 = 8 druga cifra
           
            if ($pc % 3 === 0 || $dc % 4 === 0) {
                $a++;   
                continue;  
            }
            echo "$a, ";
            $a++;  
        }
        

    ?>
    
</body>
</html>