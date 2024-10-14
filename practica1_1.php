<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Javier Villacorta">
    <title>Practica1_1</title>
</head>
<body>
    <?php
    //La funcion rand() genera un numero aleatorio que se comprende entre x (siendo el numero menor), e y (siendo el mayor)
    $var = rand(1, 6);

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
    /*echo se puede usar para sacar codigo html, el navegador lo interpretara como tal. En este caso estamos tirando dados aleatorios
    y mostrando los resultados mediante imagenes. Para sacar una imagen simplemente tenemos que poner la ruta dentro de la etiqueta
    <img>*/
    ?>
</body>
</html>