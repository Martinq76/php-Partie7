<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 5</title>
    </head>
    <body>
        <?php
        if(isset($_GET) and ! empty($_GET)) {
            echo "Formulaire envoyé";
        }
        ?>
        
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