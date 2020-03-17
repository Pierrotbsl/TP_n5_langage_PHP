<?php session_start(); ?>
<html>
<h1>TP_n°5_langage_PHP</h1>
<hr>
<h2>Exercice_12 </h2>

<form method="post">
    Nom : <input type="text" name="nom"/><br>
    Prénom : <input type="text" name="prenom"/>

    <br><br>

    <input type="submit" value="Enregistrer" />&nbsp;<input type="reset" value="Effacer" />

    <br><br>
    ______________
    <br><br>
    <input type="submit" value="Supprimer la session" name="supp"/>
    <br>
    ______________

</form>
</html>

<?php

if( isset($_SESSION['compteur']) ) {
    if($_POST['prenom'] == NULL || $_POST['nom'] == NULL) {
        $_SESSION['compteur'];
    }else{
        $_SESSION['compteur']++;
    }
} else {
    $_SESSION['compteur'] = 1;
}
if(isset($_POST['supp'])) {
    session_destroy();
}
if($_POST['prenom'] == NULL || $_POST['nom'] == NULL) {
    echo "Merci de bien vouloir remplir les champs : Prénom et Nom ";
}
else {

    echo "<h3>Merci ".$_POST["prenom"]." ".$_POST['nom']." de votre visite</h3><br>";

    $texte = file_get_contents('database.txt');
    $texte .= "\n".$_SESSION['compteur'].";".$_POST['prenom'].";".$_POST['nom'].";". date("d/m/Y H:i:s");
    file_put_contents('database.txt', $texte);

    $file=file("database.txt");
    $length = count($file);
    $f=str_replace("\n"," ",$file);

    echo "<br><br>";

    echo "<table>";
    for ($k = 0; $k < $length; $k++) {
        echo "<tr>";
        for ($i = 0; $i<4; $i++) {
            $ligne_mots = explode(";", $f[$k]);
            echo "<td>".$ligne_mots[$i]. "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

?>
