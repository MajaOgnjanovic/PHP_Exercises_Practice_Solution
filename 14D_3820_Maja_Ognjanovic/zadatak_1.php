<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
</head>
<body>
    <p>Napraviti formu koja u 2 inputa prihvata ime i prezime. Posle slanja forme, prikazati inicijale u obliku I.P.  </p>

    <?php
        $ime = "";
        if (isset($_GET['ime'])) 
            $ime = $_GET['ime'];

        $prezime = "";
        if (isset($_GET['prezime'])) 
            $prezime = $_GET['prezime'];

        $ime = strtoupper(substr($ime, 0, 1));
        $prezime = strtoupper(substr($prezime, 0, 1));

        echo "$ime.$prezime.";
    
    ?>
    
</body>
</html>