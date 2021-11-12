<?php // Exemple 26-12 : logout.php
  // require_once 'header.php';
include('contacts/database.php');
destroy_session();
?>

  <?php include('header.php'); ?>
  <title>Déconnexion</title>



<div class="container" style="text-align:center;margin-top:40px">
<p>Vous êtes déconnecté.</p>
  <a href="index.php" class="btn btn-info">Retour accueil</a>
</div>

</body>
</html>
  <!-- if (isset($_SESSION['email']))
  {
      destroy_session();
    echo "<div class='main'>Vous êtes déconnecté. Cliquez " .
         "<a href='index.php'>ici</a> pour actualiser la page.";
  }
  else   {

  echo "<div class='main'><br>" .
            "Vous ne peuvez vous déconnecter car vous n'êtes pas 
            encore connecté";
  }
?> -->

    <br><br></div>
  </body>
</html>
