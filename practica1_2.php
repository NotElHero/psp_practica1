<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Javier Villacorta">
    <title>Practica1</title>
</head>
<body>
    <?php
    $var = rand(1, 6);
    $var1 = rand(1, 6);
    $var2 = rand(1, 6);

    switch ($var) {
        case 1:
            echo "<img src='dados/dado1.png'>";
            break;
        case 2:
            echo "<img src='dados/dado2.png'>";
            break;
        case 3:
            echo "<img src='dados/dado3.png'>";
            break;
        case 4:
            echo "<img src='dados/dado4.png'>";
            break;
        case 5:
            echo "<img src='dados/dado5.png'>";
            break;
        case 6:
            echo "<img src='dados/dado6.png'>";
            break;                
    }
    echo "La tirada ha sido ", $var1+$var2, " (", $var1, " + ", $var2, ")";
    ?>
</body>
</html>