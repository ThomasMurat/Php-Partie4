<?php 
    function myFunction($firstname, $lastname, $age) {
        return 'Bonjour ' . $lastname . ' ' . $firstname . ' , tu as ' . $age . 'ans';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie4-exo6</title>
    </head>
    <body>
        <p><?= myFunction('Thomas', 'Murat', 22) ?></p>
    </body>
</html>