<html>
    <h1>TP_n°5_langage_PHP</h1>
    <hr>
    <h2>Exercice_2</h2>

    <body>
        <form method="post">
            Nom : <input type="text" name="nom" value="<?php if (isset($_POST['nom'])){echo $_POST['nom'];} ?>"/>
            Prénom : <input type="text" name="prenom" value="<?php if (isset($_POST['prenom'])){echo $_POST['prenom'];} ?>"/>
            <br><br>
            Débutant : <input type="radio" name="niveau" value="débutant" <?php if (isset($_POST["niveau"])) { if ($_POST["niveau"] == "débutant"){ echo checked ; }}?>/>
            Avancé :   <input type="radio" name="niveau" value="avancé" <?php if (isset($_POST["niveau"])) { if ($_POST["niveau"] == "avancé"){ echo checked ; }}?>/>
            <br><br>

            <input type="reset" value="Effacer" />&nbsp;<input type="submit" value="Envoyer" />
            <br><br>
        </form>
    </body>
</html>

<?php

echo "Bonjour " . $_POST['prenom'] . " " . $_POST['nom'] . ". Vous avez un niveau " . $_POST['niveau'];

?>
