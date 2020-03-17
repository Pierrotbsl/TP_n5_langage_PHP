<html>
<h1>TP_n°5_langage_PHP</h1>
<hr>
<h2>Exercice_11 </h2>

<?php

$nom = 'contact.txt';
$file_1 = fopen('contact.txt', 'a+');
$line ="";

if ($file_1){$nb_line=0;}
echo "=> Fichier ".$nom. " : <br><br>";
while (!feof($file_1)){
    $line=fgets($file_1);
    $nb_line++;
    echo $nb_line." : ".$line.'<br>';
}
fclose($file_1);

$file=file("contact.txt");
$length = count($file);
$f=str_replace("\r"," ",$file);

echo "<br><br>";

    echo "<table>";
    for ($k = 0; $k < $length; $k++) {
        echo "<tr>";
        for ($i = 0; $i<3; $i++) {
                $ligne_mots = explode(";", $f[$k]);
                echo "<td>".$ligne_mots[$i]. "</td>";
            }
        echo "</tr>";
    }
    echo "</table>";
?>
