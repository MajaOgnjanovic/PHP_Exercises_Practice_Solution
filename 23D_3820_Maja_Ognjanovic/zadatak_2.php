<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domaci 2</title>
</head>
<body>
    <p>2.	Napraviti niz od svih brojeva koji su veći od aritmetičke sredine niza (prosečne vrednosti). </p>

    <?php 
      $x=[55,36,5,2,7];   //veci od 21
    
      function svi_veci($x){
          $y=[];
          $s=0;
          $b=1;
                for($i=0; $i<count($x); $i++){
                    $s=$s+$x[$i]; 
                    $b++;               
                }
                for ($i=0; $i <count($x) ; $i++) { 
                          
                    if ($x[$i]>$s/$b) {
                        array_push($y, $x[$i]);
                    }
                 }
          return $y;
      }
     echo join(", ", (svi_veci($x)));;
    
   
    ?>
</body>
</html>