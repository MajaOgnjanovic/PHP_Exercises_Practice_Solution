<p>a) Napisati funkciju koja ucitava niz iz forme iz inputa. Sve brojeve u inputu razdvojiti razmakom. Fja vraca ucitani niz<br>
b) Napisati funkciju koja ispituje i vraca da li neki dati niz X ima bar 3 parna broja.<br>
c) Napisati funkciju koja ispituje i vraca da li neki dati niz ima sve brojeve manje od 1000.<br>
d) Pomocu gornjih funkcija za niz dobijen iz inputa ispitati i prikazati da li taj niz ima sve brojeve manje od 1000 i bar 3 parna. 
</p>
<hr>
<?php 
$niz = (isset($_GET['niz']))? $_GET['niz'] : "";  

//1.fja vraca niz sa clanovima sa zarezom->explode
    function prikazivanje($niz){
        $y=explode(" ",$niz);
        return $y; 
    }

     $x=prikazivanje($niz);

      //moja provera
     echo  "Brojevi koje ste uneli u inputu su: ".join(", ",prikazivanje($niz));

    //  echo '<pre>';
    //  var_dump($x = prikazivanje($niz));
    //  echo '</pre>';
 
echo "<hr>";   
//2. Da li niz ima bar 3 parna broja? Fja Vraca        
    function tri_parna($x){
        $postoji = false;
        $b=0;
        for ($i=0; $i <count($x) ; $i++) { 
            if($x[$i]%2==0){
             $b++;
            }

            if($b>=3){
                $postoji = true;
                break;
            }
        }
    return $postoji;  
    }    

    // echo "Postoje bar 3 parna broja. ".tri_parna($x);
    if(tri_parna($x)){          
        echo "Ovaj niz IMA bar 3 parna broja";
   }else{    
        echo "Ovaj niz NEMA bar 3 parna broja";         
   }

echo "<hr>";     
//3.da li neki dati niz ima sve brojeve manje od 1000.  

         function manji_od_hiljadu($x){
                $svi=true;

                for ($i=0; $i <count($x) ; $i++) { 
                if($x[$i]>1000){
                        $svi=false;
                        break;
                }
                }
         return $svi;
         }

    if(manji_od_hiljadu($x)){          
         echo "Ovaj niz IMA sve brojeve koji su manji od 1000.";
    }else{    
         echo "Ovaj niz NEMA sve brojeve koji su manji od 1000.";         
    }

echo "<hr>";  
//4. ima sve brojeve manje od 1000 i bar 3 parna
          

        if(tri_parna($x)===true && manji_od_hiljadu($x)===true){
            echo "Ovaj niz IMA sve brojeve manje od 1000 i bar tri parna.";
        }
        else{
            echo "Ovaj niz NEMA sve brojeve manje od 1000 i bar tri parna.";
        }  
?>