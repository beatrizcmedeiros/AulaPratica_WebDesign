<?php get_header(); ?>
<main class="content">
  <div class="container">
    <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class('single-post'); ?>>
        <h1><?php the_title(); ?></h1>
        <p class="post-meta">
          Publicado em <?php echo esc_html(get_the_date()); ?>
          por <?php the_author(); ?>
        </p>

        <?php if (has_post_thumbnail()) : ?>
          <div class="post-thumbnail"><?php the_post_thumbnail('large'); ?></div>
        <?php endif; ?>

        <?php the_content(); ?>
      </article>

      <nav class="post-navigation" aria-label="Navegação entre posts">
        <?php previous_post_link('%link', '&larr; %title'); ?>
        <?php next_post_link('%link', '%title &rarr;'); ?>
      </nav>

      <?php
        if (comments_open() || get_comments_number()) {
          comments_template();
        }
      ?>
    <?php endwhile; ?>
  </div>
</main>
<?php get_footer(); ?>
