<?php session_start(); ?>

    <html>
    <h1>TP_n°5_langage_PHP</h1>
    <hr>
    <h2>Exercice_15 </h2>

    <h4>Sasissez les tâches</h4>

    <form method="post">
        Tâche :    <input type="text" name="tache"/><br>

        <br><br>

        <input type="submit" value="Enregistrer" />&nbsp;<input type="reset" value="Effacer" />

        <br><br>
        ______________
        <br><br>
        <input type="submit" value="Supprimer la session" name="supp"/>
        <br>
        ______________

        <br><br>

        <input type='submit' name='Actualiser' value='Actualiser' />

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

    if (isset($_SESSION['tache'])) {
        array_push($_SESSION['tache'], $_SESSION['compteur'], $_POST['tache'], $_POST['fait']);
    } else {
        $_SESSION['tache'] = array();
        array_push($_SESSION['tache'], $_SESSION['compteur'], $_POST['tache'], $_POST['fait']);
    }
    echo "<br>";
    $length = count($_SESSION['tache']);
    $f = str_replace("\n", " ", $file);
    $length2 = $length / 3;
    $t = 0;
    var_dump($_SESSION['tache']);

    echo "<br><br>";

    echo "<table>";

    echo "<tr><td>N°  |</td><td> Tâche </td><td>| État </td></tr>";

    for ($k = 0; $k < $length2; $k++) {
        echo "<tr>";
        echo "<td>" . $_SESSION['tache'][$t] . "</td>";

        $w = $_SESSION['tache'][$t + 2];


        if ($_SESSION['tache'][$t + 2] == checked) {
            echo "<td><strike>" . $_SESSION['tache'][$t + 1] . "</strike></td>";
            echo "<td>" . $_SESSION['tache'][$t + 2] . "<input type='checkbox' name='fait[]' value='checked' $w></td>";
        } else if ($_SESSION['tache'][$t + 2] == null) {
            echo "<td>" . $_SESSION['tache'][$t + 1] . "</td>";
            echo "<td>" . $_SESSION['tache'][$t + 2] . "<input type='checkbox' name='fait[]' value='' ></td>";

        }
        if ($t + 3 != $length) {
            $t = $t + 3;
        }
        echo "</tr>";
    }

    /*$t=0;

    for ($k = 0; $k < $length; $k++) {
        echo "<tr>";
        $_SESSION['tache'] = explode(";", $f[$k]);
            echo "<td>".$ligne_mots[$t]. "</td>";
            $w=$ligne_mots[$t+2];
            if ($ligne_mots[$t+2]=checked) {
                echo "<td><strike>".$ligne_mots[$t+1]. "</strike></td>";
                echo "<td>" . $ligne_mots[$t + 2] . "<input type='checkbox' name='fait' value=$k $w></td>";
            }else{
                echo "<td>".$ligne_mots[$t+1]. "</td>";
                echo "<td>" . $ligne_mots[$t + 2] . "<input type='checkbox' name='fait' value=$k ></td>";

            }
        }
     if ($t+3!=$length) {
            $t = $t + 3;
        }
        echo "</tr>";

    }*/
    foreach($_POST['fait'] as $value) {
        echo $value;
    }
    echo "</table>";


    if (isset($_POST['Actualiser'])) {
        for ($m=2;$m<$length;$m+=3){
            if ($_POST['fait'][$m]=='checked'){
                $_SESSION['tache'][$m]="checked";
            }
        }
        header('Location: Exercice_15.php');
    }
}
?>