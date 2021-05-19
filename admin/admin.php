<?php

session_start();

if (isset($_SESSION['admin'])) {

?>
<!DOCTYPE html>
<html>
<head>
  <title>Biliothèque en ligne</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js" integrity="sha512-QEiC894KVkN9Tsoi6+mKf8HaCLJvyA6QIRzY5KrfINXYuP9NxdIkRQhGq3BZi0J4I7V5SidGM3XUQ5wFiMDuWg==" crossorigin="anonymous"></script>
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="#">
      <svg height="44" viewBox="0 0 58 58" width="44" xmlns="http://www.w3.org/2000/svg">
        <g id="Page-1" fill="none" fill-rule="evenodd"><g id="005---Domino-Books" fill-rule="nonzero"><rect id="Rectangle-path" fill="#805333" height="50" rx="2" transform="matrix(.985 .174 -.174 .985 6.102 -4.962)" width="15" x="23.911" y="7.394"/>
          <path id="Rectangle-path" d="m32.123 6.675h5v15h-5z" fill="#f29c1f" transform="matrix(.174 -.985 .985 .174 14.651 45.811)"/>
          <path id="Rectangle-path" d="m25.698 43.113h5v15h-5z" fill="#f29c1f" transform="matrix(.174 -.985 .985 .174 -26.543 69.594)"/>
          <rect id="Rectangle-path" fill="#a56a43" height="58" rx="2" width="15" x="43"/>
          <path id="Rectangle-path" d="m43 4h15v5h-15z" fill="#f0c419"/>
          <path id="Rectangle-path" d="m43 49h15v5h-15z" fill="#f0c419"/>
          <rect id="Rectangle-path" fill="#ecf0f1" height="30" rx="1" width="7" x="47" y="14"/>
          <path id="Shape" d="m25.18 23.35-.62 1.9-.62 1.9-8.34 25.67-.62 1.9-.62 1.91c-.1626954.5055255-.5197667.9255889-.9924898 1.1675781-.472723.2419892-1.0222804.2860333-1.5275102.1224219l-10.46-3.4c-1.04879708-.3430516-1.62158292-1.4707237-1.28-2.52l.62-1.91.62-1.9 8.33-25.68h.01l.61-1.9.62-1.9c.3430516-1.0487971 1.4707237-1.6215829 2.52-1.28l10.47 3.4c1.0487971.3430516 1.6215829 1.4707237 1.28 2.52z" fill="#603e26"/>
          <path id="Shape" d="m7.63 47.59c-.10491728-.000217-.20916272-.0167479-.309-.049-.52519989-.1706828-.81262083-.73478-.642-1.26l5.47-16.849c.0968478-.3558425.3816856-.6294992.7411192-.712027.3594337-.0825279.7351158.0394699.9774871.317426.2423712.2779561.3120871.6667494.1813937 1.011601l-5.468 16.851c-.13421213.4116142-.51805761.6901141-.951.69z" fill="#ecf0f1"/>
          <path id="Shape" d="m12.07 49.03c-.1049173-.000217-.2091627-.0167479-.309-.049-.5251999-.1706828-.8126208-.73478-.642-1.26l2.93-9.03c.0979856-.3547079.3828679-.6269388.7416581-.7087217s.7335067.0400986.9755312.3173044c.2420244.2772057.3122448.6649385.1828107 1.0094173l-2.93 9.029c-.1332832.4117049-.5162596.6909669-.949.692z" fill="#ecf0f1"/>
          <path id="Shape" d="m24.56 25.25-.62 1.9-14.26-4.64.61-1.9z" fill="#e57e25"/>
          <path id="Shape" d="m15.6 52.82-.62 1.9-14.26-4.63.62-1.9z" fill="#e57e25"/>
          <g fill="#ecf0f1">
            <path id="Shape" d="m36.6 24.154c-.0586513-.0000707-.1171922-.0050885-.175-.015l-6.894-1.216c-.5440005-.0960976-.9070975-.6149995-.811-1.159.0960976-.5440005.6149995-.9070975 1.159-.811l6.894 1.216c.5110218.0895216.8687147.55498.8236698 1.0718246-.0450448.5168446-.477866.9134069-.9966698.9131754z"/>
            <path id="Shape" d="m35.9 28.093c-.058318-.0001126-.1165231-.0051303-.174-.015l-6.894-1.216c-.3582785-.0552252-.6586138-.300022-.7849578-.6398021s-.0589093-.7213287.1762476-.9972173c.235157-.2758885.601207-.4029088.9567102-.3319806l6.893 1.215c.5110218.0895216.8687147.55498.8236698 1.0718246-.0450448.5168446-.477866.9134069-.9966698.9131754z"/>
          </g>
        </g>
      </g>
    </svg> &nbsp; &nbsp;
    Bibliothèque
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dashboard.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Graphiques">
          <a class="nav-link" href="dashboard.php #bandes">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Graphiques</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Livres">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-book"></i>
            <span class="nav-link-text">Livres</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="liste_livres.php">Livres en stock</a>
            </li>
            <li>
              <a href="ajout_livre.php">Ajouter un livre</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Clients">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-group"></i>
            <span class="nav-link-text">Clients</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="liste_clients.php">Liste de clients</a>
            </li>
            <li>
              <a href="ajout_client.php">Ajouter un client</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Emprunts">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-exchange"></i>
            <span class="nav-link-text">Emprunts</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="liste_emprunts.php">Liste d'emprunts</a>
            </li>
            <li>
              <a href="emprunt_ret.php">Emprunts en retard</a>
            </li>
             <li>
              <a href="return_livre.php">Retourner</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Achats">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAchats" data-parent="#exampleAccordion">
            <i class="fa fa-money"></i>
            <span class="nav-link-text">Achats</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseAchats">
            <li>
              <a href="liste_achats.php">Liste des achats</a>
            </li>
            <li>
              <a href="ajout_achat.php">Ajouter un achat</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Lien">
          <a class="nav-link" href="../">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Lien</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Notifications
              <span class="badge badge-pill badge-warning"></span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">Nouvelles notifications:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class=""></i></strong>
              </span>
              <span class="small float-right text-muted"></span>
              <div class="dropdown-message small"></div>
            </a>
            <div class="dropdown-divider"></div>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">Voir tout</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Chercher...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Se Déconnecter</a>
        </li>
      </ul>
    </div>
  </nav>
    
  <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Vous être sûr de vouloir quitter ?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Cliquez sur "Se déconnecter" si vous voulez vraiment terminer cette session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
            <a class="btn btn-primary" href="logout.php">Se déconnecter</a>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>
  <script type="text/javascript" src="script.js"></script>
</html>
<?php
}
else
{
  header("location:logout.php");
}
?>