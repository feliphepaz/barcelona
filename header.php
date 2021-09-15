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
                        <li><a href="https://www.facebook.com/barcelona.ilheus.18" target='_blank'><img src="<?= $style ?>/img/facebook.svg" alt=""></a></li>
                        <li><a href="https://www.instagram.com/barcelonailheus/" target='_blank'><img src="<?= $style ?>/img/instagram.svg" alt=""></a></li>
                        <li><a href="https://twitter.com/barcelonafcne" target='_blank'><img src="<?= $style ?>/img/tweet.svg" alt=""></a></li>
                    </ul>
                </div>
                <nav class='menu-nav'>
                    <ul class='menu'>
                        <li><a href="/barcelona/">Início</a></li>
                        <li data-dropdown><a href="/barcelona/sobre/">Institucional</a>
                            <ul class='dropdown-menu'>
                                <li><a href="/barcelona/noticias/">Notícias</a></li>                                
                                <li><a href="/barcelona/sobre/">Quem somos</a></li>
                                <li><a href="/barcelona/sobre/#historia">Nossa história</a></li>
                                <li><a href="/barcelona/elenco/">Elenco</a></li>
                                <li><a href="/barcelona/comissao-tecnica/">Comissão técnica</a></li>
                            </ul>
                        </li>
                        <li data-dropdown><a href="/barcelona/partidas/">Partidas</a>
                            <ul class='dropdown-menu'>
                                <li><a href="#">Comprar ingressos</a></li>
                                <li><a href="/barcelona/partidas/">Próximas partidas</a></li>
                            </ul>
                        </li>
                        <li data-dropdown><a href="/barcelona/contato/">Contato</a>
                            <ul class='dropdown-menu'>
                                <li><a href="/barcelona/contato/">Entre em contato</a></li>
                                <li><a href="/barcelona/#faca-parte">Seja sócio</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class='cta-visite'>
                <a class='cta' href="/barcelona/#faca-parte">Faça parte</a>
                <a class='visit' href="#">Visite a nossa loja</a>
            </div>
            <button class='menu-mobile-btn'><img src="<?= $style ?>/img/open.svg" alt=""></button>
        </div>
        <nav class='menu-mobile'>
            <ul>
                <li><a href="/barcelona/">Início</a></li>
                <li><a href="/barcelona/sobre/">Institucional</a>
                    <ul class='dropdown-menu-mobile'>
                        <li><a href="/barcelona/noticias/">Notícias</a></li>                                
                        <li><a href="/barcelona/sobre/">Quem somos</a></li>
                        <li><a href="/barcelona/sobre/#historia">Nossa história</a></li>
                        <li><a href="/barcelona/elenco/">Elenco</a></li>
                        <li><a href="/barcelona/comissao-tecnica/">Comissão técnica</a></li>
                    </ul>
                </li>
                <li><a href="/barcelona/partidas/">Partidas</a>
                    <ul class='dropdown-menu-mobile'>
                        <li><a href="#">Comprar ingressos</a></li>
                        <li><a href="/barcelona/partidas/">Próximas partidas</a></li>
                    </ul>
                </li>
                <li><a href="/barcelona/contato/">Contato</a>
                    <ul class='dropdown-menu-mobile'>
                        <li><a href="/barcelona/contato/">Entre em contato</a></li>
                        <li><a href="/barcelona/#faca-parte">Seja sócio</a></li>
                    </ul>
                </li>
                <li><a class='cta' href="/barcelona/#faca-parte">Faça parte</a></li>
                <li><a class='visit' href="#">Visite a nossa loja</a></li>
            </ul>
        </nav>
    </header>