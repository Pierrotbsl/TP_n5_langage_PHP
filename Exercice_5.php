<html>
    <h1>TP_n°5_langage_PHP</h1>
    <hr>
    <h2>Exercice_5</h2>
    <body>
    <form method="post" name="formulaire" enctype="multipart/form-data">
        Fichier 1 &nbsp;<input type="file" name="fichier_1" /><br>
        Fichier 2 &nbsp;<input type="file" name="fichier_2" /><br>
        <input type="submit" class="btn" value="Envoi" /><br>
    </form>

    </body>
</html>

<?php

move_uploaded_file($_FILES["fichier_1"]["tmp_name"],"fichier1.svg");
move_uploaded_file($_FILES["fichier_2"]["tmp_name"],"fichier2.svg");

echo "<table>
          <head>
            <td>&nbsp;</td>
            <td>Fichier 1</td>
            <td>Fichier 2</td>
            
          </head>
          <tr>
            <td>Name</td>
            <td>" . $_FILES['fichier_1']["name"] ."</td>
            <td>" . $_FILES['fichier_2']["name"] ."</td>
   
          </tr>
          <tr>
            <td>Type</td>
            <td>" . $_FILES['fichier_1']["type"] ."</td>
            <td>" . $_FILES['fichier_2']["type"] ."</td>
        
          </tr>
          <tr>
            <td>tmp_name</td>
            <td>" . $_FILES['fichier_1']["tmp_name"] ."</td>
            <td>" . $_FILES['fichier_2']["tmp_name"] ."</td>
     
          </tr>
          <tr>
            <td>Errors</td>
            <td>" . $_FILES['fichier_1']["error"] ."</td>
            <td>" . $_FILES['fichier_2']["error"] ."</td>
          </tr>
          <tr>
            <td>size</td>
            <td>" . $_FILES['fichier_1']["size"] ."</td>
            <td>" . $_FILES['fichier_2']["size"] . "</td>
          </tr>
           <tr>
            <td>Image</td>
            <td><img src='fichier1.svg' width='25%'/></td>
            <td><img src='fichier2.svg' width='25%'/></td>
          </tr>
       </table>";


?>
