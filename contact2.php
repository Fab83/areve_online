<?php

if(isset($_POST['envoi'])) {
	$from      = $_POST['email'];
	$to      ='contact@areve83.fr';
	$subject = 'Contact';
	$prenom=htmlspecialchars($_POST['prenom']);
	$nom=htmlspecialchars($_POST['nom']);
	$CP=htmlspecialchars($_POST['CP']);
	// $occupant=$_POST['occupant'];
	// $logement=$_POST['logement'];
	$content = htmlspecialchars($_POST['message']);
	$tel = htmlspecialchars($_POST['tel']);
	$ville = $_POST['ville'];

	$message = "$prenom "."$nom"." a envoyé le message suivant : <br>"."$content";
	$message .="<br><br>Ville :"."$ville";
	$message .="<br>Téléphone :"."$tel";
	// $message .="<br><br>Statut occupant :"."$occupant";
	// $message .="<br>Type de logement :"."$logement";

	$headers = 'From: '.$from. "\r\n";
	$headers .= 'Reply-To: contact@areve83.fr' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$headers .= 'X-Mailer: PHP/'. phpversion();

	 mail($to, $subject, $message, $headers);
	 echo "Votre message a bien été envoyé. Nous reviendrons vers vous au plus vite.<br><a href=\"index.php\">Accueil</a>";
}
else {
	echo 'Erreur d\'envoi';
}
	?>
