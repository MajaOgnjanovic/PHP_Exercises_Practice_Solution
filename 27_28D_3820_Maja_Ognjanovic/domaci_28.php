<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h4>DOMACI 28</h4>

    <p>
    1.	Napraviti klasu Baldahin (slika ispod) koja nasledjuje klasu Krevet iz domaceg broj 27, i prosiruje clanicama visina i cenaBaldahina. (odvojena cena samo za dodatak)
Napraviti konstruktor koji poziva roditeljski konstruktor i upisuje podatke i u nove dve clanice

2.	Metoda __toString, ne poziva roditeljski __toString, vec prikazuje dve cene. Cenu kreveta bez baldahina i sa baldahinom (zbirno). 
(Posto je cena u klasi Proizvod private, da bi joj se iz klase Baldahin moglo pristupiti treba ili a) uvesti protected ili b) dodati metodu "daj_cenu")
    </p>
    <hr>
 
    <?php 
         require_once ("domaci_27.php");
      
         class Baldahin extends Krevet{
            //moze da se def ovde a i ne mora
            // public $visina;
            // public $cenaBaldahina;

            //constructor
            public function __construct($argDuzina,$argSirina,$argMaterijal,$argCena,$visina,$cenaBaldahina){
              
                $this->visina=$visina;
                $this->cenaBaldahina=$cenaBaldahina;

                parent:: __construct($argDuzina,$argSirina,$argMaterijal,$argCena);
            }

          //toString za  cenu kreveta bez baldahina i cenu kreveta sa baldahinom

            public function __toString(){
                return "Cena kreveta bez baldahina je:  ".$this->daj_cenu()." a cena kreveta sa baldahinom je: ".($this->daj_cenu() + $this->cenaBaldahina);
            }

         }
   echo "<hr>";     
   echo "<b>DOMACI 28 </b><br>";  
     $krevet22=new Baldahin(100,100,"koza",500,30,500);
                          
     echo $krevet22;

        
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>