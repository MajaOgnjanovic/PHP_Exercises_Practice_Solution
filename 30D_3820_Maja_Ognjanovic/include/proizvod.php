<?php include_once "./include/podaci.php";?>
<!--
Napraviti klasu WebSite. Metode: 
 - header() sa naslovom "Dobro dosli u web-shop" - link ka index.php.
 - footer() sa naslovom "Bolje vas nasli" 
 - meni() koji prikazuje listu svih grupa. Svaki naziv grupe je link - index.php?grupa=…
2. Prepraviti index.php i detaljnije.php da prikazuju i header, pa meni, pa proizvode, pa footer...
3.* dopunski - neobavezno: napraviti meni tako sto se pokupe sve grupe iz niza podaci, i naprave svi linkovi.
 -->
<?php
        class Proizvod{
            public $id, $ime,$slika,$opis,$naslov, $cena,$grupa;
    
                function __construct($niz){
                 
                    $this->id = $niz['id'];
                    $this->ime = $niz['ime'];
                    $this->slika = $niz['slika'];
                    $this->opis = $niz['opis'];
                    $this->naslov = $niz['naslov'];
                    $this->cena = $niz['cena'];
                    $this->grupa = $niz['grupa'];
   
            }
                // - prikazi_proizvod() koji prikazuje samo naslov i sliku kao i link ka stranici detaljnije (detaljnije.php),
                function prikazi_proizvod(){
              
                echo"<article>" ;  
                echo "<div class='wrapper'>";
                    echo "<div class='frame'> <img src=' ".$this->slika." '/> </div> ";
                  echo "<div class='text'>";  
                     echo "<h3>$this->naslov</h3>";//-$this->grupa
        echo("<button onclick=\"location.href='detaljnije.php?id=$this->id'\">Detaljnije</button>");
            //   echo "<a href='detaljnije.php?id=$this->id'>Detaljnije</a>";
                  echo "</div>";
                echo "</div>";
                echo "</article>";
               
                }

                // - prikazi_proizvod_detaljnije() koji prikazuje naslov, sliku, opis i cenu.
                public function prikazi_proizvod_detaljnije(){
                 echo "<article>";
                   echo "<img  src='$this->slika' alt='slika'>";
                 echo "</article>";

                 echo "</article>";
                    echo "<h2>$this->naslov</h2>";
                    echo "<p>Opis proizvoda: $this->opis</p>";
                    echo "<h4>Cena proizvoda: $this->cena RSD</h4>";
                    echo("<button onclick=\"location.href='index.php'\">Nazad</button>");
                    // echo "<a href='index.php'>nazad</a>";
                  echo "</article>";
                
                }
            }

        /******************************************************** */

        
        class ListaProizvoda{
            public $proizvodi;
                     
                function __construct(){
                    $this->proizvodi = [];
                }
                    
                function dodaj_proizvode($podaci){        
                    for($i=0; $i<count($podaci); $i++){
                        $pr = new Proizvod($podaci[$i]); 
                        array_push($this->proizvodi, $pr);
                    }

                }
      
            function prikazi_sve_proizvode($grupa = ""){  

                foreach($this->proizvodi as $jedan_proizvod)
                    if($jedan_proizvod->grupa == $grupa or $grupa == "")
                         $jedan_proizvod->prikazi_proizvod();
            }

          
    
            function prikazi_jedan_proizvod_detaljnije($id){
                for($i=0; $i<count($this->proizvodi); $i++){
              
                    if($this->proizvodi[$i]->id == $id)                 
                        $this->proizvodi[$i]->prikazi_proizvod_detaljnije();
                }
            }
        }      
          


$listaproiz = new ListaProizvoda();
$listaproiz->dodaj_proizvode($podaci);
        

        class WebShop{
            public $naslov;
    
                function __construct($naslov){
                 
                    $this->naslov = $naslov;
                }
                function header(){
                    echo "<h2><a href='index.php'>$this->naslov</a></h2>";
    
                }
                function footer(){
                    echo "<h2>$this->naslov</h2>";
    
                }

                function meni(){
                  echo"  <section class='three-columns1'>";
                        echo" <ul class='nav'> ";  
                        echo"  <li>  <a href='index.php' class='active'>SVE</a></li>";
                        echo " <li>  <a href='index.php?grupa=milka'>MILKA</a></li>";
                        echo " <li>  <a href='index.php?grupa=zelje'>NAJLEPŠE ZELJE</a></li>";
                        echo"  <li>  <a href='index.php?grupa=nestle'>NESTLE</a></li>";
                            
                        echo "</ul>"; 
                  echo "</section>";
                }
        }

?>