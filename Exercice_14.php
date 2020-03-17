<?php session_start(); ?>
<html>
<h1>TP_n°5_langage_PHP</h1>
<hr>
<h2>Exercice_14 </h2>

<form method="post">
    Nom :    <input type="text" name="nom"/><br>
    Prénom : <input type="text" name="prenom"/><br>
    Note :   <input type="number" name="note"/>

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

if ($_POST['prenom'] == NULL || $_POST['nom'] == NULL || $_POST['note'] == NULL) {
        echo "Merci de bien vouloir remplir les champs : Prénom, Nom et Note ";
} else if ($_POST['prenom']!=NULL) {
    if(isset($_SESSION['classe'] )) {
        array_push($_SESSION['classe'], $_SESSION['compteur'],$_POST['prenom'], $_POST['nom'], $_POST['note']);
    } else {
        $_SESSION['classe'] = array();
        array_push($_SESSION['classe'], $_SESSION['compteur'], $_POST['prenom'], $_POST['nom'], $_POST['note']);
    }
    echo "<br>";
    $length = count($_SESSION['classe']);
    $length2 = count($_SESSION['classe']) / 4;
    $t = 0;

    echo "<table>";

    echo "<tr><td>N° |</td><td> Prénom </td><td>| Nom </td><td>| Note </td></tr>";

    for ($k = 0; $k < $length2; $k++) {
        echo "<tr>";
        for ($i = $t; $i < $t+3; $i++) {
            echo "<td>" . $_SESSION['classe'][$i] . "</td>";

        }
        if ($_SESSION['classe'][$t+3] >= 10) {
            echo "<style> .note1 {background-color: green;}</style>";
            echo "<td class='note1'>" . $_SESSION['classe'][$t+3] . "</td>";

        } else if ($_SESSION['classe'][$t+3] < 10) {
            echo "<style> .note2 {background-color: red;} </style>";
            echo "<td class='note2'>" . $_SESSION['classe'][$t+3] . "</td>";
        }
        if ($t+4!=$length) {
            $t = $t + 4;
        }
        echo "</tr>";
    }
    $moyenne=0;
    $notes=0;
    $admis=0;
    for ($j=3; $j<=$length; $j+=4){
        $notes+=$_SESSION['classe'][$j];
    }
    $moyenne=$notes/$length2;
    for ($j=3; $j<=$length; $j+=4){
        if ($_SESSION['classe'][$j]>=10){
            $admis+=1;
        }else{
            $admis;
        }
    }

    echo "<tr><td>Moyenne</td> <td></td> <td></td> <td>".number_format($moyenne, 0, ',', ' ')."</td> </td>";
    echo "<tr><td>Admis</td> <td></td> <td></td> <td>".$admis."/".$length2."</td> </td>";

    echo "</table>";
}
?>
