<?php

include 'connection.php';

if (!empty($_POST['livre']) || !empty($_POST['client'])) {

	if (isset($_POST['retourner'])) {

		if (isset($_POST['livre']) AND isset($_POST['client'])) {

		$livre = $_POST['livre'];
		$client = $_POST['client'];


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
			

	$rep = "UPDATE client SET emprunts = emprunts-1 WHERE client_id = $client_id";
	$rep = $connect->query($rep);

	$req = "UPDATE emprunt SET date_rendue = CURDATE() WHERE livre_id = $livre_id AND client_id = $client_id";
	$req = $connect->query($req);
	
	}
}
}
?>