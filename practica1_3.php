<?php
$nCartas = 5;

echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Javier Villacorta">
    <title>Ejercicio3</title>
</head>
<body>
    ';
    for ($i=0; $i < $nCartas; $i++) { 
        switch (rand(1, 4)) {
            case 1:
                $baraja = 'Bastos';
                break;
            case 2:
                $baraja = 'Copas';
                break;
            case 3:
                $baraja = 'Oros';
                break;
            case 4:
                $baraja = 'Espadas';
                break;
        }
        $cartaRand = rand(1, 12);

        echo '<br>';
        echo "<img src='baraja/", strval($baraja), "/", $cartaRand, ".jpg'>";      
    }
    
    echo '
</body>
</html>
';

?>