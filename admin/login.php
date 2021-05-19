<?php

include "../modules/connection.php";

session_start();


if (isset($_POST["login"]))
{
	if (empty($_POST["uname"]) || empty($_POST["password"])) {

		$message = '<label>Tous les champs sont requis</label>';
	}
	else
	{
		$query = "SELECT * FROM client WHERE username = :username AND password = :password AND permission = 1";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				'username' => $_POST["uname"],
				'password' => $_POST["password"]
			)
		);

		$count = $statement->rowCount();

		if ($count > 0) {
			$_SESSION["admin"] = $_POST["uname"];
			header("location:./admin/dashboard.php");
		}
		else
		{
			$message = '<label>Nom d\'utilisateur ou mot de passe erroné</label>';
		}
	}
}