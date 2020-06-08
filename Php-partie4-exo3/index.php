<?php 
    function myFunction($string1, $string2) {
        return $string1 . $string2;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie4-exo3</title>
    </head>
    <body>
        <p><?= myFunction('Bon','jour!') ?></p>
    </body>
</html>