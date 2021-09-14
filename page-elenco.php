<?php 
// Template Name: Elenco
$style = get_stylesheet_directory_uri(); ?>

<?php get_header(); ?>

<div class='title-notices'>
	<div class='container'>
		<h1>Elenco</h1>
	</div>
</div>

<section class='elenco'>
    <div class='container'>
			<div class='goleiros'>
				<h2 class='title'>Goleiros</h2>
				<ul>
					<li>
						<img src="<?= $style ?>/img/memphis.png" alt="">
						<h3>João Victor</h3>
						<div class='tooltip-player'>
							<p>João Victor é um futebolista brasileiro que atua como atacante. Atualmente joga pelo Barcelona e pela Seleção brasileira. É filho de pai português e mãe brasileira.</p>
						</div>
					</li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
    </div>
</section>


<?php get_footer(); ?>