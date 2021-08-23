<?php 
// Template Name: Home
$style = get_stylesheet_directory_uri();

function post_data($arg) {
    $posts = get_posts()[$arg];
    $post = array(
    'id' => $posts->ID,
    'title' => $posts->post_title,
    'content' => $posts->post_content,
    'image' => get_the_post_thumbnail_url($posts->ID),
    'date' => $posts->post_date_gmt
    );
    return $post;
}

?>

<?php get_header(); ?>
    <section class='banners'>
        <div class='container'>
            <a class='banner' href="" data-link='<?= post_data(0)['image']; ?>'>
                <legend><?= post_data(0)['date'] ?></legend>
                <h2><?= post_data(0)['title']; ?></h2>
            </a>

            <a class='banner' href="" data-link='<?= post_data(1)['image']; ?>'>
                <legend><?= post_data(1)['date'] ?></legend>
                <h2><?= post_data(1)['title']; ?></h2>
            </a>
        </div>
    </section>

    <section class='match'>
        <div class='container'>
            <div class='match-data'>
                <p class='league'>Campeonato Baiano</p>
                <p class='stadium'>Estádio Mario Pessoa</p>
                <div class='versus'>
                    <img src="<?= $style; ?>/img/barcelona_match.png" alt="">
                    <span>X</span>
                    <img src="<?= $style; ?>/img/olimpia_match.png" alt="">
                </div>
                <p class='date'>11 de Agosto</p>
            </div>

            <div class='divide'></div>

            <div class='match-day'>
                <p class='rest'>Faltam</p>
                <div class='day'>
                    <p><span class='number'></span> <span class='atr'>D</span></p>
                    <p><span class='number'></span> <span class='atr'>H</span></p>
                    <p><span class='number'></span> <span class='atr'>M</span></p>
                    <p><span class='number'></span> <span class='atr'>S</span></p>
                </div>
                <a class='cta' href="">Comprar Ingressos</a>
            </div>
        </div>
    </section>
<?php get_footer(); ?>