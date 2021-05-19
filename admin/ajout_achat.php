<?php

require_once 'admin.php';

require_once '../modules/achats.php';


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
<div class="container nv-liv">
  <div class="col-xl-7 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-money"></i>
              </div>
              <div class="mr-5">
              <span class="fa fa-plus"></span> &nbsp;
          Ajouter un nouveau Achat</div>
            </div>
        </div>
    </div>
</div>
  <form action="" method="POST" class="achat">
    <div class="form-inline ajout-achat">
      <label for="titre">Livre:</label> 
      <input type="text" class="form-control" id="titre" placeholder="Entrez le livre" name="livre">
    </div>
    <div class="form-inline ajout-achat">
      <label for="auteur">Client:</label>
      <input type="text" class="form-control" id="auteur" placeholder="Entrez l'e client" name="client">
    </div>
    <div class="form-inline ajout-achat">
      <label for="edition">Date d'achat:</label>
      <input type="date" class="form-control" id="edition" placeholder="Entrez la date d'achat" name="date">
    </div>
    <div class="form-inline ajout-achat">
      <label for="type">Prix:</label>
      <input type="text" class="form-control" id="type" placeholder="Entrez le prix" name="prix">
    </div>
    <div class="form-inline ajout-achat">
      <label for="type">Etat:</label>
      <input type="text" class="form-control" id="type" placeholder="Entrez l'état du livre" name="etat">
    </div>
    <input type="submit" name="ajouter" class="btn btn-success" value="Ajouter">
  </form>


</div>
</div>
</div>

</body>
<script type="text/javascript" src="script.js"></script>
</html>