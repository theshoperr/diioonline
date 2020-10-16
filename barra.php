<?php
$paginaperfil=null;
$paginaUpdateEmail=null;

$url = $_SERVER["REQUEST_URI"]; 
$pos = strrpos($url, "perfil.php"); 

if($pos != false) {
    $paginaperfil = true;
} else {
    $paginaperfil = false;
}

$url2 = $_SERVER["REQUEST_URI"]; 
$pos2 = strrpos($url2, "update-email.php"); 

if($pos2 != false) {
    $paginaUpdateEmail = true;
} else {
    $paginaUpdateEmail = false;
}

?>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link rel="stylesheet" href="animate.css">
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@500&display=swap" rel="stylesheet">
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	
	<style>
	    .nav-link{
	        color: #000;
	    }
	    .nav-link:hover{
	        color: #DADADB;
	    }
	    button .btn{
	        background-color: rgba(255, 255, 255, 0);
	        border-color: rgba(255, 255, 255, 0);
	        color: #DADADB;
	    }
	</style>
</head>
<body>
    <div class="Barra animate__animated animate__fadeInDown sticky-top">
    <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active user-select-none" href="index.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link user-select-none" href="#">Sobre</a>
        </li>
        <?php
        if(isset($_SESSION['userlogin']) && !$paginaperfil){
        echo '<li class="nav-item">';
        if($paginaUpdateEmail){
        echo '<a class="nav-link" href="../perfil.php">Perfil</a>';
        } else {
        echo '<a class="nav-link" href="perfil.php">Perfil</a>';
        }
        echo '</li>';
        } else if ($paginaperfil){
        echo '<li class="nav-item">';
        echo '<a class="nav-link" href="main.php?logout=true">Sair</a>';
        echo '</li>';
        }
        
        if(!isset($_SESSION['userlogin'])){
        echo '<li class="nav-item">';
        echo  '<a class="nav-link user-select-none" href="login.php">Entrar</a>';
        echo '</li>'; 
        }
        
        function sair(){
            Header("Location: main.php?logout=true");
        }
        ?>
        </ul>
    </div>
</body>
</html>