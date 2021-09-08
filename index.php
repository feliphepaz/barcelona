<?php get_header(); 

$style = get_stylesheet_directory_uri();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class='post'>
    <div class='container'>
        <div class='top-post-bar'>
            <div class='top-post-bar-col1'>
                <span><?php the_date(); ?></span>
                <?php
                    $tagspost = get_the_tags();
                    if ($tagspost) { ?>
                        <div> <?php
                        foreach($tagspost as $tagpost) { 
                            $taglink = get_tag_link($tagpost->term_id); ?>
                            <a href='<?= $taglink ?>'><?= $tagpost->name; ?></a> <?php
                        } ?>
                        </div> <?php
                    }
                ?>
            </div>
            <div class='top-post-bar-col2'>
                <h4>Compartilhe!</h4>
                <?php 
                $postUrl = 'http' . ( isset( $_SERVER['HTTPS'] ) ? 's' : '' ) . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; 
                ?>
                <a target="_blank" class="share-button share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postUrl; ?>" title="Share on Facebook"><img src="<?= $style ?>/img/facebook.svg" alt=""></a>

                <a target="_blank" class="share-button share-twitter" href="https://twitter.com/intent/tweet?url=<?php echo $postUrl; ?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta( 'twitter' ); ?>" title="Tweet this"><img src="<?= $style ?>/img/tweet.svg" alt=""></a>

                <a target="_blank" class="share-button share-linkedin" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $postUrl; ?>" title="Share on LinkedIn"><img src="<?= $style ?>/img/linkedin.svg" alt=""></a>
            </div>
        </div>
        <?php the_post_thumbnail(); ?>
        <h1 class='title-blog'><?php the_title(); ?></h1>
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