<?php
/**
 Template Name: Inicio
 */

get_header(); ?>

	
	<header>
			<main>
				<div class="header">

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

<main class="home">
    <section class="ubicacion">
        <h1>Buscar por ubicación</h1>
        <aside>
            <main>
                <form>
                    <label>Selecciona el departamento</label>
                        <select name="preciomaximo">
                            <option>...</option>
                        </select>
                    <label>Selecciona el municipio</label>
                        <select name="preciomaximo">
                            <option>...</option>
                        </select>
                    <button type="submit" name="submit" value="Buscar" class="botonobscuro"/>Buscar</button>
                </form>
            </main>
        </aside>
        <aside>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/mapaguatemala.png"/>
        </aside>
    </section>

    <section class="tipo-estilo">
        <h1>Buscar por tipo de vehículo</h1>
        <ul>
            <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/tipo/sedan.png"/><span>Sedan</span></a></li>
            <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/tipo/wagon.png"/><span>Wagon</span></a></li>
            <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/tipo/suv.png"/><span>Suv</span></a></li>
            <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/tipo/gruas.png"/><span>Gruas</span></a></li>
            <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/tipo/convertible.png"/><span>Convertible</span></a></li>
            <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/tipo/coupe.png"/><span>Coupe</span></a></li>
            <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/tipo/pickup.png"/><span>Pickup</span></a></li>
            <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/tipo/van.png"/><span>Van</span></a></li>
        </ul>
    </section>
    
    <section class="tipo-estilo estilo">
        <h1>Buscar por estilo de vida</h1>
        <ul>
            <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/estilo/familiar.png"/><span>Familiar</span></a></li>
            <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/estilo/ecologico.png"/><span>Ecológicos</span></a></li>
            <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/estilo/desempenio.png"/><span>Desempeño</span></a></li>
            <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/estilo/prestigio.png"/><span>Prestigio</span></a></li>
            <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/estilo/rural.png"/><span>Rural 4x4</span></a></li>
            <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/estilo/primero.png"/><span>Primer carro</span></a></li>
            <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/estilo/trade.png"/><span>Trade</span></a></li>
            <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/estilo/unicos.png"/><span>Únicos</span></a></li>
        </ul>
    </section>

    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/division1.jpg"/>

    <section>
        <h1>Buscar por las mejores marcas</h1>



  <div class="track example-5">
    <div class="inner">

      <div class="view-port">
        <div id="example-5" class="slider-container">
          <div class="item">
            <a href=""><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/marca/ford.jpg"></a>
          </div>
          <div class="item">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/marca/toyota.jpg">
          </div>
          <div class="item">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/marca/mitsubishi.jpg">
          </div>
          <div class="item">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/marca/nissan.jpg">
          </div>
          <div class="item">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/marca/honda.jpg">
          </div>
          <div class="item">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/marca/chevrolet.jpg">
          </div>
          <div class="item">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/marca/bmw.jpg">
          </div>
          <div class="item">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/marca/hyundai.jpg">
          </div>
        </div>
      </div>
    </div>

    <div class="pagination">
      <a href="#" class="prev disabled"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/arrowl.png"></a>
      <a href="#" class="next disabled"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/arrowr.png"></a>
    </div>
  </div>

            <!--<div class="fotorama" data-nav="thumbs" data-thumbwidth="250" data-thumbheight="125" data-width="100%" data-arrows="true">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/marca/ford.jpg">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/marca/toyota.jpg">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/marca/mitsubishi.jpg">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/marca/nissan.jpg">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/marca/honda.jpg">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/marca/chevrolet.jpg">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/marca/bmw.jpg">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/marca/hyundai.jpg">
            </div>-->

    </section>
    
    <section class="otras">
        <h1>Buscar por otras opciones</h1>
        <aside>
            <h2>Por precio</h2>
            <ul>
                <li><a href="#">Q10,000 a Q20,000</a></li>
                <li><a href="#">Q60,000 a Q70,000</a></li>
                <li><a href="#">Q20,000 a Q30,000</a></li>
                <li><a href="#">Q70,000 a Q80,000</a></li>
                <li><a href="#">Q30,000 a Q40,000</a></li>
                <li><a href="#">Q80,000 a Q90,000</a></li>
                <li><a href="#">Q40,000 a Q50,000</a></li>
                <li><a href="#">Q90,000 a Q100,000</a></li>
                <li><a href="#">Q50,000 a Q60,000</a></li>
                <li><a href="#">Más de Q100,000</a></li>
            </ul>
        </aside>
        <aside>
            <h2>Por color</h2>
            <ul>
                <li class="negro"><a href="#">Negro</a></li>
                <li class="azul"><a hrevf="#">Azul</a></li>
                <li class="rojo"><a href="#">Rojo</a></li>
                <li class="morado"><a href="#">Morado</a></li>
                <li class="gris"><a href="#">Gris</a></li>
                <li class="cafe"><a href="#">Cafe</a></li>
                <li class="verde"><a href="#">Verde</a></li>
                <li class="amarillo"><a href="#">Amarillo</a></li>
                <li class="oro"><a href="#">Oro</a></li>
                <li class="naranja"><a href="#">Naranja</a></li>
                <li class="plateado"><a href="#">Plateado</a></li>
                <li class="blanco"><a href="#">Blanco</a></li>                
            </ul>
        </aside>
    </section>
    
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home/division2.jpg"/>
    
    <section class="recomendamos">
        <h1>Recomendamos</h1>
        <aside>
            <h3>Carro más popular</h3>
            <ul>
            <li><a href="#">Ford ecoesport 2015</a></li>
            <li><a href="#">Ford ecoesport 2015</a></li>
            <li><a href="#">Ford ecoesport 2015</a></li>
            <li><a href="#">Ford ecoesport 2015</a></li>
            <li><a href="#">Ford ecoesport 2015</a></li>
            <li><a href="#">Ford ecoesport 2015</a></li>
            </ul>
        </aside>
        <aside>
            <h3>Características más populares</h3>
            <ul>
            <li><a href="#">Carros rurales 4x4</a></li>
            <li><a href="#">Carros rurales 4x4</a></li>
            <li><a href="#">Carros rurales 4x4</a></li>
            <li><a href="#">Carros rurales 4x4</a></li>
            <li><a href="#">Carros rurales 4x4</a></li>
            <li><a href="#">Carros rurales 4x4</a></li>
            </ul>
        </aside>
        <aside>
            <h3>Carro más popular</h3>
            <ul>
            <li><a href="#">Toyota</a></li>
            <li><a href="#">Toyota</a></li>
            <li><a href="#">Toyota</a></li>
            <li><a href="#">Toyota</a></li>
            <li><a href="#">Toyota</a></li>
            <li><a href="#">Toyota</a></li>
            </ul>
        </aside>
    </section>    

</main>


<?php get_footer(); ?>
