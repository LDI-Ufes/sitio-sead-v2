<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Secretaria de Ensino a Distância - Ufes</title>

    <!-- Contexto do órgão no Portal de Serviços -->
    <meta property="creator.productor" content="http://estruturaorganizacional.dados.gov.br/id/unidade-organizacional/425">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/sead-v2/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/sead-v2/css/index.css">
    
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,600,700" rel="stylesheet"> <!-- Conferir necessidade de variações -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  </head>
  <body>
    <header>

      <?php include 'components/barra-acessibilidade.php' ?>
      <?php include 'components/barra-brasil.php' ?>
      <?php include 'components/topoPrincipal.php' ?>    

    </header>
    <main>
        <section id="ead-na-ufes">
            <h2>Você conhece o EaD da Ufes?</h2>
            <p>Nós somos a Secretaria responsável por promover ações educativas e de formação da EaD na Ufes. Fique atento aos editais para mais informações de cada curso!</p>
            <div class="topico-ead">
                <figure>
                    <?php include 'svg/ingresso.svg' ?>
                    <figcaption>Ingresso</figcaption>
                </figure>
                <p>O ingresso na EaD da Ufes ocorre por processos seletivos ou editais.</p>
            </div>
            <div class="topico-ead">
                <figure>
                    <?php include 'svg/ava.svg' ?>
                    <figcaption>AVA</figcaption>
                </figure>
                <p>Ambiente Virtual de Aprendizagem onde acontece a interação e distribuição do conteúdo das disciplinas.</p>
            </div>
            <div class="topico-ead">
                <figure>
                    <?php include 'svg/polos-uab.svg' ?>
                    <figcaption>Polos UAB</figcaption>
                </figure>
                <p>Os encontros semanais acontecem nos diversos polos municipais do Estado.</p>
            </div>
        </section>
       
        <aside>
            <?php include 'components/ultimos-editais.php' ?>
        </aside>
        

        <section id="quer-ser">
            <div id="quer-ser-titulo"><div class="content"><h2>Quer ser aluno?</h2><h2>Quer ser um colaborador?</h2></div></div>
            <div id="quer-ser-itens">
                <ul><div class="content">
                    <li>
                        <div class="numero">1</div><a class="instrucao">Veja como funciona a EaD da Ufes<i class="fas fa-external-link-square-alt"></i></a>
                    </li>
                    <li>
                        <div class="numero">2</div><a class="instrucao">Fique de olho nos próximos editais<i class="fas fa-external-link-square-alt"></i></a>
                    </li></div>
                </ul>
            </div>
        </section>


        <section id="noticias">
            <?php           
            $latest_posts = new WP_Query( array( 'posts_per_page' => 4 ) );
            
            if ( $latest_posts->have_posts() ) : while ( $latest_posts->have_posts() ) : $latest_posts->the_post(); ?>
            <div class="noticia">
                <?php the_post_thumbnail( ); ?>
                <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php esc_html_e( 'Sem notícias.' ); ?></p>
            <?php endif; ?>
<!--            <div class="noticia">
                <img src="https://www.eadufes.org/site/wp-content/uploads/2018/06/IMG_20180621_212726229.jpg">
                <h3>Polo UAB de Montanha realiza Seminário da Disciplina de Linguagem V</h3>
            </div>
            <div class="noticia">
                <img src="https://www.eadufes.org/site/wp-content/uploads/2018/06/IMG_20180621_212726229.jpg">
                <h3>Polo UAB de Montanha realiza Seminário da Disciplina de Linguagem V</h3>
            </div>
            <div class="noticia">
                <img src="https://www.eadufes.org/site/wp-content/uploads/2018/06/IMG_20180621_212726229.jpg">
                <h3>Polo UAB de Montanha realiza Seminário da Disciplina de Linguagem V</h3>
            </div>
            <div class="noticia">
                <img src="https://www.eadufes.org/site/wp-content/uploads/2018/06/IMG_20180621_212726229.jpg">
                <h3>Polo UAB de Montanha realiza Seminário da Disciplina de Linguagem V</h3>
            </div>-->
            <div class="confira-mais">
                <h2>Confira mais do que acontece nos polos</h2>
                <button title="Visite o Facebook da Sead"><i class="fab fa-facebook-f"></i></button>
                <button title="Vá para a página Blog"><?php include 'svg/nossoBLOG.svg'?></button>
            </div>
        </section>
        
        <section id="polos">
            <?php include 'svg/mapaInicio.svg' ?>
            <h2>A EaD está presente em todo o estado!</h2>
            <p>Atualmente a Ufes oferta cursos EaD em 27 Polos Municipais de Apoio Presencial – UAB.</p>
            <a href="/sitiosead/polos">Conheça nossos polos!</a>
        </section>
    </main>
      
    <?php include 'components/rodape.php' ?>  
    <script defer="defer" src="//barra.brasil.gov.br/barra.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo site_url(); ?>/wp-content/themes/sead-v2/js/altoContraste.js"></script>
    <script src="<?php echo site_url(); ?>/wp-content/themes/sead-v2/js/menu.js"></script>
  </body>
</html>
