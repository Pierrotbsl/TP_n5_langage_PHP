<html>
<h1>TP_n°5_langage_PHP</h1>
<hr>
<h2>Exercice_7 </h2>
Click droit >> Cookies.
</html>
<?php

setcookie('cookie0', 'test0' );
setcookie('cookie1', 'test1', time() + 365 * 24 * 3600);

unset($_COOKIE['cookie0']);
setcookie('cookie1');

?>



