<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 7</title>
    </head>
    <body>

        <?php
        if (isset($_POST['civility']) && isset($_POST['lastname']) && isset($_POST['firstname'])) {
 
            if (isset($_FILES['myFile']) && !empty($_FILES['myFile'])) {
                $fileInfos = pathinfo($_FILES['myFile']['name']);
                $fileName = $fileInfos['filename'];
                $fileExtension = $fileInfos['extension'];
                echo 'Nom : '.$_POST['lastname']; ?>
        <p><?= 'Prénom : '.$_POST['firstname']; ?></p>
        <p><?='Le fichier envoyé s\'appel ' . $fileName . ' et son extension est ' . $fileExtension;?></p>
            <?php
            }    
        } else {
                ?>
                <form method="post" enctype="multipart/form-data">
                    <select name="civility">
                        <option value="monsieur">Monsieur</option>
                        <option value="madame">Madame</option>
                    </select>

                    <label for="lastname">Nom : </label>
                    <input type="text" name="lastname" id="lastname" />

                    <label for="firstname">Prénom : </label>
                    <input type="text" name="firstname" id="firstname" />

                    <label for="myFile">Sélectionner un fichier : </label>
                    <input type="file" name="myFile" />

                    <input type="submit" value="Envoyer" />
                </form>
                <?php
            }
            ?>
    </body>
</html>