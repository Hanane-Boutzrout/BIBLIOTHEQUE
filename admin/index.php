<?php
include "login.php";

if (isset($_SESSION['admin'])) {
	header("location:dashboard.php");
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
	<div class="connection">
		<div class="icon">
			<svg id="Layer_1" enable-background="new 0 0 512 512" height="58" viewBox="0 0 512 512" width="58" xmlns="http://www.w3.org/2000/svg"><path d="m155.307 351.643-19.133 13.079c-1.548 1.058-3.35 1.594-5.157 1.594-1.46 0-2.926-.35-4.265-1.057-2.997-1.582-4.873-4.692-4.873-8.082v-27.005h-63.29c-28.171 0-51.089 22.626-51.089 50.438v66.287c0 3.026 2.453 5.48 5.481 5.48h137.648l24.418-80.994z" fill="#c7eefd"/><path d="m309.447 411.065-.508-2.002-22.852-4.891c-3.069-.657-5.262-3.369-5.262-6.508v-15.605c0-3.14 2.192-5.852 5.262-6.508l22.852-4.891.508-2.003c2.018-7.943 5.176-15.558 9.387-22.633l1.058-1.775-9.113-14.077h-52.096v27.005c0 3.389-1.877 6.5-4.873 8.082-1.34.706-2.805 1.057-4.265 1.057-1.809 0-3.609-.536-5.158-1.594l-19.133-13.079-19.74 19.74 24.419 80.994h79.016l10.943-16.903-1.058-1.775c-4.211-7.076-7.368-14.69-9.387-22.634z" fill="#c7eefd"/><path d="m49.438 446.897v-66.287c0-27.812 22.918-50.438 51.089-50.438h-41.938c-28.171 0-51.089 22.626-51.089 50.438v66.287c0 3.026 2.453 5.48 5.481 5.48h41.938c-3.027 0-5.481-2.453-5.481-5.48z" fill="#98e5fb"/><path d="m205.514 371.383-8.162 8.162c-3.89 3.889-10.253 3.889-14.143 0l-8.162-8.162-24.418 80.994h79.304z" fill="#0592fb"/><path d="m197.352 379.545c-3.89 3.889-10.253 3.889-14.143 0l-8.162-8.162-24.418 80.994h31.067l24.118-79.997-.301-.997z" fill="#0181fb"/><path d="m190.28 327.737-34.974 23.906 27.902 27.902c3.89 3.889 10.253 3.889 14.143 0l27.902-27.902z" fill="#0592fb"/><path d="m181.059 334.04-25.752 17.603 27.902 27.902c3.89 3.889 10.253 3.889 14.143 0l8.462-8.461-23.896-23.897c-3.576-3.574-3.855-9.233-.859-13.147z" fill="#0181fb"/><path d="m203.727 325.455h-26.893c-20.236 0-39.096-5.828-54.955-15.878v47.601c0 3.389 1.876 6.5 4.873 8.082 1.339.706 2.805 1.057 4.265 1.057 1.808 0 3.609-.536 5.157-1.594l54.107-36.985 54.106 36.985c1.549 1.058 3.35 1.594 5.158 1.594 1.46 0 2.925-.35 4.265-1.057 2.996-1.582 4.873-4.692 4.873-8.082v-47.602c-15.859 10.05-34.718 15.879-54.956 15.879z" fill="#c7eefd"/><path d="m190.284 10.302c-63.743 0-115.416 23.417-115.416 86.183v61.09c.125-62.595 51.748-85.958 115.413-85.958 63.741 0 115.41 23.418 115.41 86.184v5.688c0-.051.002-.102.002-.152v-66.852c0-62.766-51.669-86.183-115.409-86.183z" fill="#c76d36"/><path d="m106.063 92.962c1.747-55.041 44.573-78.582 99.787-82.165-5.092-.331-10.286-.495-15.565-.495-63.743 0-115.416 23.417-115.416 86.183v61.09c.059-29.931 11.897-50.888 31.194-64.613z" fill="#ab5e2e"/><g fill="#fdd1a3"><path d="m74.865 224.653v-51.837h-15.727c-11.713 0-21.211 9.292-21.211 20.751v25.119c0 11.462 9.498 20.752 21.211 20.752h16.822c-.718-4.826-1.095-9.762-1.095-14.785z"/><path d="m321.425 172.815h-15.733v51.837c0 5.023-.377 9.959-1.095 14.785h16.828c11.714 0 21.21-9.29 21.21-20.752v-25.119c0-11.458-9.496-20.751-21.21-20.751z"/><path d="m190.281 71.617c-63.742 0-115.416 23.418-115.416 86.184v66.852c0 55.669 45.654 100.802 101.969 100.802h26.893c56.314 0 101.964-45.133 101.964-100.802v-66.852c0-62.766-51.668-86.184-115.41-86.184z"/></g><path d="m106 224.653v-66.852c0-57.566 43.47-82.03 99.849-85.689-5.093-.331-10.287-.495-15.567-.495-63.742 0-115.416 23.418-115.416 86.184v66.852c0 55.669 45.654 100.802 101.969 100.802h26.893c.709 0 1.415-.012 2.12-.026-55.334-1.118-99.848-45.808-99.848-100.776z" fill="#ffbb85"/><path d="m392.663 334.622c-30.459 0-55.24 24.781-55.24 55.24s24.781 55.24 55.24 55.24c30.46 0 55.24-24.781 55.24-55.24s-24.78-55.24-55.24-55.24z" fill="#5a5a5a"/><circle cx="392.662" cy="389.862" fill="#9b9b9b" r="30.614"/><path d="m384.772 389.862c0-12.892 7.973-23.915 19.253-28.428-3.514-1.406-7.346-2.187-11.361-2.187-16.909 0-30.615 13.707-30.615 30.615 0 16.907 13.706 30.614 30.615 30.614 4.016 0 7.848-.781 11.361-2.187-11.281-4.513-19.253-15.536-19.253-28.427z" fill="#828282"/><path d="m384.86 501.698c-3.141 0-5.853-2.193-6.508-5.263l-4.891-22.852-2.002-.508c-7.946-2.019-15.561-5.176-22.633-9.386l-1.777-1.057-19.628 12.707c-1.108.718-2.365 1.069-3.615 1.069-1.717 0-3.423-.664-4.707-1.95l-11.035-11.035c-2.22-2.219-2.586-5.688-.88-8.322l12.707-19.628-1.058-1.775c-4.211-7.075-7.368-14.69-9.387-22.633l-.508-2.002-22.852-4.891c-3.069-.657-5.262-3.369-5.262-6.508v-15.605c0-3.14 2.192-5.852 5.262-6.508l22.852-4.891.508-2.003c2.018-7.943 5.176-15.558 9.387-22.633l1.058-1.775-12.707-19.627c-1.706-2.635-1.34-6.104.88-8.323l11.035-11.035c1.284-1.286 2.99-1.95 4.707-1.95 1.25 0 2.507.351 3.615 1.069l19.628 12.707 1.774-1.057c7.075-4.21 14.69-7.368 22.636-9.386l2.002-.508 4.889-22.852c.657-3.07 3.369-5.263 6.51-5.263h15.605c3.139 0 5.851 2.193 6.508 5.263l4.892 22.852 2.001.508c7.946 2.019 15.561 5.177 22.634 9.386l1.776 1.057 19.626-12.707c1.108-.718 2.365-1.069 3.615-1.069 1.719 0 3.423.664 4.707 1.95l11.035 11.035c2.22 2.219 2.586 5.688.882 8.323l-12.707 19.627 1.058 1.775c4.209 7.075 7.366 14.691 9.385 22.634l.51 2.002 22.85 4.891c3.069.657 5.264 3.369 5.264 6.508v15.605c0 3.139-2.194 5.851-5.264 6.508l-22.85 4.891-.51 2.002c-2.019 7.943-5.176 15.559-9.385 22.633l-1.058 1.776 12.707 19.628c1.704 2.635 1.338 6.103-.882 8.322l-11.035 11.035c-1.284 1.286-2.988 1.95-4.707 1.95-1.25 0-2.507-.351-3.615-1.069l-19.626-12.707-1.776 1.057c-7.075 4.21-14.69 7.368-22.634 9.386l-2.001.508-4.892 22.852c-.657 3.07-3.369 5.263-6.508 5.263h-15.605zm7.803-167.076c-30.459 0-55.24 24.781-55.24 55.24s24.781 55.24 55.24 55.24c30.46 0 55.24-24.781 55.24-55.24s-24.78-55.24-55.24-55.24z" fill="#9b9b9b"/><path d="m186.942 212.337h13.942c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-12.946v-25.408c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v26.491c.001 7.674 6.283 13.917 14.004 13.917z"/><path d="m128.455 155.635c-4.143 0-7.5 3.358-7.5 7.5v23.201c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-23.201c0-4.142-3.357-7.5-7.5-7.5z"/><path d="m252.105 193.836c4.143 0 7.5-3.358 7.5-7.5v-23.201c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v23.201c0 4.142 3.357 7.5 7.5 7.5z"/><path d="m236.68 234.651c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5c0 17.411-14.086 31.575-31.4 31.575-17.313 0-31.399-14.165-31.399-31.575 0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5c0 25.682 20.814 46.575 46.399 46.575s46.4-20.894 46.4-46.575z"/><path d="m392.663 351.747c-21.017 0-38.115 17.098-38.115 38.115 0 21.016 17.099 38.114 38.115 38.114s38.113-17.098 38.113-38.114c0-21.017-17.097-38.115-38.113-38.115zm0 61.229c-12.746 0-23.115-10.369-23.115-23.114 0-12.746 10.369-23.115 23.115-23.115 12.745 0 23.113 10.369 23.113 23.115 0 12.745-10.368 23.114-23.113 23.114z"/><path d="m447.989 396.749c-4.003-1.059-8.109 1.326-9.17 5.33-5.54 20.915-24.52 35.523-46.156 35.523-26.324 0-47.74-21.416-47.74-47.74s21.416-47.74 47.74-47.74c19.576 0 37.48 12.29 44.553 30.583 1.492 3.862 5.834 5.784 9.699 4.291 3.864-1.494 5.785-5.836 4.291-9.7-9.289-24.029-32.816-40.174-58.543-40.174-34.595 0-62.74 28.145-62.74 62.74s28.145 62.74 62.74 62.74c28.434 0 53.376-19.196 60.656-46.682 1.061-4.005-1.325-8.11-5.33-9.171z"/><path d="m500.806 368.217-18.338-3.925c-1.962-6.901-4.721-13.555-8.229-19.843l10.2-15.754c3.6-5.568 2.811-13.012-1.876-17.699l-11.032-11.032c-2.673-2.676-6.23-4.149-10.014-4.149-2.736 0-5.398.787-7.691 2.273l-15.751 10.198c-6.286-3.507-12.939-6.267-19.842-8.229l-3.926-18.339c-1.389-6.485-7.21-11.192-13.842-11.192h-15.605c-6.633 0-12.455 4.707-13.844 11.194l-3.923 18.337c-6.9 1.961-13.555 4.721-19.844 8.23l-15.749-10.196c-2.297-1.488-4.958-2.275-7.694-2.275-3.784 0-7.341 1.474-10.011 4.146l-11.034 11.035c-3.127 3.125-4.508 7.475-4.021 11.677h-32.558v-9.128c22.494-15.518 38.85-39.165 44.674-66.606h10.568c15.831 0 28.71-12.674 28.71-28.252v-25.119c0-15.578-12.879-28.251-28.71-28.251h-8.233l.002-68.83c0-32.186-12.512-56.712-37.188-72.9-21.023-13.794-49.863-20.786-85.721-20.786s-64.701 6.993-85.726 20.783c-24.678 16.188-37.19 40.714-37.19 72.9l-.003 68.83h-8.227c-15.831 0-28.711 12.673-28.711 28.251v25.119c0 15.579 12.88 28.252 28.711 28.252h10.562c5.825 27.442 22.183 51.09 44.679 66.608v9.126h-55.79c-32.306.001-58.589 25.993-58.589 57.94v66.287c0 7.157 5.823 12.98 12.981 12.98h44.019c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-42v-64.267c0-23.676 19.554-42.938 43.589-42.938h55.79v19.505c0 6.188 3.399 11.826 8.873 14.715 2.385 1.258 5.069 1.923 7.765 1.923 3.365 0 6.612-1.003 9.39-2.902l13.997-9.568 12.168 12.168-21.515 71.364h-52.057c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h205.693c.27 3.26 1.641 6.424 4.067 8.85l11.032 11.032c2.674 2.676 6.229 4.149 10.01 4.149h.004c2.736 0 5.397-.787 7.691-2.273l15.753-10.199c6.284 3.507 12.939 6.267 19.843 8.23l3.924 18.333c1.385 6.488 7.207 11.197 13.843 11.197h15.605c6.632 0 12.453-4.707 13.842-11.193l3.926-18.338c6.901-1.962 13.555-4.722 19.842-8.229l15.748 10.197c2.297 1.488 4.958 2.275 7.694 2.275 3.784 0 7.341-1.474 10.011-4.147l11.034-11.035c4.689-4.688 5.478-12.131 1.875-17.702l-10.198-15.751c3.507-6.287 6.267-12.941 8.229-19.843l18.338-3.925c6.486-1.388 11.194-7.209 11.194-13.842v-15.605c0-6.633-4.708-12.455-11.194-13.842zm-187.615-143.564v-44.337h8.233c7.56 0 13.71 5.944 13.71 13.251v25.119c0 7.308-6.15 13.252-13.71 13.252h-8.486c.163-2.409.253-4.836.253-7.285zm-254.053 7.285c-7.561 0-13.711-5.945-13.711-13.252v-25.119c0-7.307 6.15-13.251 13.711-13.251h8.227v44.337c0 2.449.091 4.876.253 7.285zm23.23-135.453c0-26.811 10.234-47.118 30.418-60.358 18.277-11.989 45.075-18.326 77.498-18.326 32.421 0 59.218 6.337 77.493 18.326 20.183 13.239 30.416 33.546 30.416 60.358v9.524c-5.757-8.13-13.154-15.181-22.19-21.108-21.023-13.791-49.864-20.784-85.722-20.784s-64.7 6.993-85.725 20.784c-9.035 5.926-16.432 12.975-22.188 21.104zm-.003 128.168v-66.852c0-26.811 10.234-47.119 30.418-60.358 18.277-11.989 45.076-18.326 77.498-18.326 32.421 0 59.218 6.337 77.494 18.326 20.183 13.24 30.416 33.547 30.416 60.358v66.852c0 51.447-42.376 93.302-94.464 93.302h-26.893c-52.09 0-94.469-41.855-94.469-93.302zm128.494 108.066c14.364-.919 27.985-4.583 40.323-10.48v34.938c0 .609-.335 1.165-.871 1.447-.24.127-.498.191-.767.191-.231 0-.581-.05-.926-.286zm2.698 20.013-21.508 21.509c-.627.627-1.377.721-1.768.721s-1.142-.094-1.768-.72l-21.509-21.509 23.276-15.911zm-81.616 5.798c-.345.236-.693.285-.925.285-.265 0-.529-.065-.764-.189-.539-.285-.874-.84-.874-1.449v-34.937c12.338 5.896 25.958 9.56 40.322 10.479zm172.928 86.347h-69.364l-3.632-12.044c-1.196-3.966-5.381-6.212-9.346-5.016-3.966 1.196-6.212 5.38-5.016 9.346l2.326 7.714h-59.114l17.901-59.377c3.206 2.873 7.301 4.461 11.655 4.461s8.448-1.588 11.655-4.461l5.325 17.661c1.195 3.965 5.377 6.21 9.346 5.016 3.966-1.195 6.211-5.38 5.016-9.346l-7.633-25.316 12.169-12.169 13.998 9.569c2.777 1.898 6.024 2.901 9.389 2.901 2.693 0 5.378-.664 7.767-1.924 5.472-2.89 8.871-8.527 8.871-14.714v-19.505h40.517l4.387 6.776c-3.507 6.285-6.267 12.939-8.229 19.843l-18.338 3.925c-6.485 1.388-11.192 7.209-11.192 13.842v15.605c0 6.633 4.707 12.454 11.192 13.842l18.338 3.925c1.962 6.902 4.723 13.557 8.229 19.843zm192.131-47.896-22.183 4.748c-2.787.597-4.996 2.722-5.699 5.484l-.51 2.005c-1.842 7.247-4.723 14.192-8.56 20.643l-1.058 1.776c-1.46 2.451-1.403 5.519.147 7.914l12.335 19.053-10.069 10.069-19.052-12.336c-2.393-1.551-5.46-1.608-7.912-.15l-1.775 1.057c-6.455 3.841-13.401 6.722-20.643 8.562l-2.001.508c-2.765.702-4.893 2.911-5.489 5.7l-4.749 22.184h-14.238l-4.748-22.184c-.597-2.79-2.725-4.999-5.49-5.7l-1.999-.507c-7.246-1.841-14.191-4.721-20.646-8.563l-1.777-1.057c-2.449-1.458-5.516-1.4-7.91.15l-19.054 12.336-10.068-10.068 12.336-19.055c1.551-2.395 1.607-5.463.147-7.914l-1.056-1.773c-3.841-6.452-6.722-13.398-8.563-20.641l-.508-2.003c-.701-2.765-2.91-4.893-5.7-5.49l-22.183-4.748v-14.24l22.183-4.748c2.79-.597 4.999-2.725 5.7-5.49l.507-1.999c1.842-7.246 4.723-14.192 8.562-20.642l1.058-1.775c1.46-2.451 1.403-5.519-.147-7.914l-12.336-19.054 10.068-10.068 19.054 12.335c2.396 1.55 5.463 1.608 7.913.148l1.773-1.055c6.457-3.842 13.403-6.723 20.645-8.562l2.002-.508c2.766-.701 4.893-2.911 5.49-5.701l4.746-22.183h14.24l4.749 22.184c.597 2.789 2.725 4.998 5.489 5.7l1.999.507c7.244 1.841 14.19 4.722 20.645 8.563l1.776 1.057c2.452 1.458 5.519 1.4 7.912-.15l19.052-12.335 10.07 10.069-12.336 19.053c-1.551 2.396-1.607 5.463-.147 7.915l1.056 1.771c3.84 6.455 6.72 13.401 8.561 20.65l.51 2.002c.704 2.762 2.912 4.887 5.699 5.483l22.182 4.748z"/></svg>
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
			<input type="text" class="form-control" id="uname" placeholder="Entrez votre nom" name="uname" required>
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

</body>
</html>