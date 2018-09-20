<?php get_header('principal'); ?>

<main id="edital" class='container'>
  <!--Inserir conteúdo-->
  <section id="breadcrumbs">Você está em: <a href="/sitiosead/editais">Editais</a> > <span><?php the_title(); ?></span></section>
  <h1><?php the_title(); ?></h1>
  <section id="informacoes">
    <div>
      <em>Curso: </em><?php echo strip_tags(get_the_term_list($post->ID, 'curso')); ?><br>
      <em>Formação/nível: </em><?php echo strip_tags(get_the_term_list($post->ID, 'tipo-de-curso')); ?><br>
      <em>Atribuição: </em><?php echo strip_tags(get_the_term_list($post->ID, 'atribuicao')); ?><br>
    </div><!--
    --><div id="descricao">
      <em>Descrição: </em><?php the_excerpt(); ?><br>
    </div>
  </section>
  <section id="anexos" class="secao-edital">
    <h2>Anexos</h2>
    <?php the_content(); ?>
    <!--            <ul>
                    <li>Edital 001/2017, publicado em 13/02/2017</li>
                    <li><a href=""><i class="fas fa-file-download"></i>Edital 001/2017 - errata, publicado em 13/02/2017</a></li>
                    <li><a href=''><i class="fas fa-file-download"></i>Resultado parcial da etapa, publicado em 13/02/2017</a></li>
                </ul>-->
  </section>

  <section id="inscricao" class="secao-edital">
    <h2>Inscrição</h2>
    <p>Inscrições, retificações e resultados deste edital estão disponíveis no Sistema de Seleção.</p>
    <a role="button" href='http://selecao.neaad.ufes.br/visao/login.php'>Acessar Sistema de Seleção</a>
  </section>

</main>

<?php get_footer(); ?>