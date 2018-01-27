<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $var = "Fred va au cinéma 1 fois par semaine . La place de cinema coute 10 euro.<br>"
                . "Comme il a la carte de fidélité il enpoche 2 euro pour chaque place acheter<br>"
                . "Combien de semaine lui faudra t'il pour avoir une place gratuite?<br><br><br>";
        $var1 = "1) La place coute 10 euros (variable = price).";
        $var2 = "2) Bonus fidélité 2 euros (variable = carte).";
        $var3 = "3) Nombre de semaine écouler-(variable = week).";

        $price = "";
        $carte = 0;
        $week = 0;
        for ($price = 6; $carte < $price; $carte++) {
            $carte++;
            $week++;
        } if ($price = $carte) {
            echo $var . $var1 . "<br>" . $var2 . "<br>" . $var3 . "<br>" . "<br>"
            . "Le nombre de semaine et = ".$week . ".<br>";
        }
        ?>
        <img src="img/1.jpg" alt=""/>
    </body>
</html>
