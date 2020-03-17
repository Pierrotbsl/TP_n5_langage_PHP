<html>
<h1>TP_n°5_langage_PHP</h1>
<hr>
<h2>Exercice_9 </h2>
</html>

<?php
session_start();
echo session_id();

$_SESSION['session'] = array('Anonymous',"anonymou@mail.com", date("d-m-Y H:i:s"), "/amazon.fr");

echo "<br><br><a href=\"page_2.php\">Découvrez vos informations</a>";

?>

