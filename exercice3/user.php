<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
    </head>
    <body>
        
        <?php
        if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
            echo 'Nom : '.$_GET['lastname']; ?>
        <p><?= 'Prénom : '.$_GET['firstname']; ?></p>
        <?php
        } else {
            echo 'Désoler mais les paramètres attendus ne sont pas dans l\'url';
        }
        ?>
    </body>
</html>