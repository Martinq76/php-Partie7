<?php
    if(isset($_GET) and ! empty($_GET)) {
        echo 'Formulaire envoyé'; ?>
<p><?= print_r($_GET) ?></p>
<?php
    } else { ?>
        
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 6</title>
    </head>
    <body>
        <form method="get">
            <select name="civility">
                <option value="monsieur">Monsieur</option>
                <option value="madame">Madame</option>
            </select>
            
            <label for="lastname">Nom : </label>
            <input type="text" name="lastname" id="lastname" />
            
            <label for="firstname">Prénom : </label>
            <input type="text" name="firstname" id="firstname" />
            
            <input type="submit" value="Envoyer" />
        </form>
    </body>
</html>
<?php
            }
?>