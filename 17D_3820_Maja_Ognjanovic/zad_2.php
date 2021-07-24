<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.</title>
</head>
<body>
    <p>2.	Napraviti dva slucajna broja $n i $x u opsegu od 1-10. Prikazati ih.
Napisati funkciju koja pravi i prikazuje "n" span elemenata. Svaki span ima text Ovo je span 1, Ovo je span 2… 
Napraviti "x" divova, pri cemu svaki div dobija "n" spnova pozivajuci prethodnu funkciju.
primer: za n=3 x=4; resenje:
<div><span></span><span></span><span></span></div>
<div><span></span><span></span><span></span></div>
<div><span></span><span></span><span></span></div>
<div><span></span><span></span><span></span></div>
</p>
<?php echo "<hr style='border: 3px solid green';>"; ?>
    <?php
    $n=mt_rand(1,10);
    $x=mt_rand(1,10);

    echo "Slucajni brojevi su za span: $n, a za div je $x";
    echo'<hr>';

    function span(){
        global $n;
      
        for ($i=1; $i <=$n ; $i++) { 
           echo "<span>Ovo je span $i </span>";
        }  
    }
  
        for ($i=0; $i <$x ; $i++) { 
            echo "<div>";
            span();
            echo "</div>";
        }
    
    ?>
</body>
</html>