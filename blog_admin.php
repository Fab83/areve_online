<?php
require 'components/connexion.php';
include 'header.php';
?>
<div class="container mt-5">
	<form action="verif_user.php" method="post">
		<label for="email_connect">Votre email</label>
		<input type="text" name="email_connect">
		<label for="pwd_connect">Votre mot de passe</label>
		<input type="text" name="pwd_connect">
		<input type="submit" class="btn btn-orange">
	</form>
</div>
<?php
include 'components/footer.php';
?>