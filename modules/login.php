<?php

include "./modules/connection.php";

session_start();


if (isset($_POST["login"]))
{
	if (empty($_POST["username"]) || empty($_POST["password"])) {

		$message = '<label>Tous les champs sont requis</label>';
	}
	else
	{
		$query = "SELECT * FROM client WHERE username = :username AND password = :password";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				'username' => $_POST["username"],
				'password' => $_POST["password"]
			)
		);

		$count = $statement->rowCount();
		if ($count > 0) {
			$_SESSION["username"] = $_POST["username"];
			
			header("location:modules/profile.php");
		}
		else
		{
			$message = '<label>Nom d\'utilisateur ou mot de passe erroné</label>';
		}
	}
}
