<?php
//Sacaremos 5 cartas
$nCartas = 5;
//En este ejercicio el codigo html esta hecho desde echo. El resultado no va afectar a la ejecucion.
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Javier Villacorta">
    <title>Ejercicio1_3</title>
</head>
<body>
    ';
    //El for recorrera las 5 cartas que vamos a sacar, mostrando cada imagen correspondiente a la carta sacada
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
        //Con rand() sacaremos una carta aleatoria de cada palo
        $cartaRand = rand(1, 12);
        //E iremos mostrando por pantalla.
        //Con starval() podemos sacar el valor de una cadena de caracteres (String) y así formar la ruta donde se guardan las imagenes correspondientes
        echo '<br>';
        echo "<img src='baraja/", strval($baraja), "/", $cartaRand, ".jpg'>";      
    }
    
    echo '
</body>
</html>
';

?>