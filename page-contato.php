<?php 
// Template Name: Contato
$style = get_stylesheet_directory_uri(); ?>

<?php get_header(); ?>

<div class='title-notices'>
	<div class='container'>
		<h1>Contato</h1>
	</div>
</div>

<section class='contato'>
    <div class='container'>
      <div class='form-contact'>
        <p>Para informações, dúvidas ou assessoria de imprensa, nos envie um e-mail pelo formulário abaixo!</p>
        <form action="">
          <label for="name">Nome</label>
          <input type="text" id='name' name='name'>
          <label for="email">E-mail</label>
          <input type="email" id='email' name='email'>
          <label for="tel">Telefone</label>
          <input type="tel" id='tel' name='tel'>
          <label for="msg">Mensagem</label>
          <textarea name="msg" id="msg" cols="30" rows="10"></textarea>
          <button class='submit' type='submit'>Enviar</button>
        </form>
      </div>
      <div class='box-contact footer-contact'>
        <p>Av. Osvaldo Cruz, 74, Cidade Nova
        <br>
        Ilhéus-BA, 45652-130</p>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3857.6341762610487!2d-39.03609718531679!3d-14.789623889682293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7390a59e33877cf%3A0x2bdeb79a96727ddc!2sAv.%20Osvaldo%20Cruz%2C%2074%20-%20Cidade%20Nova%2C%20Ilh%C3%A9us%20-%20BA%2C%2045652-570!5e0!3m2!1spt-BR!2sbr!4v1631675928879!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        <a type='tel' href="tel:+5501173982446162">(73) 98244 6162</a>
        <a href="email" href='mailto:comunicacao@barcelonafc.com.br'>comunicacao@barcelonafc.com.br</a>
      </div>
    </div>
</section>


<?php get_footer(); ?>