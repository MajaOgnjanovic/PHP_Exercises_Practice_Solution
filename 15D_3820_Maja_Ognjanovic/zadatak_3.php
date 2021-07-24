<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3. zadatak</title>
    <style>
        .red{
            color:red;
        }
        .green{
            color:green;
        }
    </style>
</head>
<body>
    <p>
        2.	 Napisati fju koja za zadata dva imena (globalne promenljive) vraca duze ime. Pri pozivanju prikazati rezultat.<br>
        3.	Dodati u prethodni program fju koja vraca krace ime. Prikazati duze ime u crvenoj, a krace ime u zelenoj boji.
    </p>
    <hr>

    <?php
        $ime1 = "Maja";
        $ime2 = "Iva";

        
 
        function duze(){
            global $ime1, $ime2;
            if (strlen($ime1) > strlen($ime2)) {
                return $ime1;
            }else {
                return $ime2;
            }
        }

        function krace(){
            global $ime1, $ime2;
            if (strlen($ime1) < strlen($ime2)) {
                return $ime1;
            }else {
                return $ime2;
            }
        }

        if (strlen($ime1) == strlen($ime2)) {
            echo "Imena: $ime1 i $ime2 su iste duzine.";
        }else {
            echo "<p>Duze ime: <span class='red'>". duze() . "</span></p>";
            echo "<p>Krace ime: <span class='green'>" . krace() . "</span></p>";
        }
 
       
    ?>
    
</body>
</html>