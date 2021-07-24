<?php
    function proizvod($ime, $slika, $cena, $popust = 0){
        $cenapopust = $cena - $cena * ($popust/100); 
        if ($popust > 0) {
            echo "<div><img src='img/krema$slika.jpg' alt='slika'>
            <p>Proizvod: $ime</p><p class='crveno'>Cena: $cena din</p><p class='zeleno'>Sa popustom: $cenapopust din</p></div>";
        }
        if ($popust == 0) {
            echo "<div><img src='img/krema$slika.jpg' alt='slika'>
            <p>Proizvod: $ime</p><p>Cena: $cena din</p><p>&nbsp;</p></div>";
        }   
    }
?>