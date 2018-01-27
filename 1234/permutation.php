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
        <p>$vals1 = 10</p><br>
        <p>$vals2 = 8</p><br>

        <?php
        $vals1 = 10;
        $vals2 = 8;
        $temp;
        
      $temp = $vals1;
      $vals1 = $vals2;
      $vals2= $temp;
      
  
             echo "La valeur 1 = ".$vals1."<br>"."La valeur 2 = ".$vals2;
        
       
    
        ?>
</body>
</html>
