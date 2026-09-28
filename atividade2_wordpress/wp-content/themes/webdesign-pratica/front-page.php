<?php get_header(); ?>

<main>
  <section class="hero">
    <div class="container">
      <h2 class="hero-title"><?php bloginfo('name'); ?></h2>
      <p><?php bloginfo('description'); ?></p>
    </div>
  </section>

  <section class="content">
    <div class="container">
      <?php
        // Se uma página estática foi definida como inicial (Configurações > Leitura)
        // e tem conteúdo, exibe o texto editado no painel.
        $tem_conteudo = false;
        if (is_page()) :
          while (have_posts()) : the_post();
            if (trim(get_the_content()) !== '') :
              $tem_conteudo = true;
      ?>
              <article <?php post_class('page-content'); ?>>
                <?php the_content(); ?>
              </article>
      <?php
            endif;
          endwhile;
        endif;

        // Sem página estática (ou página vazia): mostra o conteúdo padrão do tema.
        if (!$tem_conteudo) :
      ?>
        <h2>Bem-vindo ao CMS</h2>
        <p>
          Esta página inicial foi criada em um tema personalizado para demonstrar
          instalação, ativação e estilização de um site em WordPress.
        </p>
      <?php endif; ?>

      <div class="cards">
        <article class="card">
          <h3>Conteúdo</h3>
          <p>Gerencie páginas e posts pelo painel administrativo.</p>
        </article>
        <article class="card">
          <h3>Tema</h3>
          <p>Personalize identidade visual e navegação.</p>
        </article>
        <article class="card">
          <h3>Banco de dados</h3>
          <p>Conteúdo e configurações ficam armazenados no MySQL.</p>
        </article>
      </div>

      <?php
        // Últimos posts publicados
        $ultimos = new WP_Query([
          'posts_per_page'      => 3,
          'ignore_sticky_posts' => true,
        ]);
        if ($ultimos->have_posts()) :
      ?>
        <section class="latest-posts post-list">
          <h2>Últimas publicações</h2>
          <?php while ($ultimos->have_posts()) : $ultimos->the_post(); ?>
            <article>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <div><?php the_excerpt(); ?></div>
            </article>
          <?php endwhile; ?>
        </section>
      <?php
        endif;
        wp_reset_postdata();
      ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
