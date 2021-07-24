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
        1.	Napisati fju koja vraca true ako neki dati niz ne sadrzi nule, a u suprotnom vraca false.
    </p>
    <hr>
    <?php 
      $niz=[55,32,6,2];
        function sadrzi_nulu($niz){
            $nema = true;
            for ($i=0; $i <count($niz) ; $i++) {
                if(in_array(0, $niz)){
                    $nema = false;
                    break;
                }
            }
        return $nema;  
        }    
        echo '<pre>';
        var_dump(sadrzi_nulu($niz));
        echo '</pre>';    
    ?>
    
</body>
</html>