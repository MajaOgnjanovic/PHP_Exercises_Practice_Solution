<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h4>DOMACI 27</h4>
    <p>
        1.	Napraviti klasu Krevet, koja ima clanice: duzina, sirina, materijal i cena. Cena je private. <br>
        Napisati konstruktor koji dobija i  postavlja sve clanice.<br>
        Napisati metodu za citanje cene.<br>
        Napisati metodu __toString koja prikazuje: "Krevet je duzine... i sirine.... napravljen od.... po ceni ...."<br>

        2.	Napraviti dva objekta klase Krevet, sa podacima po zelji. Prikazati samo Krevet sa vecom cenom.<br>

        3.	U klasu krevet dodati metodu "popust" koja za dati popust u procentima - i smanjuje cenu za toliko procenata.<br>
        Napraviti novi objekat klase Krevet, zatim ga prikazati, pozvati popust za 10% i prikazati ga opet.
    </p>
    <hr>
    <h4>DOMACI 27</h4>
    <?php 
        class Krevet{
            private $cena;

            public $duzina;
            public $sirina;
            public $materijal;
           
         

            //konstruktor
            public function __construct($argDuzina,$argSirina,$argMaterijal,$argCena) {
                $this->duzina=$argDuzina;
                $this->sirina=$argSirina;
                $this->materijal=$argMaterijal;
                $this->cena=$argCena;
                
            }

       
          
            //-GETTER
            public function daj_cenu(){
                return $this->cena;
            }

            //MAGIC Fn toStr
            public function __toString(){
                return "Krevet je duzine ".$this->duzina." i sirine ".$this->sirina ." napravljen od ".$this->materijal." po ceni: ".$this->cena;
            }


            //metoda popust
            public function popust($popust){
               $this->cena = $this->cena - $this->cena * ($popust/100);
            }

        }
         
     
    $krevet1= new Krevet(200,90,"bukovo-drvo",1500);



    //procitaj cenu
   
    //daj_cenu  GET
    echo $krevet1->daj_cenu()." ";//1500

echo "<hr>";
    //prikazi sa toString
    echo $krevet1;
   
echo "<hr>";    
//krevet2
   $krevet2=new Krevet(190,80,"hrastovo-drvo",2200) ;

    // daj_cenu  GET
    echo $krevet2->daj_cenu()." "; //2200

echo "<hr>";
    //2. prikazati krevet sa vecom cenom
    $a=$krevet1->daj_cenu();
    $b=$krevet2->daj_cenu();

    if ($a>$b) {
    //    echo "Proizvod: ". $krevet1->daj_cenu() ."  prikazujem";
    //ili lepse prekotoStr
        echo $krevet1;
    }else{
        // echo "Proizvod: ". $krevet2->daj_cenu() ."  prikazujem";
        echo $krevet2;
    }

echo "<hr>"; 
    $krevet=new Krevet(150,60,"iverica-krevet",1000);
    
    echo $krevet->daj_cenu();//1000
    echo "<br>";
    echo $krevet;
    echo "<br>";
    $krevet->popust(10)."<br>";//900
    echo $krevet;
    ?>
</body>
</html>