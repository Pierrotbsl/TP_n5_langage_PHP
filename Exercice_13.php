<?php session_start(); ?>

<html>
<h1>TP_n°5_langage_PHP</h1>
<hr>
<h2>Exercice_13</h2>

<h4>Choisir votre délégué </h4>

<form method="post">
    Étudiant 1 : <input type="radio" name="delegue" value="1" <?php if (isset($_POST["delegue"])){if ($_POST["delegue"] == "1"){echo checked;}} ?>/><br>
    Étudiant 2 : <input type="radio" name="delegue" value="2" <?php if (isset($_POST["delegue"])){if ($_POST["delegue"] == "2"){echo checked;}} ?>/><br>
    Étudiant 3 : <input type="radio" name="delegue" value="3" <?php if (isset($_POST["delegue"])){if ($_POST["delegue"] == "3"){echo checked;}} ?>/><br>
    <br>

    <input type="submit" value="Voter" />
    <input type="submit" value="Afficher les résultats" name="affichage"/>

    <br><br>
    ______________
    <br><br>
    <input type="submit" value="Supprimer la session" name="supp"/>
    <br>
    ______________
</form>

<?php

if(isset($_POST['supp'])) {
    session_destroy();
}

$tab1=0;
$tab2=0;
$tab3=0;

if($_POST['delegue'] == "1" || $_POST['delegue'] == "2" || $_POST['delegue'] == "3" ) {

    $n = file_get_contents('delegue.txt');
    $n .= $_POST['delegue'] . "\n";
    file_put_contents('delegue.txt', $n);

    $file = file("delegue.txt");
    $length = count($file);

    for ($i = 0; $i < $length; $i++) {
        if ($file[$i] == 1) {
            $tab1++;
        } elseif ($file[$i] == 2) {
            $tab2++;
        } else if ($file[$i] == 3) {
            $tab3++;
        }
    }

    if (isset($_POST['affichage'])) {

        $m1 = ($tab1 / $length) * 100;
        $m2 = ($tab2 / $length) * 100;
        $m3 = ($tab3 / $length) * 100;

        echo "<h4>Résultat des votes : </h4>";

        echo "L'étudiant 1 a " . $tab1 . " voix soit " . number_format($m1, 2, ',', ' ') . " %<br>";
        echo "L'étudiant 2 a " . $tab2 . " voix soit " . number_format($m2, 2, ',', ' ') . " %<br>";
        echo "L'étudiant 3 a " . $tab3 . " voix soit " . number_format($m3, 2, ',', ' ') . " %<br>";

        $max = max($m1, $m2, $m3);

        if ($max == $m1)
            echo "<h4>==== Le nouveau délégué de classe est l'étudiant 1 ====</h4>";
        if ($max == $m2)
            echo "<h4>==== Le nouveau délégué de classe est l'étudiant 2 ====</h4>";
        if ($max == $m3)
            echo "<h4>==== Le nouveau délégué de classe est l'étudiant 3 ====</h4>";
    }
}
else {
    echo "Merci de bien vouloir selectionner un Étudiant";
}
?>
