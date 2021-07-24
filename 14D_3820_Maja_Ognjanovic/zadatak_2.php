<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
</head>
<body>
    <p>
    Napraviti formu koja u jednom inputu prihvata ime i prezime razdvojene razmakom. Posle slanja forme, prikazati inicijale u obliku I.P. 
    </p>

    <?php
        $ip = "";
        if (isset($_GET['ip'])) 
            $ip = $_GET['ip'];
            
        $i = strtoupper(substr($ip, 0, 1));
        $s = strpos($ip, ' ');
        $p = strtoupper(substr($ip, $s+1, 1));

       //$p = substr($ip, strpos($ip, ' ')+1, 1);

        echo "$i.$p.";
       

 
    
    ?>
    
</body>
</html>