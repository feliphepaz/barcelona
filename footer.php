    <?php
    
    $style = get_stylesheet_directory_uri();
    
    ?>
    
    <footer class='footer'>
        <div class='container'>
            <div class='partners'>
                <p>Patrocinadores</p>
                <ul class='partners-itens'>
                    <li>
                        <a href="https://adilis.com.br/" target='_blank'><img src="<?= $style ?>/img/adilis.png" alt=""></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/drogariaboanovaitb/" target='_blank'><img src="<?= $style ?>/img/boanova.png" alt=""></a>
                    </li>
                </ul>   
            </div>
            <span class='divide'></span>
            <div class='footer-navegation'>
                <nav>
                    <h3>Institucional</h3>
                    <ul>
                        <li><a href="/barcelona/sobre/">Quem somos</a></li>
                        <li><a href="/barcelona/sobre/#historia">Nossa história</a></li>
                        <li><a href="/barcelona/elenco/">Elenco</a></li>
                        <li><a href="/barcelona/comissao-tecnica/">Comissão Técnica</a></li>
                    </ul>
                </nav>
                <nav>
                    <h3>Imprensa</h3>
                    <ul>
                        <li><a href="/barcelona/noticias/">Notícias</a></li>
                        <li><a href="https://www.youtube.com/channel/UCzWBYu-vXwIy6Zd5Bs0K2Uw" target='_blank'>TV Barça</a></li>
                        <li><a href="/barcelona/contato/">Contato</a></li>
                    </ul>
                </nav>
                <nav>
                    <h3>Clube</h3>
                    <ul>
                        <li><a href="#">Comprar ingressos</a></li>
                        <li><a href="/barcelona/proximas-partidas/">Próximas partidas</a></li>
                        <li><a href="/barcelona/#faca-parte">Seja sócio</a></li>
                    </ul>
                </nav>
                <nav>
                    <h3>Nossa loja</h3>
                    <ul>
                        <li><a href="">Camisas</a></li>
                        <li><a href="">Bonés</a></li>
                        <li><a href="">Kits/Treinamento</a></li>
                        <li><a href="">Acessórios</a></li>
                        <li><a href="">Outlet</a></li>
                    </ul>
                </nav>
                <nav>
                    <h3>Social</h3>
                    <ul>
                        <li><a href="https://www.facebook.com/barcelona.ilheus.18" target='_blank'>Facebook</a></li>
                        <li><a href="https://twitter.com/barcelonafcne" target='_blank'>Twitter</a></li>
                        <li><a href="https://www.instagram.com/barcelonailheus/" target='_blank'>Instagram</a></li>
                        <li><a href="https://www.youtube.com/channel/UCzWBYu-vXwIy6Zd5Bs0K2Uw" target='_blank'>YouTube</a></li>
                    </ul>
                </nav>
                <span class='divide-vert'></span>
                <div class='footer-contact'>
                    <h3>Contato</h3>
                    <p>
                        Av. Osvaldo Cruz, 74, Cidade Nova
                        <br>
                        Ilhéus-BA, 45652-130
                    </p>
                    <a type='tel' href="tel:+5501173982446162">(73) 98244 6162</a>
                    <a href='mailto:comunicacao@barcelonafc.com.br'>comunicacao@barcelonafc.com.br</a>
                </div>
            </div>
            <div class='footer-contact-mobile'>
                <h3>Contato</h3>
                <p>
                    Av. Osvaldo Cruz, 74, Cidade Nova
                    <br>
                    Ilhéus-BA, 45652-130
                </p>
                <a type='tel' href="tel:+5501173982446162">(73) 98244 6162</a>
                <a href='mailto:comunicacao@barcelonafc.com.br'>comunicacao@barcelonafc.com.br</a>
            </div>
        </div>
    </footer>

    <div class='copy'>
        <p>Barcelona Futebol Clube. 2021 Todos os direitos reservados.</p>
    </div>
    
    <?php wp_footer(); ?>
</body>
</html>