<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class='post'>
    <div class='container'>
        <h1 class='title-blog'><?php the_title(); ?></h1>
        <img style='color: black'><?php the_post_thumbnail(); ?></img>
        <div class='text-blog'><?php the_content(); ?></div>
    </div>
</section>

<?php 

$tags = wp_get_post_terms( get_queried_object_id(), 'post_tag', ['fields' => 'ids'] );
$args = [
    'post__not_in'        => array( get_queried_object_id() ),
    'posts_per_page'      => 5,
    'ignore_sticky_posts' => 1,
    'orderby'             => 'rand',
    'tax_query' => [
        [
            'taxonomy' => 'post_tag',
            'terms'    => $tags
        ]
    ]
];
$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {
        while( $my_query->have_posts() ) {
            $my_query->the_post(); ?>
            <div class="ncc">

                <h5><a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>" rel="nofollow"><?php the_title(); ?></a></h5>

            </div><!--ncc-->
        <?php }
        wp_reset_postdata();
    echo '</div><!--related-->';
}
?> 

<?php endwhile; else: ?>
<p><?php _e('Sorry'); ?></p>
<?php endif; ?>
    <?php wp_footer(); ?>
</body>
</html>
<?php get_footer(); ?>