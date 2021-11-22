<?php 
// Template Name: Próximas Partidas
$style = get_stylesheet_directory_uri(); ?>

<?php get_header(); ?>

<div class='title-notices'>
	<div class='container'>
		<h1>Próximas Partidas</h1>
	</div>
</div>

<section class='partidas'>
    <div class='container'>
      <div class='match-data'>
          <p class='league'>Nome da Liga</p>
          <p class='stadium'>Nome do Estádio</p>
          <div class='versus'>
              <img src="<?= $style; ?>/img/logo.png" alt="">
              <span>X</span>
              <img src="<?= $style; ?>/img/escudos/bahia.svg" alt="">
          </div>
          <p class='date'>00 de Dezembro</p>
          <p class='hour'>12:00</p>
      </div>
      <div class='match-data'>
          <p class='league'>Nome da Liga</p>
          <p class='stadium'>Nome do Estádio</p>
          <div class='versus'>
              <img src="<?= $style; ?>/img/logo.png" alt="">
              <span>X</span>
              <img src="<?= $style; ?>/img/escudos/bahia.svg" alt="">
          </div>
          <p class='date'>00 de Dezembro</p>
          <p class='hour'>12:00</p>
      </div>
      <div class='match-data'>
          <p class='league'>Nome da Liga</p>
          <p class='stadium'>Nome do Estádio</p>
          <div class='versus'>
              <img src="<?= $style; ?>/img/logo.png" alt="">
              <span>X</span>
              <img src="<?= $style; ?>/img/escudos/bahia.svg" alt="">
          </div>
          <p class='date'>00 de Dezembro</p>
          <p class='hour'>12:00</p>
      </div>
    </div>
</section>


<?php get_footer(); ?>