<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 8</title>
    </head>
    <body>
        <?php
        if (isset($_POST['civility']) && isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_FILES['myFile']) && $_FILES['myFile']['error'] == 0) {
            $fileInfos = pathinfo($_FILES['myFile']['name']);
            $fileName = $fileInfos['filename'];
            $fileExtension = $fileInfos['extension']; ?>
        <p><?= 'Votre fichier se nomme '.$fileName.' et son extension est '.$fileExtension; ?></p>
        <?php
            if ($fileExtension == 'pdf') {
                ?>
        <p><?= 'Votre fichier '.$fileName.' est bien au format pdf'; ?></p>
        <?php
            } else { ?>
        <p><?= 'Votre fichier '.$fileName.' n\'est pas au format pdf'; ?></p>
        <?php
            }
            ?>
        <p><?= 'Vous êtes '.$_POST['civility'].' '.$_POST['lastname'].' '.$_POST['firstname']; ?></p>
        <?php
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