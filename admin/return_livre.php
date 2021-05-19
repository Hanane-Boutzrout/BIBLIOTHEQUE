<?php

require_once 'admin.php';

require_once '../modules/return.php';

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
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-list"></i>
              </div>
              <div class="mr-5">
              <span class="fa fa-plus"></span> &nbsp;
          Retourner un livre</div>
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
    <input type="submit" name="retourner" class="btn btn-warning" value="Retourner">
  </form>


</div>
</div>
</div>

</body>
<script type="text/javascript" src="script.js"></script>
</html>