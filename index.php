<!DOCTYPE html>
<html lang="es">
<head>
	<?php $view_name="Inicio"; include("structure/head.php") ?>
</head>
<body>
	<?php $active="index"; include("structure/navbar.php") ?>

	<section class="pt60 section1-cover cover2" style="background-image: url(assets/img/inicio.png);">
		<div class="container-custom h-100">
			<div class="div-bienvenidos">
				<img src="assets/img/bienvenidos.png" class="bienvenido1">
				<img src="assets/img/bienvenidos2.png" class="bienvenido2">
			</div>		
		</div>
	</section>

	<div class="container-text" style="padding-top: 30px; background: #cac9c9;">
		<div class="row m-0">
			<div class="col-3 cont-four">
				<img src="assets/img/four1.png" class="img-four">
				<div class="red-bar">
					<img src="assets/img/text-educacion.png" style="left: 10%;">
				</div>
			</div>
			<div class="col-3 cont-four">
				<img src="assets/img/four2.png" class="img-four">
				<div class="red-bar">
					<img src="assets/img/text-comunidad.png" style="left: 3%;">
				</div>
			</div>
			<div class="col-3 cont-four">
				<img src="assets/img/four3.png" class="img-four">
				<div class="red-bar">
					<img src="assets/img/text-institucion.png" style="left: 3%;">
				</div>
			</div>
			<div class="col-3 cont-four">
				<img src="assets/img/four4.png" class="img-four">
				<div class="red-bar">
					<img src="assets/img/text-talleres.png" style="left: 20%;">
				</div>
			</div>
		</div>
	</div>

	<section class="pt60 pb60 appear">
		<h1 class="luminaria color-principal text-center mb-5">
			Video Institucional MCS
		</h1>
		<img src="https://placeholdit.co//i/1920x940?&bg=e6e6e6&fc=000000&text=VIDEO" style="width: 100%;">		
	</section>

	<section class="pt60 pb60 appear">
		<div class="row" style="width: 90%; margin: 0 auto;">
			<div class="col-md-12 luminaria color-principal nuestras-metas">
				Nuestras Metas
			</div>			
			<div class="col-md-3 offset-md-1 text-center home-divisor">				
				<img src="assets/img/meta1" class="metas">
				<p class="mt-3 text-metas luminaria color-principal">
					A través de diversos proyectos académicos y sociales fomentamos la actualizacióin constante de nuestros profesionales y potenciamos la formación académica de los estudiantes que conforman nuestra comunidad.
				</p>				
			</div>
			<div class="col-md-3 offset-md-1 text-center home-divisor">				
				<img src="assets/img/meta2" class="metas">
				<p class="mt-3 text-metas luminaria color-principal">
					Contamos con validez oficial ante la SEP, programas educativos con RVOE, en todas sus modalidades. Buscamos que la calidad educativa que ofrecemos, sea de excelencia en nuestros diferentes niveles, kinder,primaria,secundaria, para ser su opción número uno al momento de elegir una Institución Educativa.
				</p>				
			</div>
			<div class="col-md-3 offset-md-1 text-center home-divisor">				
				<img src="assets/img/meta3" class="metas">
				<p class="mt-3 text-metas luminaria color-principal">
					Establecemos vínculos entre nuestra comunidad con el objeto de construir una cultura de paz y desarrollar un espíritu crítico contra el bullying, trabajamos arduamente realizando pláticas tanto alumnos como a padres de familia para prevenir y combatir problemas oportunamente para generar un panorama multidisciplinario que beneficie a nuestro Instituto.
				</p>				
			</div>
		</div>
	</section>

	<?php include("structure/footer.php") ?>
</body>
</html>