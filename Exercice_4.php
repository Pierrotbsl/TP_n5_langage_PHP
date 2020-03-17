<html>
    <h1>TP_n°5_langage_PHP</h1>
    <hr>
    <h2>Exercice_4</h2>

    <body>
    <?php
    if (isset ($_POST['calcul'])&&isset($_POST['nbr1'])&&isset($_POST['nbr2'])){
        switch ($_POST['calcul']){
            case 'Addition x+y':
                $resultat = $_POST['nbr1']+$_POST['nbr2'];
                break;
            case 'Soustraction x-y':
                $resultat = $_POST['nbr1']-$_POST['nbr2'];
                break;
            case 'Division x/y':
                $resultat = $_POST['nbr1']/$_POST['nbr2'];
                break;
            case 'Puissance x^y':
                $resultat = pow($_POST['nbr1'], $_POST['nbr2']);
                break;
        }
    }
    ?>
        <form method="post">
            Nombre 1  &nbsp;<input type="text" name="nbr1" value="<?php if (isset($_POST['nbr1'])){echo $_POST['nbr1'];} ?>"/><br><br>
            Nombre 2  &nbsp;<input type="tex" name="nbr2" value="<?php if (isset($_POST['nbr2'])){echo $_POST['nbr2'];} ?>"/><br><br>
            Résultat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="resultat" value="<?php if (isset($resultat)){echo $resultat;}else{echo "?";} ?>"/><br><br>

            <br><br>

            Cliquer sun un boutton :

            <br><br>

            <input type="submit" value="Addition x+y" name="calcul"/>&nbsp;
            <input type="submit" value="Soustraction x-y" name="calcul"/>&nbsp;
            <input type="submit" value="Division x/y" name="calcul"/>&nbsp;
            <input type="submit" value="Puissance x^y" name="calcul"/>&nbsp;

            <br><br>
        </form>


    </body>
</html>

