<?php
require_once "admin.php";
require_once '../modules/connection.php';

$clients = "SELECT * FROM client WHERE username NOT LIKE 'admin';";

$clients = $connect->query($clients);
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
              <span class="fa fa-list"></span> &nbsp;
          Liste des Clients</div>
            </div>
        </div>
    </div>
    <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Adresse</th>
        <th>Num téléphone</th>
        <th>Date de naissance</th>
        <th>CIN</th>
        <th>Caution</th>
        
      </tr>
    </thead>
    <tbody>
    	<?php
    	if($clients->rowCount()) {
            foreach($clients->fetchAll() as $client){
               ?>
      <tr>
        <td><?php echo $client['client_id'] ?></td>
        <td><?php echo $client['nom'] ?></td>
        <td><?php echo $client['prenom'] ?></td>
        <td><?php echo $client['adresse'] ?></td>
        <td><?php echo $client['tel'] ?></td>
        <td><?php echo $client['date_naissance'] ?></td>
        <td><?php echo $client['cin'] ?></td>
        <td><?php echo $client['caution'] ?></td>
        
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