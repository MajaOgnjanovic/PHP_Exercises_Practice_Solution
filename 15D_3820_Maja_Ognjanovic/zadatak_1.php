<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1. zadatak</title>
</head>
<body>
    <p>
        1.	Napisati fju koja za zadata dva imena (globalne promenljive) ispisuje duze ime.
    </p>
    <hr>

    <?php
        $ime1 = "Maja";
        $ime2 = "Iva";

        function imena(){
            global $ime1, $ime2;
            if (strlen($ime1) > strlen($ime2)) {
                echo $ime1;
            }elseif (strlen($ime1) == strlen($ime2)) {
                echo "Imena: $ime1 i $ime2 su iste duzine.";
            }else {
                echo $ime2;
            }
        }

        imena();
    ?>
    
</body>
</html>