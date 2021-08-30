<?php
get_header();
?>

<section class="posts">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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

	<?php else: endif; ?>

</section>



<?php get_footer(); ?>