<?php 
     $id =  $_GET['id'];
    include_once "include/proizvod.php";
?>        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detaljnije</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include_once "include/header.php";?>

<section class="single container">           
   <?php

    $listaproiz->prikazi_jedan_proizvod_detaljnije($id);
    
    ?>     
</section>


<?php include_once "include/footer.php";?>
   
</body>
</html>