<?php
require_once "admin.php";
require_once '../modules/connection.php';

$achats = "SELECT * FROM achat;";

$achats = $connect->query($achats);
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
<div class="container nv-achat">
  <div class="col-xl-7 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-money"></i>
              </div>
              <div class="mr-5">
              <span class="fa fa-list"></span> &nbsp;
          Liste des Achats</div>
            </div>
        </div>
    </div>
    <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>#Livre</th>
        <th>Livre</th>
        <th>Client</th>
        <th>Date d'achat</th>
        <th>Prix</th>
        <th>Etat du livre</th>
      </tr>
    </thead>
    <tbody>
    	<?php
    	if($achats->rowCount()) {
            foreach($achats->fetchAll() as $achat){

              $livres = "SELECT * FROM livre WHERE livre_id = :id";
      $livres = $connect->prepare($livres);
      $livres->bindValue(':id', $achat['livre_id'] , PDO::PARAM_STR);
      $livres->execute();
      $livre = $livres->fetch();      
      $titre = $livre['titre'];

    $clients = "SELECT * FROM client WHERE client_id = :id";
      $clients = $connect->prepare($clients);
      $clients->bindValue(':id', $achat['client_id'] , PDO::PARAM_STR);
      $clients->execute();
      $client = $clients->fetch();      
      $username = $client['username'];
               ?>
      <tr>
        <td><?php echo $achat['achat_id'] ?></td>
        <td><?php echo $achat['livre_id'] ?></td>
        <td><?php echo $titre ?></td>
        <td><?php echo $username ?></td>
        <td><?php echo $achat['date_achat'] ?></td>
        <td><?php echo $achat['prix'] ?> DHS</td>
        <td><?php echo $achat['etat'] ?></td>
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