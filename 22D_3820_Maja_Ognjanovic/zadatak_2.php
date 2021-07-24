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
        2.	Napisati fju koja za dati niz stringova pomocu fje "palindrom" (radjeno na casu) ispituje i prikazuje samo palindrome tog niza.  Npr za niz ["potop", "buducnost", "lul", "nije"]  prikazuje reci "potop" i "lul".
    </p>
    <hr>
    <?php
        //funkcija sa casa
        function palindrom($str){
            $n1 = explode(" ", strtolower($str));  
            $n2 = join("", $n1); 
    
            return ($n2 === strrev($n2));
        }

        function trazi_palindrom($niz){
            foreach ($niz as $value) {
                
                if (palindrom($value)) {
                    echo $value.", ";
                }
            }
        }

        $niz = ["potop","buducnost","lul","nije"];

        trazi_palindrom($niz);
    ?>
    
</body>
</html>