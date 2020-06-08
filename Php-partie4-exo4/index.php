<?php 
    function myFunction($nb1, $nb2) {
        if ($nb1 > $nb2) {
            $message = 'Le premier nombre est plus grand';
        }else if ($nb1 < $nb2) {
            $message = 'Le premier nombre est plus petit';
        }else {
            $message = 'Les deux nombres sont identiques';
        }
        return $message;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie4-exo4</title>
    </head>
    <body>
        <p><?= myFunction(10, 1) ?></p>
    </body>
</html>