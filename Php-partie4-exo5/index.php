<?php 
    function myFunction($nb, $string) {
        return $nb . $string;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie4-exo5</title>
    </head>
    <body>
        <p><?= myFunction(10, 'ans') ?></p>
    </body>
</html>