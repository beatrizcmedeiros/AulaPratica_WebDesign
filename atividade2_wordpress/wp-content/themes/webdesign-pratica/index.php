<?php get_header(); ?>
<main class="content">
  <div class="container post-list">
    <h2>Publicações</h2>
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <div><?php the_excerpt(); ?></div>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <p>Nenhum conteúdo encontrado.</p>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>
