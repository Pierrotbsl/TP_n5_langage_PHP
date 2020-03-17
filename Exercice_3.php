<html>
    <h1>TP_n°5_langage_PHP</h1>
    <hr>
    <h2>Exercice_3</h2>

    <body>
        <form method="post">
            Nom : <input type="text" name="nom"/>
            Prénom : <input type="text" name="prenom"/>
            Âge : <input type="number" name="age"/>

            <br><br><br>
            Langues pratiquées : (choisir au minimum 2)

            <br>

            <select name="langues[]" multiple="multiple" >
                <option value="français"> français</option>
                <option value="anglais"> anglais</option>
                <option value="espagnol"> espagnol</option>
                <option value="chinois"> chinois</option>
                <option value="allemand"> allemand</option>
            </select>

            <br><br>

            Compétences informatiques (choisir au minimum 2)

            <br>

               HTML <input type="checkbox" name="niveau[]" value="HTML"/>
               CSS <input type="checkbox" name="niveau[]" value="CSS"/>
               PHP <input type="checkbox" name="niveau[]" value="PHP"/>
               SQL <input type="checkbox" name="niveau[]" value="SQL"/>
               C  <input type="checkbox" name="niveau[]" value="C"/>
               C++ <input type="checkbox" name="niveau[]" value="C++"/>
               Javascript <input type="checkbox" name="niveau[]" value="Javascript"/>
               Python <input type="checkbox" name="niveau[]" value="Python"/>

            <br><br>

            <input type="reset" value="Effacer" />&nbsp;<input type="submit" value="Envoyer" />

            <br><br>
            ______________

        </form>
    </body>
</html>

<?php

if($_POST['prenom'] == NULL || $_POST['nom'] == NULL || $_POST['age'] == NULL) {
    echo "Merci de bien vouloir remplir les champs : Prénom Nom et Âge.";
}
else {
    echo "<h3>Récapitulatif de votre fiche d'information personnelle :</h3> " . "<br>";
    echo "Vous êtes " . $_POST['prenom'] . " " . $_POST['nom'] . "<br>";
    echo "Vous avez " . $_POST['age'] . "ans<br>";
    echo "Vous parlez : <br><br>";
    $langues = $_POST['langues'];
    foreach ($langues as $valeur) {
        echo " <dd><li> $valeur </li>";
    }
    echo "<br>";
    echo "</dd> Vous avez des compétences informatiques en : <br><br> ";
    $check = "<dd>";
    foreach ($_POST["niveau"] as $checkoptions) {
        $check .= "<li>";
        $check .= $checkoptions . "<br>";
    }
    echo $check;
    echo "</dd>";
}
?>




