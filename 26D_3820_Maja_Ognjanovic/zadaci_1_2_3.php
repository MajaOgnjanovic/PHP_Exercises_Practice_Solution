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
        1.	Preko map fje dodati svakom clanu "godine_staza" (jedan slucajan broj od 1 do 3, nije niz)<br>
        2.	Preko usort fje sortirati niz po godinama_staza (*dodatak - neobavezno, ako su godine iste pri uporedjivanju, neka prva bude starija osoba)<br>
        3.	Preko filter fje napraviti niz od osoba cija je godina_staza najveca. (uputstvo, prvo izracunati max, pa onda filter)<br>
    </p>
    <hr>
    <?php 

        $x = [
            ['ime'=>"Dragana", 'godine'=>32, 'grad'=>"Nis", 'pozicija'=>"programer"],
            ['ime'=>"Ivana", 'godine'=>20, 'grad'=>"Bg", 'pozicija'=>"dizajner"],
            ['ime'=>"Sinisa", 'godine'=>25, 'grad'=>"Ns", 'pozicija'=>"menadzer"],
            ['ime'=>"Stojan", 'godine'=>50, 'grad'=>"Ns", 'pozicija'=>"programer"]
        ];

        //1. Preko map fje dodati svakom clanu "godine_staza" (jedan slucajan broj od 1 do 3, nije niz)
        $x = array_map(function($osoba){
            $osoba['gs'] = mt_rand(1,3);
            return $osoba;
        }, $x);
    
        echo "<pre>";
        echo print_r($x);
        echo "</pre>";

        echo "<hr>";
        //2. Preko usort fje sortirati niz po godinama_staza (*dodatak - neobavezno, ako su godine iste pri uporedjivanju, neka prva bude starija osoba)
        usort($x, function($a, $b){
            if ($a['gs'] > $b['gs']) {    
                return -1;
            }elseif ($a['gs'] == $b['gs']) {
                if ($a['godine'] > $b['godine']) {
                    return -1;
                }else {
                    return 1;
                }
            }else {
                return 1;
            }              
        });
        for ($i=0; $i <count($x) ; $i++) { 
            echo "<p>".join(", ",$x[$i])."</p>";
        }
        //echo "<pre>";
        //echo print_r($x);
        //echo "</pre>";
        

        echo "<hr>";
        //3. Preko filter fje napraviti niz od osoba cija je godina_staza najveca. (uputstvo, prvo izracunati max, pa onda filter)        
        $max_gs = 0;
        for ($i=0; $i <count($x) ; $i++) { 
            if ($max_gs < $x[$i]['gs']) {
                $max_gs = $x[$i]['gs'];
            }
        }
   
        $najveci_staz = array_filter($x, function($osoba){
            global $max_gs;            
            if ($osoba['gs'] === $max_gs) {
                return true;
            }else {
                return false;
            }
        });

        for ($i=0; $i <count($najveci_staz) ; $i++) { 
            echo "<p>".join(", ",$najveci_staz[$i])."</p>";
        }
        

        //echo "<pre>";
        //echo print_r($najveci_staz);
        //echo "</pre>";
        




    
    
    ?>

    
</body>
</html>