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
        3.	Napisati fju koja od niza reči pravi html listu kao meni... <br>
        Npr.  ['Stavka 1', 'Stavka 2', …] pretvara u <ul><li>Stavka 1</li><li>Stavka 2</li>…</ul> 
    </p>
    <hr>
    <?php
        function lista($niz){
            echo "<ul>";
            for ($i=0; $i < count($niz); $i++) { 
                echo "<li>".$niz[$i]."</li>";
            }
            echo "</ul>";

            //ili preko foreacha
            echo "<ul>";
            foreach ($niz as $rec) {
                echo "<li>$rec</li>"; 
            }
            echo "</ul>";
        }
        $x = ["Stavka 1", "Stavka 2", "Stavka 3", "Stavka 4"];
        lista($x);
    ?>

    
</body>
</html>