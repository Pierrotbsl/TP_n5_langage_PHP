<html>
<h1>TP_n°5_langage_PHP</h1>
<hr>
<h2>Exercice_9 </h2>
</html>
<?php
session_start();

echo "Bonjour ".$_SESSION['session'][0]."<br><br>";
echo "Ta première connexion était ".$_SESSION['session'][2]."<br>";
echo "<br><a href=".$_SESSION['session'][3].">Cliquer pour ouvrir votre site préféré</a><br>";

