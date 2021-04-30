<?php

include_once("./src/head.inc.php");

?>
<body>
<?php

include_once("./src/header.inc.php");

?>
 
<main>
<?php
  if(isset($_POST["send"])){
    if(!empty($_POST["tablettes"]) && !empty($_POST["pc"]) && !empty($_POST["portable"])){
      if(preg_match('#[0-9][a-zA-Z ]#', $_POST["adresse"])){
        session_start();
        $_SESSION["tablettes"] = $_POST["tablettes"];
        $_SESSION["pc"] = $_POST["pc"];
        $_SESSION["portable"] = $_POST["portable"];
        $_SESSION["adresse"] = $_POST["adresse"];
        header("location:./src/validation_commande.php");
      }else{
        print "<p class=\"warning\">Votre adresse de livraison est manquante ou imcomplete</p>";
      }
    }else{
    print "<p class=\"warning\">Il vous faut commander au minimum 1 produit de chaques !</p>";
  }
  }

?>
  <form action="index.php" method="post">
    <table>
      <thead>
        <tr>
          <th>Produits</th>
          <th>Quantité</th>
        </tr>
      </thead>
      <tr>
        <td><label for="tablettes">Tablettes</label></td>
        <td><input type="number" min="1" max="10" name="tablettes" id="tablettes" placeholder="0" autofocus></td>
      </tr>
      <tr>
        <td><label for="pc">Pc</label></td>
        <td><input type="number" min="1" max="10" name="pc"  id="pc" placeholder="0"></td>
      </tr>
      <tr>
        <td><label for="portable">Portable</label></td>
        <td><input type="number" min="1" max="10" name="portable" id="portable" placeholder="0"></td>
      </tr>
      <tr>
        <td><label for="adresse">Adresse</label></td>
        <td><input type="text" name="adresse" id="adresse" placeholder="Adresse"></td>
      </tr>
      <tfoot>
        <tr>
          <td colspan=2><input type=submit name="send" value="Envoyer la commande"></td>
        </tr>
    </tfoot>
    </table>
  </form>  

</main>

</body>
</html>

