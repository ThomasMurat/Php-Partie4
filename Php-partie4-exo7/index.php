<?php 
    function myFunction($gender, $age) {
        if ($gender == 'Homme') {
            $message = 'Vous êtes un homme';
        }else if ($gender == 'Femme') {
            $message = 'Vous êtes une femme';
        }else {
            $message = 'Vous n\'avez pas spécifié un sexe valide';
        }
        if ($age >= 18) {
            $message .= ' et vous êtes majeur';
        }else {
            $message .= ' et vous êtes mineur';
        }
        return $message;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie4-exo7</title>
    </head>
    <body>
        <p><?= myFunction('Homme', 22) ?></p>
    </body>
</html>