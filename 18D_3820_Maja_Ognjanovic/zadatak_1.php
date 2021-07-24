<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 zadatak</title>
</head>
<body>
    <p>
        1.	Ispisati brojeve od 20 do 1 preko while ciklusa.
    </p>
    <hr>
    <?php
        //do while
         $a = 20;
         do{
             echo "$a, ";
             $a--;
             
         }while($a > 0);

        echo "<hr>";
        
        //while
        $a = 20;
        while($a > 0 ){
	    
            echo "$a, ";
            $a--;
	
        };
    ?>
    
</body>
</html>