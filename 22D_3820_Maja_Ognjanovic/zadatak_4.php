<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4</title>
    <style>
        .oznacen{
            background-color: lightslategray;
        }
    </style>
</head>
<body>
    <p>
        4.	*Za vezbu, nije obavezno:  prethodnoj funkciji dodati parametar $oznacen koja pokazuje koji -li- treba imati klasu oznacen na sledeci nacin:<br>
        a)	Parametar oznacen predstavlja index niza (0 ili 1 ili 2….)<br>
        b)	Parametar oznacen predstavlja sta pise u meniju ("Stavka 1", ili "Stavka 2"…)<br>
        U css, dodati klasu oznacen - druga boja pozadine.
    </p>
    <hr>
    <?php
        function lista($niz, $oznacen){
            echo "<ul>";
            for ($i=0; $i < count($niz); $i++) { 
                if ($oznacen == $i) {
                    echo "<li class='oznacen'>".$niz[$i]."</li>";
                }else {
                    echo "<li>".$niz[$i]."</li>";
                }   
            }
            echo "</ul>";


            //ili preko foreach
            echo "<ul>";
            foreach ($niz as $key => $value) {
                if ($oznacen == $key) {
                    echo "<li class='oznacen'>$value</li>";
                }else {
                    echo "<li>$value</li>";
                }   
            }
            echo "</ul>";
               
        }


        $x = ["Stavka 1", "Stavka 2", "Stavka 3", "Stavka 4"];
        lista($x, 2);

    ?>
    
</body>
</html>