<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?php 
        include_once "Hrana.php";

        $sastojak1= new SastojakHrane("brasno","300 gr",100);
        $sastojak1->prikazi_sastojakHrane();
    echo "<hr>";    
        echo $sastojak1->promeni_meru("400 grama");
        $sastojak1->prikazi_sastojakHrane();
    
    echo "<hr>";
        $listahrane->prikazi_sastojkeHrane();

    echo "<hr><b>";
    $jelo->prikazi_sastojkeHrane();

    echo "<hr>";
    $jelo->promeniMeru("jaja","50");
    $jelo->prikazi_sastojkeHrane();
    ?>
</body>
</html>