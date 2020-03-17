<html>
<h1>TP_n°5_langage_PHP</h1>
<hr>
<h2>Exercice_1</h2>
______________
<h2>Partie 1</h2>
<?php

echo "<a href=\"Exercice_1.php?degre1=80\">Cliquer pour avoir la valeur en degré<br></a>" ;
echo "Degré Fahrenheit : ".$_GET['degre1']. "<br>";

$t=(($_GET['degre1']-32)*5/9);

echo "Degré Celsius : ".$t. "<br><br>";
?>

<hr>
<h2>Partie 2</h2>

<br>
<body>
    <form method="post">
        Valeur en Fahrenheit : <input type="number" name="degre2" />
        <input type="submit" value="Convertir" />
    </form>
</body>

<?php

if($_POST['degre2'] == NULL) {

}
else {
    echo "Degré Fahrenheit : " . $_POST['degre2'] . "<br>";

    $t = (($_POST['degre2'] - 32) * 5 / 9);

    echo "Degré Celscius : " . $t . "<br>";
}

?>


