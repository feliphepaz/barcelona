<?php
$style = get_stylesheet_directory_uri();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barcelona</title>
    <link rel="stylesheet" href="<?= $style ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&family=Roboto+Mono:wght@700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body class='<?= wp_title(''); ?>'>
    <header class='header'>
        <div class='container'>
            <div class='logo'>
                <a href="/barcelona/"><img src="<?= $style ?>/img/logo.png" alt=""></a>
            </div>
            <div class='menu-redes'>
                <div class='redes'>
                    <p>Siga as nossas redes!</p>
                    <ul class='redes-lista'>
                        <li><a href=""><img src="<?= $style ?>/img/facebook.svg" alt=""></a></li>
                        <li><a href=""><img src="<?= $style ?>/img/instagram.svg" alt=""></a></li>
                        <li><a href=""><img src="<?= $style ?>/img/tweet.svg" alt=""></a></li>
                    </ul>
                </div>
                <nav class='menu-nav'>
                    <ul class='menu'>
                        <li><a href="">Início</a></li>
                        <li><a href="">Institucional</a></li>
                        <nav class='tooltip-one'>
                            <ul>
                                <li><a href="">Notícias</a></li>                                
                                <li><a href="">Quem somos</a></li>
                                <li><a href="">Nossa história</a></li>
                                <li><a href="">Elenco</a></li>
                                <li><a href="">Comissão técnica</a></li>
                            </ul>
                        </nav>
                        <li><a href="">Partidas</a></li>
                        <nav class='tooltip'>
                            <ul>
                                <li><a href="">Comprar ingressos</a></li>
                                <li><a href="">Próximas partidas</a></li>
                            </ul>
                        </nav>
                        <li><a href="">Contato</a></li>
                        <nav class='tooltip'>
                            <ul>
                                <li><a href="">Entre em contato</a></li>
                                <li><a href="">Seja sócio</a></li>
                            </ul>
                        </nav>
                    </ul>
                </nav>
            </div>
            <div class='cta-visite'>
                <a class='cta' href="">Faça parte</a>
                <a class='visit' href="">Visite a nossa loja</a>
            </div>
            <button class='menu-mobile-btn'><img src="<?= $style ?>/img/open.svg" alt=""></button>
        </div>
        <nav class='menu-mobile'>
            <ul>
                <li><a href="">Início</a></li>
                <li><a href="">Institucional</a></li>
                <li><a href="">Partidas</a></li>
                <li><a href="">Contato</a></li>
                <li><a class='cta' href="">Faça parte</a></li>
                <li><a class='visit' href="">Visite a nossa loja</a></li>
            </ul>
        </nav>
    </header>