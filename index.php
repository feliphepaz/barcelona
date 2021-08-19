<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1 style='color: black'><?php the_title(); ?></h1>
<h1 style='color: black'><?php the_content(); ?></h1>

<?php endwhile; else: ?>
<p><?php _e('Sorry'); ?></p>
<?php endif; ?>
    <?php wp_footer(); ?>
</body>
</html>