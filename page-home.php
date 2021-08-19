<?php 
// Template Name: Home

function post_data($arg) {
    $posts = get_posts()[$arg];
    $post = array(
    'id' => $posts->ID,
    'title' => $posts->post_title,
    'content' => $posts->post_content,
    'image' => get_the_post_thumbnail($posts->ID)
    );
    return $post;
}

?>

<?php get_header(); ?>
    <div class='echo'>
        <?= post_data(0)['title'] ?>
    </div>
    <?php wp_footer(); ?>
</body>
</html>