<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5</title>
</head>
<body>
    <p>
        5.	*Za vezbu, nije obavezno:  Data su dva niza jedan koji sadrži boje i drugi koji sadrži reči.<br> 
        Prikazati svaku reč preko spana u odgovarajućoj boji.<br> 
        Primer: $boje = ['green', 'blue', 'yellow'];  <br>     
        $reci = ['sto', 'stolica', 'mobilni']; <br>
        Rec "sto" se prikazuje u zelenoj boji, stolica u plavoj, mobilni u zutoj.
    </p>
    <hr>
    <?php

        $boje = ['green', 'blue', 'yellow'];
        $reci = ['sto', 'stolica', 'mobilni'];
        
        function obojeni_span($b, $r){

            for ($i=0; $i < count($b); $i++) { 
                echo "<span style='color:$b[$i]'>$r[$i]</span>";
            }
            //ili preko foreach
            foreach ($b as $key => $value) { 
                echo "<span style='color:$value'>{$r[$key]}</span>";      
            }
        }

        obojeni_span($boje, $reci);
    ?>
    
</body>
</html>