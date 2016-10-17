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
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<!--Fonts Veco-->
	<link href="<?php echo site_url(); ?>/fonts/fonts.css" rel="stylesheet" type="text/css">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<!--menuswipe-->	
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/menuswipe.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/menuswipe-font-awesome.min.css" type="text/css" media="all">

    <!-- Fotorama 
	<link  href="<?php //echo esc_url( get_template_directory_uri() ); ?>/css/fotorama.css" rel="stylesheet">
	<script src="<?php //echo esc_url( get_template_directory_uri() ); ?>/js/fotorama.js"></script> -->
	<!--Carousel marcas-->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/carousel/script.js" charset="utf-8"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/carousel/example5.js" charset="utf-8"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/carousel/modernizr.mediaqueries.transforms3d.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/carousel/responsive-hub.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/carousel/jquery.silver_track.js" charset="utf-8"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/carousel/jquery.silver_track.navigator.js" charset="utf-8"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/carousel/jquery.silver_track.responsive_hub_connector.js" charset="utf-8"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/carousel/jquery.silver_track.css3_animation.js" charset="utf-8"></script>
  
  
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="veco">
			
	<!--menu izquierdo-->
    <div id="cb-sidebar-modal" class="clearfix">
       <div class="clearfix cb-sidebar-menu">
          <a href="<?php echo site_url(); ?>/#" id="cb-sidebar-close" class="cb-link">X</a>
		  	<!--contenido menu-->
          <nav class="menup">
			<h1>Menu</h1>
			<ul>
				<li><a href="<?php echo site_url(); ?>/">Inicio</a></li>
				<li><a href="<?php echo site_url(); ?>/">Mi cuenta</a></li>
				<li><a href="<?php echo site_url(); ?>/">Buscar</a></li>
				<li><a href="<?php echo site_url(); ?>/">Tips</a></li>
				<li><a href="<?php echo site_url(); ?>/">Crear anuncio</a></li>
			</ul>
		  </nav>
      </div>
    </div>


	<div id="cb-container" class="clearfix">
      <nav id="cb-navigation" role="navigation" class="clearfix">
        <div class="cb-menu">
           <div class="cb-left cb-column">
             <div id="cb-logo">
                <a href="<?php echo site_url(); ?>" class="cb-logo-img">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/header/veco-logo.png"/>
				</a>
			 </div>
			</div>
         <div class="cb-middle cb-column"></div>
            <div class="cb-right cb-column linkstop">
				
				<section>
					<div class="outerbvender"><a href="" class="botonazul">vender</a></div>
					<div class="micuentab">
						<?php if ( is_user_logged_in() ) { ?>
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/header/no-login-user.png"/>
						<?php } else { ?>
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/header/no-login-user.png" class="logout"/>
						<?php } ?>
					</div>
				</section>
				
               <div class="cb-nav">
                 <a href="#" id="cb-sidebar-open" class="cb-link">
					<div class="menuamburgesa">
						<aside></aside>
						<aside></aside>
						<aside></aside>
					</div>
				</a>
            </div>
        </div>
       </div>
     </nav>
				
	<div id="cb-content" class="clearfix">


<!--menuswipe-->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/menuswipe-cb-scripts.js"></script>

<!----- boton scrooll top ---->
<script type="text/javascript">
	$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 400) {
			$('.scrollToTop').fadeIn();
			$('#cb-navigation').addClass('menuestaticotop');
			$('.menuestaticotop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
			$('#cb-navigation').removeClass('menuestaticotop');
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});
</script>

