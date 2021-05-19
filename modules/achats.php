<?php

include 'connection.php';

if (!empty($_POST['livre']) || !empty($_POST['client']) || !empty($_POST['date']) || !empty($_POST['prix']) || !empty($_POST['etat'])) {

	if (isset($_POST['ajouter'])) {

		if (isset($_POST['livre']) AND isset($_POST['client']) AND isset($_POST['date']) AND isset($_POST['prix']) AND isset($_POST['etat'])) {

	$livre = $_POST['livre'];
	$client = $_POST['client'];
	$date = $_POST['date'];
	$prix = $_POST['prix'];
	$etat = $_POST['etat'];

	$livres = "SELECT * FROM livre WHERE titre = :titre";
			$livres = $connect->prepare($livres);
			$livres->bindValue(':titre', $livre , PDO::PARAM_STR);
			$livres->execute();
			$livre = $livres->fetch();			
			$livre_id =	$livre['livre_id'];

    $clients = "SELECT * FROM client WHERE username = :username";
			$clients = $connect->prepare($clients);
			$clients->bindValue(':username', $client , PDO::PARAM_STR);
			$clients->execute();
			$client = $clients->fetch();			
			$client_id = $client['client_id'];

	$rep = "INSERT INTO achat(livre_id, client_id, date_achat, prix, etat) VALUES('$livre_id', '$client_id', '$date', '$prix', '$etat');";
	$req = "UPDATE livre SET nb_copies = nb_copies-1 WHERE livre_id = $livre_id;";

	$rep = $connect->query($rep);
	$req = $connect->query($req);
}
}
}

?>