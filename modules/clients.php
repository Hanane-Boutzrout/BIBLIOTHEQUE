<?php

include 'connection.php';

if (!empty($_POST['nom']) || !empty($_POST['prenom'])) {

	if (isset($_POST['ajouter'])) {

		if (isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['adresse']) AND isset($_POST['tel']) AND isset($_POST['date']) AND isset($_POST['cin']) AND isset($_POST['caution'])) {

			function randomPassword() {
				$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
				$pass = array(); //remember to declare $pass as an array
				$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
				for ($i = 0; $i < 8; $i++) {
					$n = rand(0, $alphaLength);
					$pass[] = $alphabet[$n];
				}
				return implode($pass); //turn the array into a string
			}

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$adresse = $_POST['adresse'];
	$tel = $_POST['tel'];
	$date = $_POST['date'];
	$cin = $_POST['cin'];
	$caution = $_POST['caution'];
	$username = $nom.'.'.$prenom.'-BIB';
	$password = randomPassword();
	$alert = '';

	switch ($caution) {
		case '20':
			$nb_emprunts = 1;
			break;			
		case '40':
			$nb_emprunts = 3;
			break;
		case '50':
		    $nb_emprunts = 5;
			break;
		case '100':
			$nb_emprunts = 10;
			break;			
		default:
			$nb_emprunts = 0;
			break;
	}

	$rep = "INSERT INTO client(username, password, nom, prenom, adresse, tel, date_naissance, cin, caution, nb_emprunts) VALUES('$username', '$password', '$nom', '$prenom', '$adresse', '$tel', '$date', '$cin', '$caution', '$nb_emprunts');";

	$rep = $connect->query($rep);

	if ($rep === false) {
		echo '<div class="alert alert-danger">
    <strong>ERREUR !</strong> Il y a quelque chose qui ne marche pas.</div>';
	}
	else {
		echo '<div class="alert alert-success">
    <strong>Merci de joindre notre Bibliothèque, voici votre identifiant:<br> Nom:</strong>'.' '.$username.'<br><strong>Mot de passe:</strong>'.' '.$password.'</div>';
	}
}
}

}

?>