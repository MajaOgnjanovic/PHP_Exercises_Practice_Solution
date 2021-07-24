<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2. zadatak</title>
</head>
<body>
    <p>
        2.	 Napisati fju koja za zadata dva imena (globalne promenljive) vraca duze ime. Pri pozivanju prikazati rezultat.
    </p>
    <hr>

    <?php
        $ime1 = "Maja";
        $ime2 = "Ivana";

        function imena(){
            global $ime1, $ime2;
            if (strlen($ime1) > strlen($ime2)) {
               return $ime1;
            }elseif (strlen($ime1) == strlen($ime2)) {
                return "Imena: $ime1 i $ime2 su iste duzine.";
            }else {
                return $ime2;
            }
        }

        echo imena();

    ?>
    
</body>
</html>