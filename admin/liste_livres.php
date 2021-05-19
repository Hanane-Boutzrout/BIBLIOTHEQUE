<?php
require_once "admin.php";
require_once '../modules/connection.php';

$livres = "SELECT * FROM livre;";

$livres = $connect->query($livres);
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
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-book"></i>
              </div>
              <div class="mr-5">
              <span class="fa fa-list"></span> &nbsp;
          Liste des Livres en stock</div>
            </div>
        </div>
    </div>
    <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>image</th>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Edition</th>
        <th>Type</th>
        <th>Nb_copies</th>
      </tr>
    </thead>
    <tbody>
    	<?php
    	if($livres->rowCount()) {
            foreach($livres->fetchAll() as $livre){
               ?>
      <tr>
        <td><?php echo $livre['livre_id'] ?></td>
        <td><img src="../img/<?php echo $livre['img'] ?>" width="50" height="50"></td>
        <td><?php echo $livre['titre'] ?></td>
        <td><?php echo $livre['auteur'] ?></td>
        <td><?php echo $livre['edition'] ?></td>
        <td><?php echo $livre['type'] ?></td>
        <td><?php echo $livre['nb_copies'] ?></td>
      </tr>
      <?php
  }
}
  ?>
    </tbody>
  </table>
  </div>
</div>
</div>
</div>


</body>
</html>