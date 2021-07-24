<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domaci 1</title>
    <style>
    .crveni{
        color:red;
    }
    .zeleni{
        color:green;
    }
    </style>
</head>
<body>
    <p>1.	Od niza zadatih reči, napraviti niz čiji će svaki element predstavljati span. Svaki span će imati klasu "crveni", "zeleni" u zavisnosti od toga da li je reč kraća ili duža od 5 slova. Prikazati dobijeni niz.</p>

    <?php 
       $x=["Maja","voli", "da","jede","jagode","lubenice"];
         function span($x){
            
                for ($i=0; $i <count($x) ; $i++) { 
                    if (strlen($x[$i])<5) {
                    echo"<span class='crveni'>$x[$i]</span>";
                 
                    }else{
                        echo"<span class='zeleni'>$x[$i]</span>";
                    }
                }
       
         }
        span($x);
    ?>
  
</body>
</html>