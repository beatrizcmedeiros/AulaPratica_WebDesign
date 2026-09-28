<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
  <div class="container">
    <div class="site-branding">
      <?php the_custom_logo(); ?>
      <?php
        // O nome do site só é <h1> na página inicial; nas demais o <h1> é o título da página.
        $tag_titulo = is_front_page() ? 'h1' : 'p';
      ?>
      <<?php echo $tag_titulo; ?> class="site-title">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <?php bloginfo('name'); ?>
        </a>
      </<?php echo $tag_titulo; ?>>
    </div>
    <nav aria-label="Menu principal">
      <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container' => false,
          'fallback_cb' => false,
        ]);
      ?>
    </nav>
  </div>
</header>
