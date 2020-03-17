<html>
<h1>TP_n°5_langage_PHP</h1>
<hr>
<h2>Exercice_10 </h2>
</html>

<?php
$name = 'test-fic.txt';
$id_file1 = fopen('test-fic.txt', 'a+');
$content1 ="";

if ($id_file1){$nb_ligne1=0;}
echo "=> Fichier ".$name. " : <br><br>";
while (!feof($id_file1)){
    $content1=fgets($id_file1);
    $nb_ligne1++;
    echo $nb_ligne1." : ".$content1.'<br>';
}

fputs($id_file1, "\n");
fputs($id_file1, "Pierre Boislève");

echo "<br>";

fclose($id_file1);

$file = fopen("test-fic.txt","r");
if($file){$nb_ligne2=0;}
echo "=> Fichier ".$name. " après ajout du nom : <br><br>";
while(! feof($file)) {
    $line = fgets($file);
    $nb_ligne2++;
    echo $nb_ligne2." : ".$line."<br>";
}
fclose($file);

?>
