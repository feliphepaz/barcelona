<?php
get_header();
?>

<div class='title-notices'>
	<div class='container'>
		<p class='filter-text'>Filtrando pela busca:</p>
		<h1><?= get_search_query() ?></h1>
	</div>
</div>

<?php
get_search_form();
?>

<div class='filtro-tags'>
	<p>Filtrar por Tags:</p>
	<ul> <?php
		$tags = get_tags();
		foreach ($tags as $tag) { 
			$taglink = get_tag_link($tag->term_id); ?>
			<li><a href='<?= $taglink ?>'><?= $tag->name ?></a></li> <?php
		} ?>
	</ul>
</div>

<section class="posts">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
	<?php if (is_search() && ($post->post_type=='page')) continue; ?>

	<div class='container'>
		<h3 class='notice-date title'><?php the_date() ?></h3>
			
		<article class="blog-post">
			<a href="<?php the_permalink(); ?>">
				<legend><?php the_time() ?></legend>
				<h2><?php the_title() ?></h2>
				<?php the_post_thumbnail(); ?>
			</a>
		</article>
	</div>

	<?php endwhile; ?>

		<div class="nav-blog grid-16">
			<?php next_posts_link( '← Posts Antigos' ); ?>
			<?php previous_posts_link( 'Posts Novos →' ); ?>
		</div>

	<?php else: ?>

		<section class='post-not-found'>
			<div class='container'>
				<h1 style='color: #ffffff'>Não conseguimos encontrar nada em sua busca</h1>
			</div>
		</section>

	<?php endif; ?>

</section>



<?php get_footer(); ?>