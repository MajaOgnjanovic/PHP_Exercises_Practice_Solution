<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 3</title>
    <style>
        table,
        td,
        th {
            border: 2px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <!--3.Data su 3 slucajna broja (1-10). Napraviti html tabelu 3x2 koja u prvoj koloni ima broj a u drugoj njegov kvadrat.-->
    <?php
    $a = mt_rand(1, 10);
    $a_kvadrat = $a * $a;

    $b = mt_rand(1, 10);
    $b_kvadrat = $b * $b;

    $c = mt_rand(1, 10);
    $c_kvadrat = $c * $c;
    ?>

    <table>
        <tr>
            <th>Ovo je broj: </th>
            <th>Ovo je njegov kvadrat: </th>

        </tr>

        <tr>

            <td><?= $a ?></td>
            <td><?= $a_kvadrat ?></td>
        </tr>
        <tr>
            <td><?= $b ?></td>
            <td><?= $b_kvadrat ?></td>
        </tr>
        <tr>
            <td><?= $c ?></td>
            <td><?= $c_kvadrat ?></td>
        </tr>
    </table>

</body>

</html>