<!-- 1.	Napraviti klasu SastojakHrane koja ce imati clanice: naziv, mera, kalorije. I metode: konstruktor, "promeniMeru" koja menja meru i "prikazi" koja samo prikazuje sve podatke zajedno u jednom paragrafu.

2.	Napraviti klasu Jelo koja ima naslov, opis i niz sastojaka hrane. U konstruktoru se dobija naslov, opis i niz $podaci. Naslov i niz samo upisati u this, a preko niza $podaci napraviti niz objekata koji su tip SastojakHrane. 
Napraviti metode "prikazi" i metodu za "promeniMeru" za promenu mere jednog sastojka.  

Proveriti kod sledecim naredbama:
$podaci = [
	["naziv"=>"jaja", "mera"=>"2", "kalorije"=>300],
	["naziv"=>"brasno", "mera"=>"200g", "kalorije"=>600],
	["naziv"=>"secer", "mera"=>"20g", "kalorije"=>100],
	["naziv"=>"so", "mera"=>"5g", "kalorije"=>40]
]
$jelo  = new Jelo("Palačinke", "Najbolje jelo ikad", $podaci);
$jelo->prikazi();
$jelo->promeniMeru("brasno", "400g");
$jelo->prikazi(); -->
<?php 

    class SastojakHrane{
        public $naziv, $mera, $kalorije;

        function __construct($naziv,$mera,$kalorije){
            $this->naziv=$naziv;
            $this->mera=$mera;
            $this->kalorije=$kalorije;
        }

        function prikazi_sastojakHrane(){
            echo "<p>-- $this->naziv, Mera:  $this->mera, Kalorije: $this->kalorije</p>";
        }
        
        function promeni_meru($mera){
            $this->mera=$mera;
        }
    }

   /* Napraviti klasu Jelo koja ima naslov, opis i niz sastojaka hrane. U konstruktoru se dobija naslov, opis i niz $podaci. Naslov i niz samo upisati u this, a preko niza $podaci napraviti niz objekata koji su tip SastojakHrane. 
    Napraviti metode "prikazi" i metodu za "promeniMeru" za promenu mere jednog sastojka. 
    Proveriti kod sledecim naredbama:
$podaci = [
	["naziv"=>"jaja", "mera"=>"2", "kalorije"=>300],
	["naziv"=>"brasno", "mera"=>"200g", "kalorije"=>600],
	["naziv"=>"secer", "mera"=>"20g", "kalorije"=>100],
	["naziv"=>"so", "mera"=>"5g", "kalorije"=>40]
]
$jelo  = new Jelo("Palačinke", "Najbolje jelo ikad", $podaci);
$jelo->prikazi();
$jelo->promeniMeru("brasno", "400g");
$jelo->prikazi(); */
    class Jelo{

        public $naslov,$opis,$nizKlopa;
      

            function __construct($naslov,$opis,$podaci){
                $this->naslov=$naslov;
                $this->opis=$opis;

                $this->podaci=[];
                for ($i=0; $i <count($podaci) ; $i++) { 
                   $sastojci=new SastojakHrane($podaci[$i]['naziv'], $podaci[$i]['mera'], $podaci[$i]['kalorije'],);

                   array_push($this->podaci, $sastojci);
                }
            }
       
            function dodaj_sastojakHrane($naziv,$mera,$kalorije){
                $sastojci = new SastojakHrane($naziv,$mera,$kalorije);
                array_push($this->podaci, $sastojci);
            }  

            function prikazi_sastojkeHrane(){  
                echo "<p>Jelo: $this->naslov, Opis:  $this->opis, sastoji se od: </p>";    
                for($i=0; $i<count($this->podaci); $i++)
                    $this->podaci[$i]->prikazi_sastojakHrane();
            }

            function promeniMeru($naziv,$nova_mera){
                for ($i=0; $i <count($this->podaci) ; $i++) { 
                   if($this->podaci[$i]->naziv==$naziv){
                       $this->podaci[$i]->promeni_meru($nova_mera);
                   }

                }
            }
    }

    include_once "podaci.php";
    $listahrane = new Jelo("o","p",$podaci);

    $jelo  = new Jelo("Palačinke", "Najbolje jelo ikad", $podaci);
  




?>