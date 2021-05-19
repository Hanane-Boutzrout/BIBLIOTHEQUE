<?php
include "modules/login.php";

if (isset($_SESSION['username'])) {
	header("location:modules/profile.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Bibliothèque en ligne</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
		<a class="navbar-brand" href="../">
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
		</svg>
		</a>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="#">Livres</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Collection</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Auteurs</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#about">A propos</a>
			</li>
		</ul>
		<form class="form-inline" action="<?php echo $_SERVER["PHP_SELF"];?>">
			<input class="form-control mr-sm-2" type="text" placeholder="Chercher">
			<button class="btn btn-success" type="submit">Chercher</button>
		</form>
	</nav>

	<div class="connection">
		<div class="icon">
			<svg height="58" viewBox="0 0 58 58" width="58" xmlns="http://www.w3.org/2000/svg"><g id="Page-1" fill="none" fill-rule="evenodd"><g id="006---Reading" fill-rule="nonzero"><path id="Shape" d="m11.52 19.29h-.01c-.3563277-1.8078843-.5272131-3.6474152-.51-5.49 0-8.28 9-11.04 18-11.04 8.1 0 7.2-2.76 7.2-2.76s10.8 4.6 10.8 13.8c.019673 1.8431719-.1546196 3.6832994-.52 5.49z" fill="#a56a43"/><path id="Shape" d="m37.017 44.973c-2.146-1.433-2.745-4.262-2.937-5.843h-10.16c-.18 1.488-.722 4.082-2.576 5.577l7.656 6.293z" fill="#f9c795"/><path id="Shape" d="m43.78 27h1.22c1.9126354-.007278 3.5524929-1.367549 3.9130592-3.2459043.3605663-1.8783554-.6590632-3.7491375-2.4330592-4.4640957-.4695117-.1928882-.9724125-.2914296-1.48-.29h-32c-.5075875-.0014296-1.0104883.0971118-1.48.29-1.77399598.7149582-2.79362547 2.5857403-2.43305919 4.4640957.36056627 1.8783553 2.00042379 3.2386263 3.91305919 3.2459043z" fill="#f9c795"/><path id="Shape" d="m23.587 39.016c3.4894242 1.3119545 7.3365758 1.3119545 10.826 0 .9575034-.3491355 1.8866015-.7717263 2.779-1.264 5.224-3.016 7.208-9.585 6.7-15.08-.029-.315-.2-3.047-.391-5.011-.1148805-1.1333859-1.0286396-2.0197111-2.165-2.1-3.013-.221-8.97-1.064-11.719-4.274-.1519922-.1826974-.3773449-.2883605-.615-.2883605s-.4630078.1056631-.615.2883605c-2.749 3.21-8.706 4.053-11.719 4.274-1.1363604.0802889-2.0501195.9666141-2.165 2.1-.194 1.964-.362 4.7-.391 5.011-.51 5.5 1.474 12.064 6.7 15.08.8911094.4920867 1.8188635.9146745 2.775 1.264z" fill="#fdd7ad"/><path id="Shape" d="m28.827 54.928c.419-6.795.59-9.361-5.827-11.928-.07-.03-.13-.05-.2-.08-4.228-1.696-12.962-5.32-15.85-6.52-.25017499-.1020221-.5309864-.0984732-.77850313.0098389-.24751673.1083122-.44067412.3121696-.53549687.5651611l-2.156 5.745z" fill="#f9eab0"/><path id="Shape" d="m29.176 54.989c-.42-6.84-.612-9.415 5.824-11.989.07-.03.13-.05.2-.08 4.228-1.7 12.962-5.323 15.85-6.525.250175-.1020221.5309864-.0984732.7785031.0098389.2475168.1083122.4406741.3121696.5354969.5651611l2.156 5.75z" fill="#f5efca"/><path id="Shape" d="m21.49 54.29c-4.76 2.71-8.63 2.71-12.49 2.71v-9z" fill="#f9c795"/><path id="Shape" d="m36.51 54.29c4.76 2.71 8.63 2.71 12.49 2.71v-8z" fill="#f9c795"/><circle id="Oval" cx="23" cy="25" fill="#ecf0f1" r="3"/><path id="Shape" d="m38 25c0 1.6568542-1.3431458 3-3 3s-3-1.3431458-3-3c-.0019916-.2153476.0215051-.4301744.07-.64.3287112-1.4949115 1.7301238-2.5026506 3.2519111-2.3384105s2.675911 1.4477875 2.6780889 2.9784105z" fill="#ecf0f1"/><path id="Shape" d="m29 36c-1.35546.0583036-2.6818413-.4043376-3.707-1.293-.3573625-.3924894-.3458038-.9958028.02633-1.374316.3721338-.3785133.9751636-.4003241 1.37367-.049684.658334.5075391 1.4769529.7619604 2.307.717.8278281.0431581 1.6437452-.21155 2.3-.718.3989756-.3752273 1.0248131-.3623371 1.408.029.3832686.3889397.3805882 1.0143597-.006 1.4-1.0244863.886009-2.348779 1.3471148-3.702 1.289z" fill="#802d40"/><path id="Shape" d="m30 31h-2c-.5522847 0-1-.4477153-1-1s.4477153-1 1-1h2c.5522847 0 1 .4477153 1 1s-.4477153 1-1 1z" fill="#f9c795"/><path id="Shape" d="m19 22c-.3464401-.000185-.6681037-.1796678-.8501945-.4743943-.1820909-.2947265-.1986643-.6627032-.0438055-.9726057 1.261-2.524 4.747-2.553 4.894-2.553.5522847 0 1 .4477153 1 1s-.4477153 1-1 1c-.046 0-2.416.062-3.108 1.447-.1689407.3380862-.5140551.5520417-.892.553z" fill="#a56a43"/><path id="Shape" d="m39 22c-.3808256.0020788-.7297741-.2123306-.9-.553-.7-1.407-3.077-1.447-3.1-1.447-.5522847 0-1-.4477153-1-1s.4477153-1 1-1c.147 0 3.633.029 4.9 2.553.1553431.3108588.1381628.6800764-.0453763.9751664-.183539.2950901-.5071168.4737357-.8546237.4718336z" fill="#a56a43"/><circle id="Oval" cx="23.5" cy="25.75" fill="#3f5c6c" r="1.75"/><circle id="Oval" cx="34.5" cy="25.75" fill="#3f5c6c" r="1.75"/><path id="Shape" d="m25 29h-4c-.5522847 0-1-.4477153-1-1s.4477153-1 1-1h4c.5522847 0 1 .4477153 1 1s-.4477153 1-1 1z" fill="#f9c795"/><path id="Shape" d="m37 29h-4c-.5522847 0-1-.4477153-1-1s.4477153-1 1-1h4c.5522847 0 1 .4477153 1 1s-.4477153 1-1 1z" fill="#f9c795"/><circle id="Oval" cx="22" cy="25" fill="#ecf0f1" r="1"/><circle id="Oval" cx="33" cy="25" fill="#ecf0f1" r="1"/><path id="Shape" d="m4.81 47.98-4.17-1.58c-.26352755-.1035433-.47122063-.3133455-.57209612-.5779058-.10087549-.2645602-.08559297-.5593819.04209612-.8120942l1.09-2.19c.2292612-.4654983.77648151-.6783062 1.26-.49l1.02.39 21.52 8.28h8l21.52-8.28 1.02-.39c.4835185-.1883062 1.0307388.0245017 1.26.49l1.09 2.19c.1276891.2527123.1429716.547534.0420961.8120942-.1008755.2645603-.3085686.4743625-.5720961.5779058l-4.17 1.58-8.53 3.23-8.15 3.08-3.17 1.2h-8.68l-3.17-1.2-8.15-3.08z" fill="#a56a43"/><path id="Shape" d="m30.459 58h-2.918c-1.853 0-3.264-1.942-2.959-4.075l.418-2.925h8l.418 2.925c.305 2.133-1.106 4.075-2.959 4.075z" fill="#805333"/><g fill="#fdd7ad"><path id="Shape" d="m4.93149793 48.6328622h5.99999997c1.1045695 0 2 .8954305 2 2v2c0 2.209139-1.790861 4-3.99999997 4h-2c-2.209139 0-4-1.790861-4-4v-2c0-1.1045695.8954305-2 2-2z" transform="matrix(.93 .366 -.366 .93 19.836 .754)"/><path id="Shape" d="m49.0691414 48.6323653h2c2.209139 0 4 1.790861 4 4v2c0 1.1045694-.8954305 2-2 2h-6c-1.1045695 0-2-.8954306-2-2v-2c0-2.209139 1.790861-4 4-4z" transform="matrix(-.93 .366 -.366 -.93 115.941 83.259)"/></g></g></g></svg>
		</div>
		<h3>Se connecter</h3> 

		<div class="container" style="width:500px;">  
                <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>  
	<form action="" class="needs-validation" novalidate method="POST">
		<div class="form-group">
			<label for="uname">Nom d'utilisateur:</label>
			<input type="text" class="form-control" id="uname" placeholder="Entrez votre nom" name="username" required>
			<div class="valid-feedback">Valid.</div>
			<div class="invalid-feedback">Veuillez remplir ce</div>
		</div>
		<div class="form-group">
			<label for="pwd">Mot de passe:</label>
			<input type="password" class="form-control" id="pwd" placeholder="Entrez votre mot de passe" name="password" required>
			<div class="valid-feedback">Valid.</div>
			<div class="invalid-feedback">Please fill out this field.</div>
		</div>
		<input type="submit" name="login" class="btn btn-primary" value="Se connecter">
	</form>
</div>
</div>

<div class="jumbotron" id="about">
  <h2>Nous sommes ici et prêts à écouter.</h2>
  <h4>Pour plus d'informations sur notre bibliothèque, veuillez nous joindre.</h4>
  <div class="contact">
  	<div class="adresse">
  	<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="40" height="40" viewBox="0 0 425.963 425.963" style="enable-background:new 0 0 425.963 425.963;"
	 xml:space="preserve">
<g>
	<path d="M213.285,0h-0.608C139.114,0,79.268,59.826,79.268,133.361c0,48.202,21.952,111.817,65.246,189.081
		c32.098,57.281,64.646,101.152,64.972,101.588c0.906,1.217,2.334,1.934,3.847,1.934c0.043,0,0.087,0,0.13-0.002
		c1.561-0.043,3.002-0.842,3.868-2.143c0.321-0.486,32.637-49.287,64.517-108.976c43.03-80.563,64.848-141.624,64.848-181.482
		C346.693,59.825,286.846,0,213.285,0z M274.865,136.62c0,34.124-27.761,61.884-61.885,61.884
		c-34.123,0-61.884-27.761-61.884-61.884s27.761-61.884,61.884-61.884C247.104,74.736,274.865,102.497,274.865,136.62z"/>
</g>
</svg> &nbsp;
  23 Lot Samia Maarif
</div>
<div class="phone">
	<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40" height="40"
	 viewBox="0 0 513.64 513.64" style="enable-background:new 0 0 513.64 513.64;" xml:space="preserve">
<g>
	<g>
		<path d="M499.66,376.96l-71.68-71.68c-25.6-25.6-69.12-15.359-79.36,17.92c-7.68,23.041-33.28,35.841-56.32,30.72
			c-51.2-12.8-120.32-79.36-133.12-133.12c-7.68-23.041,7.68-48.641,30.72-56.32c33.28-10.24,43.52-53.76,17.92-79.36l-71.68-71.68
			c-20.48-17.92-51.2-17.92-69.12,0l-48.64,48.64c-48.64,51.2,5.12,186.88,125.44,307.2c120.32,120.32,256,176.641,307.2,125.44
			l48.64-48.64C517.581,425.6,517.581,394.88,499.66,376.96z"/>
	</g>
</g>
</svg> &nbsp;
  0661-45-89-34
</div>
<div class="mail">
	<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40" height="40"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<g>
		<path d="M467,61H45C20.218,61,0,81.196,0,106v300c0,24.72,20.128,45,45,45h422c24.72,0,45-20.128,45-45V106
			C512,81.28,491.872,61,467,61z M460.786,91L256.954,294.833L51.359,91H460.786z M30,399.788V112.069l144.479,143.24L30,399.788z
			 M51.213,421l144.57-144.57l50.657,50.222c5.864,5.814,15.327,5.795,21.167-0.046L317,277.213L460.787,421H51.213z M482,399.787
			L338.213,256L482,112.212V399.787z"/>
	</g>
</g>

</svg> &nbsp;
  support@library.com
</div>
<div class="social">
	<a href="#"><svg version="1.1" id="facebook" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40" height="40"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<path style="fill:#000;" d="M384,176h-96v-64c0-17.664,14.336-32,32-32h32V0h-64l0,0c-53.024,0-96,42.976-96,96v80h-64v80h64v256
	h96V256h64L384,176z"/>
<g>
</g>
</svg></a> &nbsp;&nbsp;

	<a href="#"><svg version="1.1" id="twitter" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40" height="40"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<path style="fill:#000;" d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
	c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
	c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
	c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
	c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
	c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
	C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
	C480.224,136.96,497.728,118.496,512,97.248z"/>
<g>
</g>
</svg></a> &nbsp;&nbsp;

	<a href="#"><svg version="1.1" id="instagram" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40" height="40"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="-46.0041" y1="634.1208" x2="-32.9334" y2="647.1917" gradientTransform="matrix(32 0 0 -32 1519 20757)">
	<stop  offset="0" style="stop-color:#000"/>
	<stop  offset="0.507" style="stop-color:#000"/>
	<stop  offset="0.99" style="stop-color:#000"/>
</linearGradient>
<path style="fill:url(#SVGID_1_);" d="M352,0H160C71.648,0,0,71.648,0,160v192c0,88.352,71.648,160,160,160h192
	c88.352,0,160-71.648,160-160V160C512,71.648,440.352,0,352,0z M464,352c0,61.76-50.24,112-112,112H160c-61.76,0-112-50.24-112-112
	V160C48,98.24,98.24,48,160,48h192c61.76,0,112,50.24,112,112V352z"/>
<linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="-42.2971" y1="637.8279" x2="-36.6404" y2="643.4846" gradientTransform="matrix(32 0 0 -32 1519 20757)">
	<stop  offset="0" style="stop-color:#000"/>
	<stop  offset="0.507" style="stop-color:#000"/>
	<stop  offset="0.99" style="stop-color:#000"/>
</linearGradient>
<path style="fill:url(#SVGID_2_);" d="M256,128c-70.688,0-128,57.312-128,128s57.312,128,128,128s128-57.312,128-128
	S326.688,128,256,128z M256,336c-44.096,0-80-35.904-80-80c0-44.128,35.904-80,80-80s80,35.872,80,80
	C336,300.096,300.096,336,256,336z"/>
<linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="-35.5456" y1="644.5793" x2="-34.7919" y2="645.3331" gradientTransform="matrix(32 0 0 -32 1519 20757)">
	<stop  offset="0" style="stop-color:#000"/>
	<stop  offset="0.507" style="stop-color:#000"/>
	<stop  offset="0.99" style="stop-color:#000"/>
</linearGradient>
<circle style="fill:url(#SVGID_3_);" cx="393.6" cy="118.4" r="17.056"/>
<g>
</g>
</svg></a>
</div>
</div>
</div>
</div>
</div>
</div>
  </div>
</div>

</body>
</html>
