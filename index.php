<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIIO ONLINE | Início</title>
    <link rel="stylesheet" href="styles/styleMai2n.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link rel="stylesheet" href="animate.css">
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@500&display=swap" rel="stylesheet">
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
    <style>
*
{
	margin: 0;
	padding: 0;
	font-family: 'Jura', sans-serif;
}
body
{
	min-height: 1500px;
	background: #0a2a43;
}
section:before
{
	content: '';
	position: absolute;
	bottom: 0;
	width: 100%;
	height: 100px;
	background: linear-gradient(to top, #0a2a43, transparent);
	z-index: 10000;
}
section:after
{
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	/*background: #0a2a43;*/
	z-index: 10000;
	mix-blend-mode: color;
}
section
{
	position: relative;
	width: 100%;
	height: 100vh;
	overflow: hidden;
	display: flex;
	justify-content: center;
	align-items: center;
}
section img
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	object-fit: cover;
}
#Text
{
	position: relative;
	color: #fff;
	font-size: 10em;
	z-index: 1;
}
#road
{
	z-index: 2;
}
#moon{
    z-index: 5;
}
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
.container h1{
    font-size: 3em;
}
.main{
    color: #000;
    text-align: center;
    padding-top: 40px;
}
.titulo1{
    font-size: 100px;
}
.cards{
    position: relative;
	width: 100%;
	height: 100vh;
	overflow: hidden;
	display: flex;
	justify-content: center;
	align-items: center;
	padding-right: 100px;
}
.logo{
    width: 160%;
    opacity: 0.5;
}
.footer{
    margin-left: 50px;
}
</style>
</head>
<body OnLoad="playMusic()">
    <audio autoplay loop id="bgmusic" preload="auto">
        <source src="img/bgmusic.mp3" type="audio/mpeg">
    </audio>
    <!---<video src="img/mapa.mp4" autoplay="" muted="" loop=""></video>--->
    <?php
    include("barra.php");
    ?>
    <section>
		<img src="img2/bg.png" id="bg">
		<img src="img2/character.png" id="moon">
		<img src="img2/mountain.png" id="mountain">
		<img src="img2/field.png" id="road">
		<div class="container">
        <div class="row">
            <div class="col-md-2 animate__animated animate__fadeIn" id= "Text">
                <h1>DIIO</h1>
                <h3>ONLINE</h3>
            </div>
        </div>
    </div>
	</section>
	
	    <div class="main">
	        
	        <h1 class="titulo1">DIIO</h1>
	        <h3 class="titulo2">ONLINE</h3>
	        
	        <div class="cards d-flex justify-content-around">
            <div class="col-md-2">
                <div class="card" style="width: 18rem;">
                <img src="img/bg.png" class="card-img-top">
                    <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <img src="img/pngIcone.png" class="logo">
            </div>
            <div class="col-md-2">
                <div class="card" style="width: 18rem;">
                <img src="img/bg.png" class="card-img-top">
                    <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            </div>
            
	    </div>
	
	<?php
    include("footer.php");
    ?>
    
    <script>
    function playMusic() {
    audio.play();
    }
    
    function pauseMusic() {
    audio.pause();
    }
    </script>
    
    
	<script type="text/javascript">
		let bg = document.getElementById("bg");
		let moon = document.getElementById("moon");
		let mountain = document.getElementById("mountain");
		let road = document.getElementById("road");
		let text = document.getElementById("Text");
		
		window.addEventListener('scroll', function(){
			var value = window.scrollY;
			
			bg.style.top = value * 0.5 + 'px';
			moon.style.left = -value * 0.5 + 'px';
			/*mountain.style.top = -value * 0.15 + 'px';*/
			road.style.top = value * 0.2 + 'px';
			text.style.top = value * 1 + 'px';
		})
	</script>
</body>
</html>