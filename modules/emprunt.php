<?php
require_once 'connection.php';


if (isset($_POST['emprunter'])) {

	$req = "SELECT * FROM client WHERE username = :username";
			$sql = $connect->prepare($req);
			$sql->bindValue(':username', $_SESSION['username'], PDO::PARAM_STR);
			$sql->execute();
			$row = $sql->fetch();
			$nb_emprunts = $row['nb_emprunts'];
			$emprunts = $row['emprunts'];
			$client_id = $row['client_id'];
			$date_emp = date("Y-m-d");
			$delais_emp = date('Y-m-d', strtotime('+8 days'));

	$livres = "SELECT * FROM livre WHERE titre = :titre";
			$livres = $connect->prepare($livres);
			$livres->bindValue(':titre', $_POST['titre'] , PDO::PARAM_STR);
			$livres->execute();
			$livre = $livres->fetch();			
			$livre_id =	$livre['livre_id'];	

if ($nb_emprunts > $emprunts) {

	 $quey = "INSERT INTO emprunt(livre_id, client_id, date_emp, delais_emp) VALUES('$livre_id', '$client_id', '$date_emp', '$delais_emp');";
      $quey = $connect->query($quey);

      $req = "UPDATE client SET emprunts = $emprunts+1 WHERE client_id = $client_id";
      $req = $connect->query($req);


	
      $message = 'Merci d"avoir emprunter notre livre.\nVeuillez le rendre avant le $delais_emp .\nBonne lecture !';
      echo "<script type='text/javascript'>alert('$message');</script>";

     

}

else {
	$message = 'Vous avez depassé le nombre d"emprunts possible.\nVeuillez retourner un des livres.\nMERCI !';
	echo "<script type='text/javascript'>alert('$message');</script>";
}
}


?>