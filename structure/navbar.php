<nav class="container row social-media">	
	<div class="col-md-5">
		<p style="float: left;">
			<a href="https://www.facebook.com/colmiguel.decervantessaavedra.5" target="_blank">
				<img src="assets/img/icn-face.png" class="pointer">
			</a>
			<a href="https://twitter.com/colegio_miguel" target="_blank">
				<img src="assets/img/icn-twitter.png" class="pointer">
			</a>
		</p>
		
	</div>
	<div class="col-md-5 offset-md-2">
		<p style="float: right;">
			<a href="https://www.instagram.com/cmcs.comunidaddelamancha/" target="_blank">
				<img src="assets/img/icn-insta.png" class="pointer">
			</a>
			<a href="https://www.youtube.com/channel/UCGM2Gkhnc0osMdGCOe2_kYQ" target="_blank">
				<img src="assets/img/icn-youtube.png" class="pointer">
			</a>
		</p>
		
	</div>
</nav>
<nav class="navbar navbar-expand-md navbar-light pt-3 pb-3 bottom-shadow">
	<div class="container nb-container relativer">
		<a class="navbar-brand navbar-brand-centered" href="index">
			<img src="assets/img/logo.png" class="logo-mcs">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item <?php if( $active=="index" ) echo 'active'; ?>">
					<a class="nav-link luminaria" href="index">Inicio</a>
				</li>
				<li class="nav-item <?php if( $active=="nosotros" ) echo 'active'; ?>">
					<a class="nav-link luminaria" href="nosotros">Nosotros</a>
				</li>
				<li class="nav-item <?php if( $active=="talleres" ) echo 'active'; ?>">
					<a class="nav-link luminaria" href="talleres">Talleres</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item <?php if( $active=="galeria" ) echo 'active'; ?>">
					<a class="nav-link luminaria" href="galeria">Galería</a>
				</li>				
				<li class="nav-item mb-2 mb-md-0 <?php if( $active=="oferta_educativa" ) echo 'active'; ?>">
					<a class="nav-link luminaria" href="oferta_educativa">Niveles</a>
				</li>
				<li class="nav-item mb-2 mb-md-0 <?php if( $active=="contacto" ) echo 'active'; ?>">
					<a class="nav-link luminaria" href="contacto">Contacto</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
