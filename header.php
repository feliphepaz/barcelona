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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;900&family=Roboto+Mono:wght@700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header class='header'>
        <div class='container'>
            <div>
                <a href=""><img src="<?= $style ?>/img/logo.png" alt=""></a>
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
                <nav>
                    <ul class='menu'>
                        <li><a href="">Início</a></li>
                        <li><a href="">Institucional</a></li>
                        <li><a href="">Partidas</a></li>
                        <li><a href="">Contato</a></li>
                    </ul>
                </nav>
            </div>
            <div class='cta-visite'>
                <a class='cta' href="">Faça parte</a>
                <a href="">Visite a nossa loja</a>
            </div>
        </div>
    </header>