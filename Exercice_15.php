<?php session_start(); ?>
    <html>
        <h1>TP_n°5_langage_PHP</h1>
        <hr>
        <h2>Exercice_15 </h2>

        <h4>Sasissez les tâches</h4>

        <form method="post">
            Tâche :    <input type="text" name="tache" <?php if (isset($_POST["tache"])){echo $_POST["tache"];} ?>/><br>

            <br><br>

            <input type="submit" value="Enregistrer" />&nbsp;<input type="reset" value="Effacer" />

            <br><br>
            ______________
            <br><br>
            <input type="submit" value="Supprimer la session" name="supp"/>
            <br>
            ______________

            <br><br>

        </form>
    </html>

<?php

if(isset($_POST['supp'])) {
    session_destroy();
}

if( isset($_SESSION['compteur']) ) {
    if($_POST['tache'] == NULL) {
        $_SESSION['compteur'];
    }else{
        $_SESSION['compteur']++;
    }
} else {
    $_SESSION['compteur'] = 1;
}
if($_POST['tache'] == NULL) {
    echo "Merci de bien vouloir saisir une tâche ";
}
else {

    if (isset($_SESSION['taches'])) {
        array_push($_SESSION['taches'], $_SESSION['compteur'], $_POST['tache'], $_POST['fait']);
    } else {
        $_SESSION['taches'] = array();
        array_push($_SESSION['taches'], $_SESSION['compteur'], $_POST['tache'], $_POST['fait']);
    }
    echo "<br>";
    $length = count($_SESSION['taches']);
    $length2 = $length / 3;

    var_dump($_SESSION['taches']);

    echo "<br><br>";
    echo "<table>";

    echo "<tr><td>N°  |</td><td> Tâche </td><td>| État </td></tr>";

    $j=0;
    $_SESSION['taches'][$j+2]='checked';
    $t=0;

    for ($j = 0; $j < $length; $j+=3) {
        echo "<tr>";
        echo "<td>" . $_SESSION['taches'][$j] . "</td>";
        if ($_SESSION['taches'][$j + 2] == 'checked') {
            echo "<td><strike>" . $_SESSION['taches'][$j + 1] . "</strike></td>";
            echo "<td>" . $_SESSION['taches'][$j + 2] . "<input type='checkbox' name='fait' value=$t checked></td>";
            $t++;
        } else {
            echo "<td>" . $_SESSION['taches'][$j + 1] . "</td>";
            echo "<td>" . $_SESSION['taches'][$j + 2] . "<input type='checkbox' name='fait'  value=$t></td>";
            $t++;
        }
        echo "</tr>";
    }
    echo "</table>";
?>
   <input type='submit' name='Actualiser' value='Actualiser' />

 <?php
    if (isset($_POST['Actualiser'])) {

        echo "test";

        for ($m=0;$m<$length2;$m++){
            if ($_POST['fait']==$m){
                $_SESSION['taches'][$m]="checked";
            }
        }
        for ($k = 0; $k < $length; $k+=3) {
            echo "<tr>";
            echo "<td>" . $_SESSION['taches'][$k] . "</td>";
            if ($_SESSION['taches'][$k + 2] == 'checked') {
                echo "<td><strike>" . $_SESSION['taches'][$k + 1] . "</strike></td>";
                echo "<td>" . $_SESSION['taches'][$k + 2] . "<input type='checkbox' name='fait' ></td>";
            } else {
                echo "<td>" . $_SESSION['taches'][$k + 1] . "</td>";
                echo "<td>" . $_SESSION['taches'][$k + 2] . "<input type='checkbox' name='fait' ></td>";
            }
            echo "</tr>";
        }
    }
}
?>