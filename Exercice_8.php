<html>
<h1>TP_n°5_langage_PHP</h1>
<hr>
<h2>Exercice_8 </h2>
</html>

<?php

$cookies = ['cookie0' => "c0", 'cookie1' => "c1", 'cookie2' => "c2"];

foreach($cookies as $key => $valeur){
    setcookie($key, $valeur);
    echo "Nom du cookie : ".$key." <br>Valeur du cookie : ".$valeur."<br><br>";
}
?>
