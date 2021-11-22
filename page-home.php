<?php 
// Template Name: Home
$style = get_stylesheet_directory_uri();

function post_data($arg) {
    $posts = get_posts([
        'numberposts' => 8
      ])[$arg];
    $post = array(
    'id' => $posts->ID,
    'title' => $posts->post_title,
    'content' => $posts->post_content,
    'image' => get_the_post_thumbnail_url($posts->ID),
    'date' => $posts->post_date,
    'link' => get_post_permalink($posts->ID)
    );
    return $post;
}

?>

<?php get_header(); ?>
<div id="loading"></div>
    <section class='banners'>
        <div class='container'>
            <a class='banner' id='0' href="<?= post_data(0)['link'] ?>" data-link='<?= post_data(0)['image']; ?>'>
                <legend><?= post_data(0)['date'] ?></legend>
                <h2><?= post_data(0)['title']; ?></h2>
            </a>

            <a class='banner' id='1' href="<?= post_data(1)['link'] ?>" data-link='<?= post_data(1)['image']; ?>'>
                <legend><?= post_data(1)['date'] ?></legend>
                <h2><?= post_data(1)['title']; ?></h2>
            </a>
        </div>
    </section>

    <section class='match'>
        <div class='container'>
            <div class='match-data'>
                <p class='league'><?= get_post_meta(get_the_ID(), 'campeonato', true); ?></p>
                <p class='stadium'><?= get_post_meta(get_the_ID(), 'estadio', true); ?></p>
                <div class='versus' data-day='<?= get_post_meta(get_the_ID(), 'data', true); ?>' data-time='<?= get_post_meta(get_the_ID(), 'horario', true); ?>' data-adversary='<?= get_post_meta(get_the_ID(), 'adversario', true); ?>' data-out='<?= get_post_meta(get_the_ID(), 'casa', true); ?>' data-soon='<?= get_post_meta(get_the_ID(), 'soon', true); ?>' >
                    <img src="<?= $style; ?>/img/logo.png" alt="">
                    <span>X</span>
                    <img src="<?= $style; ?>" alt="">
                </div>
                <p class='date'></p>
            </div>

            <div class='divide'></div>

            <div class='match-day'>
                <p class='rest'>Faltam</p>
                <div class='day'>
                    <p><span class='number'></span> <span class='atr'>D</span></p>
                    <p><span class='number'></span> <span class='atr'>H</span></p>
                    <p><span class='number'></span> <span class='atr'>M</span></p>
                    <p><span class='number'></span> <span class='atr'>S</span></p>
                    <h2 class='soon' style='display: none;'>Qual será o próximo jogo?</h2>
                </div>
                <a class='cta' href="<?= get_post_meta(get_the_ID(), 'link', true); ?>" target='_blank'>Comprar Ingressos</a>
            </div>
        </div>
    </section>

    <section class='notices'>
        <div class='container'>
            <div class='col1'>
                <a class='banner' href="<?= post_data(2)['link'] ?>" data-link='<?= post_data(2)['image']; ?>'>
                    <legend><?= post_data(2)['date'] ?></legend>
                    <h2><?= post_data(2)['title']; ?></h2>
                </a>
                <a class='banner' href="<?= post_data(3)['link'] ?>" data-link='<?= post_data(3)['image']; ?>'>
                    <legend><?= post_data(3)['date'] ?></legend>
                    <h2><?= post_data(3)['title']; ?></h2>
                </a>
                <a class='banner' href="<?= post_data(4)['link'] ?>" data-link='<?= post_data(4)['image']; ?>'>
                    <legend><?= post_data(4)['date'] ?></legend>
                    <h2><?= post_data(4)['title']; ?></h2>
                </a>
            </div>
            <div class='col2'>
                <a class='banner' href="<?= post_data(5)['link'] ?>" data-link='<?= post_data(5)['image']; ?>'>
                    <legend><?= post_data(5)['date'] ?></legend>
                    <h2><?= post_data(5)['title']; ?></h2>
                </a>
                <a class='banner' href="<?= post_data(6)['link'] ?>" data-link='<?= post_data(6)['image']; ?>'>
                    <legend><?= post_data(6)['date'] ?></legend>
                    <h2><?= post_data(6)['title']; ?></h2>
                </a>
                <a class='banner' href="<?= post_data(7)['link'] ?>" data-link='<?= post_data(7)['image']; ?>'>
                    <legend><?= post_data(7)['date'] ?></legend>
                    <h2><?= post_data(7)['title']; ?></h2>
                </a>
            </div>
            <div class='more-notices'>
                <a href="/barcelona/noticias/"><span>+</span> Notícias</a>
            </div>
        </div>
    </section>

    <section class='videos'>
        <div class='container'>
            <h2 class='title'>TV Barça</h2>
            <div class='videos-content'>
                <div class='col1'>
                    <iframe src="https://www.youtube.com/embed/" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe src="https://www.youtube.com/embed/" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class='col2'>
                    <iframe src="https://www.youtube.com/embed/" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe src="https://www.youtube.com/embed/" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe src="https://www.youtube.com/embed/" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class='more-videos'>
                <a href="https://www.youtube.com/channel/UCzWBYu-vXwIy6Zd5Bs0K2Uw" target='_blank'><span>+</span> Para mais vídeos, se <span>inscreva</span> na TV Barça</a>
            </div>
        </div>
    </section>

    <section class='be-part' id='faca-parte'>
        <div class='container'>
            <div class='be-part-img'>
                <img src="<?= $style; ?>/img/bfc-onca.png" alt="">
            </div>
            <div class='form-container'>
                <h2 class='title'>Faça parte da nossa história</h2>
                <form action="">
                    <div class='form-content form-basic'>
                        <div>
                            <label for="">Nome</label>
                            <input type="text">
                            <label for="">E-mail</label>
                            <input type="text">
                            <label for="">Cidade</label>
                            <input type="text">
                        </div>
                        <div>
                            <label for="">CPF</label>
                            <input type="text">
                            <label for="">Telefone</label>
                            <input type="text">
                            <label for="">Estado</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class= 'options'>
                        <h2>Como você gostaria de participar do Barcelona?</h2>
                        <div class='options-flex'>
                            <div>
                                <button id='business'>Com a minha empresa</button>
                                <button id='partner'>Como sócio torcedor</button>
                            </div>
                            <div>
                                <button id='player'>Como jogador</button>
                                <button id='voluntary'>Como voluntário</button>
                            </div>
                            <button id='manager'>Como empresário de jogador</button>
                        </div>
                    </div>
                    <div class='modal' id='business-mod'>
                        <div class='form-content'>
                            <div>
                                <label for="">Nome da Empresa</label>
                                <input type="text">
                            </div>
                            <div>
                                <label for="">CNPJ</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class='input-full'>
                            <label for="contribution">Forma de Contribuição</label>
                            <select name="contribution" id="contribution">
                                <option value="patrocinio">Patrocínio</option>
                                <option value="apoio">Apoio</option>
                            </select>
                        </div>
                        <button class='submit' type='submit'>Enviar</button>
                    </div>

                    <div class='modal' id='partner-mod'>
                        <div class='input-full'>
                            <label for="">Data de Nascimento</label>
                            <input type="date">
                        </div>
                        <button class='submit' type='submit'>Enviar</button>
                    </div>

                    <div class='modal' id='player-mod'>
                        <div class='form-content'>
                            <div>
                                <label for="">Data de Nascimento</label>
                                <input type="date">
                            </div>
                            <div>
                                <label for="">Posição</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class='input-full'>
                            <label for="">Já jogou em alguma equipe profissional?</label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        <button class='submit' type='submit'>Enviar</button>
                    </div>

                    <div class='modal' id='voluntary-mod'>
                        <div class='input-full'>
                            <label for="">Data de Nascimento</label>
                            <input type="date">
                        </div>
                        <div class='input-full'>
                            <label for="">Em que área você quer atuar?</label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        <button class='submit' type='submit'>Enviar</button>
                    </div>

                    <div class='modal' id='manager-mod'>
                        <div class='input-full'>
                            <label for="">Nome da Empresa</label>
                            <input type="text">
                        </div>
                        <div class='input-full'>
                            <label for="">Descreva o seu interesse</label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        <button class='submit' type='submit'>Enviar</button>
                    </div>

                </form>
            </div>

        </div>
    </section>
<?php get_footer(); ?>