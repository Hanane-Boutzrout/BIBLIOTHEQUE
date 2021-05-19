<?php
require_once "admin.php";
require_once '../modules/connection.php';

$emprunts = "SELECT * FROM emprunt ORDER BY date_emp DESC ;";

$emprunts = $connect->query($emprunts);
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
              <span class="fa fa-list"></span> &nbsp;
          Liste des emprunts</div>
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
        <th>Date emprunt</th>
        <th>Délais</th>
        <th>Date rendue</th>
      </tr>
    </thead>
    <tbody>
    	<?php
    	if($emprunts->rowCount()) {
            foreach($emprunts->fetchAll() as $emprunt){
              $req = "SELECT * FROM client WHERE client_id = :id";
              $sql = $connect->prepare($req);
              $sql->bindValue(':id', $emprunt['client_id'], PDO::PARAM_STR);
              $sql->execute();
              $row = $sql->fetch();
              $nom = $row['nom'].' '.$row['prenom'];

              $req = "SELECT * FROM livre WHERE livre_id = :id";
              $sql = $connect->prepare($req);
              $sql->bindValue(':id', $emprunt['livre_id'], PDO::PARAM_STR);
              $sql->execute();
              $row = $sql->fetch();
              $titre = $row['titre'];

               ?>
      <tr>
        <td><?php echo $emprunt['emprunt_id'] ?></td>
        <td><?php echo $emprunt['livre_id'] ?></td>
        <td><?php echo $titre ?></td>
        <td><?php echo $nom ?></td>
        <td><?php echo $emprunt['date_emp'] ?></td>
        <td><?php echo $emprunt['delais_emp'] ?></td>
        <td><?php echo $emprunt['date_rendue'] ?></td>
        
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