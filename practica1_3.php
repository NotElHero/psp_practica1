<?php
    $carta1 = rand(1, 4);
    $carta2 = rand(1, 4);
    $carta3 = rand(1, 4);
    $carta4 = rand(1, 4);

    $rand1 = rand(1, 12);
    $rand2 = rand(1, 12);
    $rand3 = rand(1, 12);
    $rand4 = rand(1, 12);

    for ($i=1; $i < 5; $i++) { 
        $rand = rand(1, 12);
        switch ($carta1) {
            case 1:
                echo "<img src='baraja/Bastos/" +'$rand'+".jpg'>";
                break;
            case 2:
                echo "<img src='baraja/Copas/" +'$rand'+".jpg'>";
                break;
            case 3:
                echo "<img src='babraja/Espadas/" +'$rand'+".jpg'>";
                break;
            case 4:
                echo "<img src='baraja/Oros/" +'$rand'+".jpg'>";
                break;
        }

        //No esta acabado ni de lejos, pero no tengo mucho tiempo libre para mirarlo
        //Cuando no tenga trabajo, le doy una vuelta y lo acabo definitivamente
    }

    
    // switch ($carta2) {
    //     case 1:
    //         echo "<img src='baraja/Bastos/" +"$rand1"+".jpg'>";
    //         break;
    //     case 2:
    //         echo "<img src='baraja/Copas/" +"$rand2"+".jpg'>";
    //         break;
    //     case 3:
    //         echo "<img src='babraja/Espadas/" +"$rand3"+".jpg'>";
    //         break;
    //     case 4:
    //         echo "<img src='baraja/Oros/" +"$rand4"+".jpg'>";
    //         break;
    // }
    // switch ($carta3) {
    //     case 1:
    //         echo "<img src='baraja/Bastos/" +"$rand1"+".jpg'>";
    //         break;
    //     case 2:
    //         echo "<img src='baraja/Copas/" +"$rand2"+".jpg'>";
    //         break;
    //     case 3:
    //         echo "<img src='babraja/Espadas/" +"$rand3"+".jpg'>";
    //         break;
    //     case 4:
    //         echo "<img src='baraja/Oros/" +"$rand4"+".jpg'>";
    //         break;
    // }
    // switch ($carta4) {
    //     case 1:
    //         echo "<img src='baraja/Bastos/" +"$rand1"+".jpg'>";
    //         break;
    //     case 2:
    //         echo "<img src='baraja/Copas/" +"$rand2"+".jpg'>";
    //         break;
    //     case 3:
    //         echo "<img src='babraja/Espadas/" +"$rand3"+".jpg'>";
    //         break;
    //     case 4:
    //         echo "<img src='baraja/Oros/" +"$rand4"+".jpg'>";
    //         break;
    // }
?>