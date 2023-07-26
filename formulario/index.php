<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>REGISTRO</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="style.css">

</head>
<body>

	<form method="POST" autocomplete="off">

        <img src="images/logo.svg" alt="">

	<h2>HOLA BIENVENIDO A PIDEKA</h2>
	<p>Inicia tu registro</p>

	<div class="input-group">

		<div class="input-container">
			<input type="text" name="name" placeholder="Nombre">
			<i class="fa-solid fa-user"></i>
			
		</div>
		<div class="input-container">
			<input type="tel" name="phone" placeholder="Telefono">
			<i class="fa-solid fa-phone"></i>
			
		</div>
		<div class="input-container">
			<input type="num" name="numid" placeholder="N. Identificación">
			<i class="fa-solid fa-user"></i>
			
		</div>
		<div class="input-container">
			<input type="text" name="namevis" placeholder="Visita a">
			<i class="fa-solid fa-user"></i>
			
		</div>
		<div style="right: 0px;"  class="input-container">
			<input type="text" name="namerh" placeholder="RH">
			<i class="fa-solid fa-user"></i>
			
		</div>
		<div class="input-container">
			<input type="text" name="nameeps" placeholder="EPS">
			<i class="fa-solid fa-user"></i>
			
		</div>
		<div class="input-container">
			<input type="text" name="namecont" placeholder="Nombre de Contacto">
			<i class="fa-solid fa-user"></i>
			
		</div>
		<div class="input-container">
			<input type="tel" name="phonecont" placeholder="Telefono del Contacto">
			<i class="fa-solid fa-user"></i>
			
		</div>
		<div class="input-container">
			<input type="text" name="datos" placeholder="Autoriza el tratamiento de datos">
			<i class="fa-solid fa-user"></i>
			
		</div>
		<a href="#">Términos y Condiciones</a>
		<input type="submit" class="btn" value="Enviar" name="send">
    </div>
</form>

	<?php

	include("send.php")

	?>

</body>
</html>