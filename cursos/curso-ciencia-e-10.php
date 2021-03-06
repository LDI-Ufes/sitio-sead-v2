<main class='page curso' id="conteudoPrincipal">

  <section class="curso-destaque"><?php the_post_thumbnail() ?></section>

  <section id='info-curso'> 
    <div class="container"> 
      <div class='breadcrumb'>Você está em: <a href='<?php echo site_url(); ?>/cursos'>Cursos</a><i class='fas fa-greater-than'></i><span>Ciência é 10!</span></div> 
 
      <h1>Ciência é 10!</h1> 
 
      <div class="colunas"> 
 
      <p class='coluna1 objetivo'>O público-alvo do curso Especialização em Ensino de Ciências - Ciência é 10! são professores graduados que estão atuando no sistema público de ensino e ministrando aulas de Ciências no Ensino Fundamental dos anos finais (Fundamental II).</p>  
 
        <div class="coluna2"> 
          <p> 
          <strong>Nível: </strong>Especialização<br/> 
            <strong>Duração: </strong>18 meses<br/> 
            <strong>Modalidade: </strong>Semipresencial<br/> 
          </p> 
          <p class="situacao"><strong>Situação: </strong><br>
          <?php $situacaoCurso = get_post_custom_values('situacao'); if ($situacaoCurso != "") { echo $situacaoCurso[0]; } ?>
          </p>  
        </div> 
      </div> 
    </div> 
  </section> 
 
    <section id='conteudo-curso' class='container colunas'> 
 
      <aside class="coluna2"> 
         
        <div class='menu'> 
          <h4>Navegue</h4> 
 
          <ul> 
            <!-- <li><a title="Mostrar perfil do egresso" href='#perfil-do-egresso'>Perfil do egresso</a></li>  -->
            <li><a title="Mostrar currículo" href='#curriculo'>Grade curricular</a></li> 
            <!-- <li><a title="Mostrar corpo docente" href='#corpo-docente'>Corpo docente</a></li>  -->
            <li><a title="Mostrar ofertas do curso" href='#ofertas-anteriores'>Ofertas</a></li> 
          </ul> 
        </div> 
 
        <h4>Contato</h4> 
 
        <p class="contato-curso"> 
        <strong>Jaqueline Ferreira Almeida</strong><br/> 
          <mail>ead.ensinodeciencias@ufes.br</mail> 
          <span><i class="fas fa-phone"></i>(27) 4009-2091</span> 
        </p> 
 
      </aside> 
 
      <div class="coluna1"> 
 
        <!-- <h2 id='perfil-do-egresso'>Perfil do egresso</h2>  -->
         
 
        <h2 id='curriculo'>Grade curricular</h2> 
        <p>Carga horária total: 480h</p> 
 
          <ul id="matriz"> 
          
          <li class='semestre'> 
            <h3>Módulo I - Para perguntar e experimentar, é só começar!</h3>
            <ul style="display: block;"> 
              <div class="rotulos-matriz"> 
                  <div>Disciplina</div> 
                  <div> 
                    <span class="desktop">Carga horária</span> 
                    <span class="mobile">C. hr.</span> 
                  </div> 
                </div>
                <li> 
                    <div>Uma introdução</div> 
                    <div>30h</div> 
                  </li> 
                  <li> 
                    <div>Começando a experimentar e a pensar no TCC</div> 
                    <div>60h</div> 
                  </li> 
                  <li> 
                    <div>Hora de perguntar e propor</div> 
                    <div>30h</div> 
                  </li> 
                  <li> 
                    <div>Na sala de aula</div> 
                    <div>30h</div> 
                  </li> 
            </ul> 
          </li>
          <li class='semestre'> 
            <h3>Módulo II - Para perguntar e responder, melhor saber!</h3> 
            <ul style="display: block;">  
              <div class="rotulos-matriz"> 
                  <div>Disciplina</div> 
                  <div> 
                    <span class="desktop">Carga horária</span> 
                    <span class="mobile">C. hr.</span> 
                  </div> 
                </div>
                <li> 
                    <div>TCC2: Fundamentos do projeto de investigação</div> 
                    <div>120h</div> 
                  </li> 
                  <li> 
                    <div>Investigação para o Ensino de Ciências</div> 
                    <div>120h</div> 
                  </li> 
                  <li> 
                    <div>Hora de perguntar e propor</div> 
                    <div>30h</div> 
                  </li> 
                  <li> 
                    <div>Na sala de aula</div> 
                    <div>30h</div> 
                  </li> 
            </ul> 
          </li>
          <li class='semestre'> 
            <h3>Módulo III - Se é para experimentar, vamos fazer!</h3>
            <ul style="display: block;"> 
              <div class="rotulos-matriz"> 
                  <div>Disciplina</div> 
                  <div> 
                    <span class="desktop">Carga horária</span> 
                    <span class="mobile">C. hr.</span> 
                  </div> 
                </div>
                <li> 
                    <div>TCC3: Projeto de investigação em sala de aula</div> 
                    <div>90h</div> 
                  </li> 
            </ul> 
          </li>
      </ul> 

      <h2 id='ofertas-anteriores'>Ofertas do curso</h2> 
 
      <h3>2019</h3> 
      <p><strong>Coordenação do Curso</strong><br/>Luciana Dias Thomaz</p> 
      <p><strong>Polos atendidos</strong><br/>Castelo, Itapemirim, Mantenópolis, Pinheiros, Santa Leopoldina, São Mateus, Venda Nova do Imigrante, Vila Velha.</p> 
  
    </section> 
 
  </div> 
 
  <section id='noticias-curso' class="secao-destacada"> 
    <?php $ultimas_noticias = new WP_Query(array( 
      'post_type' => 'noticia', 
      'posts_per_page' => 3, 
      'tax_query' => array( 
          array( 
              'taxonomy' => 'curso-noticia', 
              'field' => 'slug', 
              'terms' => 'Ciências é 10!', 
            ), 
        ), 
    )); 
 
    if ($ultimas_noticias->found_posts > 2) : ?> 
 
      <div class='container'> 
        <h2 class="titulo-destacado">Notícias do curso</h2> 
        <div class='cards-noticias-curso'> 
 
          <?php while ($ultimas_noticias->have_posts()) : $ultimas_noticias->the_post(); ?> 
            <a class='noticia' href='<?php the_permalink() ?>' title='Ir para notícia: <?php the_title(); ?>'> 
              <?php the_post_thumbnail(); ?> 
              <h3><?php the_title(); ?></h3> 
            </a> 
 
          <?php endwhile; wp_reset_postdata(); else : ?> 
 
        </div> 
      </div> 
 
    <?php endif; ?> 
  </section> 

</main>
