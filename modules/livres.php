<?php

include 'connection.php';

if (!empty($_POST['titre']) || !empty($_POST['auteur']) || !empty($_POST['edition']) || !empty($_POST['nb_copie'])) {

	if (isset($_POST['ajouter'])) {

		if (isset($_POST['titre']) AND isset($_POST['auteur']) AND isset($_POST['edition']) AND isset($_POST['type']) AND isset($_POST['img']) AND isset($_POST['nb_copie'])) {

	$titre = $_POST['titre'];
	$auteur = $_POST['auteur'];
	$edition = $_POST['edition'];
	$type = $_POST['type'];
	$img = $_POST['img'];
	$nb_copie = $_POST['nb_copie'];

	$rep = "INSERT INTO livre(titre, auteur, edition, type, img, nb_copies) VALUES('$titre', '$auteur', '$edition', '$type', '$img', '$nb_copie');";

	$rep = $connect->query($rep);

	/*if ($rep === false) {
		$alert = '<div class="alert alert-danger">
    <strong>Erreur!</strong>
  </div>';
	}
	else {
		$alert = '<div class="alert alert-success">
    <strong>Success!</strong>
  </div>';
	}*/
}
}

}

?>