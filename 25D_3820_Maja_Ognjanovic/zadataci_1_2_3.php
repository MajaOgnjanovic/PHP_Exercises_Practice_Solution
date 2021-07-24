<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    1.	Dodati u gornji niz jos 4 osobe po zelji.<br>
    2.	Napisati fju koja prikazuje imena svih programera.<br>
    3.	Napisati fju koja prikazuje sve podatke neke date osobe. <br>Pozivajuci tu funkciju prikazati sve osobe cije ime sadrzi slovo s.
    </p>
    <hr>
    <?php 
        $x = [
            ['ime'=>"Dragana", 'godine'=>32, 'grad'=>"Nis", 'pozicija'=>"programer"],
            ['ime'=>"Ivana", 'godine'=>20, 'grad'=>"Bg", 'pozicija'=>"dizajner"],
            ['ime'=>"Sinisa", 'godine'=>25, 'grad'=>"Ns", 'pozicija'=>"menadzer"],
            ['ime'=>"Stojan", 'godine'=>50, 'grad'=>"Ns", 'pozicija'=>"programer"]
        ];

        $y = [
            ['ime'=>"Milica", 'godine'=>42, 'grad'=>"Nis", 'pozicija'=>"programer"],
            ['ime'=>"Ivan", 'godine'=>22, 'grad'=>"Bg", 'pozicija'=>"dizajner"],
            ['ime'=>"Petar", 'godine'=>36, 'grad'=>"Ns", 'pozicija'=>"menadzer"],
            ['ime'=>"Marko", 'godine'=>55, 'grad'=>"Ns", 'pozicija'=>"programer"]
        ];

        //dodati u gornji niz jos 4 osobe po zelji
        $x = array_merge($x, $y);

        echo "<pre>";
        echo print_r($x);
        echo "</pre>";

        //funkcija koja prikazuje imena svih programera
        function imena_programera($x){
            for ($i=0; $i <count($x) ; $i++) { 
                if ($x[$i]['pozicija'] == 'programer') {
                    echo $x[$i]['ime'].", ";
                }
            }
        }
        echo "Programeri su: ";
        imena_programera($x);

        echo "<hr>";

        //funkcija koja prikazuje sve podatke neke date osobe
        function prikazi_osobu($osoba){
            echo "<p>".join(", ", $osoba)."</p>";
        }
        //provera za sve osobe sa svim podacima
        // foreach ($x as $key => $value) {
        //     prikazi_osobu($value);
        // }

        echo "<hr>";
        //primer prikazi mi podatke od Ivane
        // foreach ($x as $key => $value) {
        //     if ($value['ime'] == "Ivana") {
        //         prikazi_osobu($value);
        //     }   
        // }
        
        
       
        // echo "<hr>";

        //Pozivajuci tu funkciju prikazati sve osobe cije ime sadrzi slovo s
        
        //sa foreach
        foreach ($x as $key => $value) {
            if (stripos($value['ime'], 's') !== false) {
                prikazi_osobu($value);
            }
        }

        echo "<hr>";
        //sa for
        for ($i=0; $i <count($x) ; $i++) { 
            if (stripos($x[$i]['ime'], 's') !== false) {
                prikazi_osobu($x[$i]);
            }
        }

        echo "<hr>";
        //sa array_filter
        $sadrzi_s = array_filter($x, function($osoba){
            return (stripos($osoba['ime'], 's') !== false);
        });
        foreach ($sadrzi_s as $key => $value) {
            prikazi_osobu($value);
        }

        
        
        
    
    
    ?>
</body>
</html>