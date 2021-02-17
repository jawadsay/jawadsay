<!DOCTYPE html>
<html>
     
     <head>
     	<title>Formulaire PhP</title>
        <meta charset="utf-8"/>
     </head>

     <body>
    <?php

    $definition = fopen("testphp.txt", "r");
    $affichagedef=fgets($definition, 10000);
    echo $affichagedef;
    fclose($definition);
     ?>
     </body>
</html>
