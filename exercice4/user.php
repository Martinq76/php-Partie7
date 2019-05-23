<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
    </head>
    <body>
        
        <?php
        if (isset($_POST['lastname']) && isset($_POST['firstname'])) {
            echo 'Nom : '.$_POST['lastname']; ?>
        <p><?= 'Prénom : '.$_POST['firstname']; ?></p>
        <?php
        } else {
            echo 'Désoler mais les paramètres attendus ne sont pas dans l\'url';
        }
        ?>
    </body>
</html>