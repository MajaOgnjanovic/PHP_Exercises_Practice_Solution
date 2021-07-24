<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 2</title>
</head>
<body>
    <!--1. Napraviti folder domaci_12. Unutar tog foldera napraviti foldere “zadatak_2” i “zadatak_3”.
        Svaki od foldera ima index.php sa resenjem domaceg zadatka zadatih ispod.
        Posle resenja 2.zadatka ubaciti link ka resenju 3.zadatka.
        2. Date su 2 reci na engleskom koje predstavljaju 2 boje (izaberite sami). Prikazati svaku rec preko spana u boji koju predstavlja. (moze samo inline)-->
    <?php
        $a = "red";
        $b = "blue";
    ?>

    <p>Lorem ipsum <span style='color:<?= $a ?>'><?= $a ?></span> dolor sit amet, consectetur adipisicing elit. Pariatur aspernatur, <span style='color:<?= $b ?>'><?= $b ?></span> sequi harum incidunt eaque porro adipisci dicta <span style='color:<?= $a ?>'><?= $a ?></span> dolore nulla in <span style='color:<?= $b ?>'><?= $b ?></span> repellat quisquam perferendis debitis beatae, maxime excepturi. Repellendus, odit vero.</p>

    <a href="../zadatak_3/index.php" target="_blank">Zadatak_3</a>
    
    
</body>
</html>