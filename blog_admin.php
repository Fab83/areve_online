<?php
require_once 'components/connexion.php';
include 'header.php';
?>
<div class="container mt-5">
	<form action="" method="post">
		<label for="email_connect">Votre email</label>
		<input type="text" name="email_connect">
		<label for="pwd_connect">Votre mot de passe</label>
		<input type="text" name="pwd_connect">
		<input type="submit" class="btn btn-orange">
	</form>
</div>
<?php
	connect_bd();
	$email=$_POST['email_connect'];
	$pwd=$_POST['pwd_connect'];
	$sql=$idconn->prepare("SELECT * FROM users WHERE email ='".$email."'");
	
	$sql->execute();
	$users=$sql->fetchAll();
	if (!($users['nbr']==0)) {
		echo "email déjà utilisé";
	} else {
		echo "email libre";
	}
?>
<?php
include 'components/footer.php';
?>