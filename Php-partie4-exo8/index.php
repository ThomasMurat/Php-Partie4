<?php 
    function myFunction($nb1 = 0, $nb2 = 0, $nb3 = 0) {
        return $nb1 + $nb2 + $nb3;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie4-exo8</title>
    </head>
    <body>
        <p><?= myFunction(1, 1) ?></p>
    </body>
</html>