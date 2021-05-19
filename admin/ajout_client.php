<?php

require_once 'admin.php';

require_once '../modules/clients.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title>Bibliothèque en ligne</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">

<div class="content-wrapper">
    <div class="container-fluid">
<div class="container nv-cli">
  <div class="col-xl-7 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-user"></i>
              </div>
              <div class="mr-5">
              <span class="fa fa-plus"></span> &nbsp;
          Ajouter un nouveau client</div>
            </div>
        </div>
    </div>
</div>
  <form action="" method="POST" class="client">
    <div class="form-inline ajout-client">
      <label for="nom">Nom:</label> 
      <input type="text" class="form-control" id="nom" placeholder="Entrez le nom" name="nom">
    </div>
    <div class="form-inline ajout-client">
      <label for="prenom">Prénom:</label>
      <input type="text" class="form-control" id="prenom" placeholder="Entrez le prenom" name="prenom">
    </div>
    <div class="form-inline ajout-client">
      <label for="adresse">Adresse:</label>
      <input type="text" class="form-control" id="adresse" placeholder="Entrez l'adresse" name="adresse">
    </div>
    <div class="form-inline ajout-client">
      <label for="tel">Téléphone:</label>
      <input type="text" class="form-control" id="tel" placeholder="Entrez le numéro de téléphone" name="tel">
    </div>
    <div class="form-inline ajout-client">
      <label for="date">Date de naissance:</label>
      <input type="date" class="form-control-file border" id="date" placeholder="Entrez la date de naissance" name="date">
    </div>
    <div class="form-inline ajout-client">
      <label for="cin">CIN:</label>
      <input type="text" class="form-control-file border" id="cin" placeholder="Entrez CIN" name="cin">
    </div>
    <div class="form-inline ajout-client">
      <label for="caution">Caution:</label>
      <input type="text" class="form-control" id="caution" placeholder="Entrez la Caution" name="caution">
    </div>
    <input type="submit" name="ajouter" class="btn btn-primary" value="Ajouter">
    
  </form>

 
</div>
</div>
</div>

</body>
<script type="text/javascript" src="script.js"></script>
</html>