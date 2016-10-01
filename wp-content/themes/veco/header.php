<?php
/**
 * The template for displaying the header
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--Fonts Veco-->
	<link href="<?php echo site_url(); ?>/fonts/fonts.css" rel="stylesheet" type="text/css">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="veco">
	<header>
			<main>
				<div class="header">
					<aside><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/header/veco-logo.png"/></aside>
					<section>
						<div class="outerbvender"><a href="" class="botonazul">vender</a></div>
						<div class="micuentab">
							<?php if ( is_user_logged_in() ) { ?>
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/header/no-login-user.png"/>
							<?php } else { ?>
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/header/no-login-user.png" class="logout"/>
							<?php } ?>
						</div>
						<div class="menuc">
							<button class="c-hamburger c-hamburger--htx">
								<span>toggle menu</span>
							</button>
						</div>
					</section>
					<div class="search-home">
						<h1>Compra tu carro</h1>
						<form action="" method="post">
							<div class="tipocompra">
								<input type="radio" name="tipocompra" value="Todos" id="tipocompratodos" checked><label for="tipocompratodos">Todos</label>
								<input type="radio" name="tipocompra" value="Nuevos" id="tipocompranuevos"><label for="tipocompranuevos">Nuevos</label>
								<input type="radio" name="tipocompra" value="Usados" id="tipocomprausados"><label for="tipocomprausados">Usados</label>
							</div>
							<div class="columnaizq">
								<label>Marca</label>
								<select name="marca">
									<option>...</option>
								</select>
								
								<label>Precio: mínimo</label>
								<select name="preciominimo">
									<option>...</option>
								</select>
								
								<label>Años: mínimo</label>
								<select name="aniosminimo">
									<option>...</option>
								</select>
								
								<label>Kilometraje: desde</label>
								<select name="kilometrajedesde">
									<option>...</option>
								</select>					
							</div>
							<div class="columnadrch">
								<label>Modelo</label>
								<select name="modelo">
									<option>...</option>
								</select>
								
								<label>Precio: máximo</label>
								<select name="preciomaximo">
									<option>...</option>
								</select>
								
								<label>Años: máximo</label>
								<select name="preciomaximo">
									<option>...</option>
								</select>
								
								<label>Kilometraje: hasta</label>
								<select name="kilometrajehasta">
									<option>...</option>
								</select>								
							</div>
							<div class="masopciones">
								<button type="submit" name="submit" value="Buscar"/>Buscar</button>
								<a href="#masopciones">Más opciones</a>								
							</div>
						</form>
					</div>
				</div>
			</main>
	</header>
	
<script>
//////////// Menu Hamburgesa Icono
  (function() {
    "use strict";
    var toggles = document.querySelectorAll(".c-hamburger");
    for (var i = toggles.length - 1; i >= 0; i--) {
      var toggle = toggles[i];
      toggleHandler(toggle);
    };
    function toggleHandler(toggle) {
      toggle.addEventListener( "click", function(e) {
        e.preventDefault();
        (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
      });
    }
  })();
</script>
