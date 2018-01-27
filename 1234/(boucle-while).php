<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $i = 0;
        while ($i <32){
            $i++;
            echo "$i-"; 
        }
function majeur($age){
   //  $age =21;
        if ($age>=18){
            echo 'majeur';
        }else {
                echo 'mineur';
            }
}

$test=majeur(16);
echo $test;

        ?>
    </body>
</html>
