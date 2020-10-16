<?php
require_once('includes/config.php');

	session_start();
	
	if(!isset($_SESSION['userlogin'])){
		header("location: index.php");
	}

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIIO ONLINE | Baixar</title>
    <link rel="stylesheet" href="styles/styleBaixando.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link rel="stylesheet" href="animate.css">
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@500&display=swap" rel="stylesheet">
    <style>
        video {
        position: absolute;
	    top: 0;
	    left: 0;
	    width: 100%;
	    height: 100%;
	    object-fit: cover;
	    pointer-events: none;
	    opacity: 0.4;
        }
    </style>
</head>
<body OnLoad="download()">
    <video src="img/mapa.mp4" autoplay="" muted="" loop=""></video>
    
    <?php
    include("barra.php");
    ?>

    <div class="card border-light mb-3" style="max-width: 26rem; background-color:rgba(44,55,77, 0.7)">
        <div class="card-header" style="padding-left: 170px; padding-right: 170px; color: #DADADB">Baixando...</div>
        <div class="card-body text-info">
          <h5 class="card-title" style="color: #DADADB">Seu download está começando</h5>
          <p class="card-text" style="color: #DADADB">Se o jogo não baixar automaticamente, clique <a href="/Builds/launcherFiles/INSTALADOR%20DIIO%20ONLINE.exe" target="_self" style="text-decoration: none;">aqui</a> para baixar manualmente</p>
        </div>
      </div>

    <?php
    include("footer.php");
    ?>
    
    <script>
        function download(){
            window.open("/Builds/launcherFiles/INSTALADOR%20DIIO%20ONLINE.exe");
        }
    </script>
</body>
</html>