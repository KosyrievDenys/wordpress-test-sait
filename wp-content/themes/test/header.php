<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset='<?php bloginfo('charset') ?>'>
  <meta name='viewport'
        content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
  <meta http-equiv='X-UA-Compatible' content='ie=edge'>
  <title>test-wordpress</title>

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<header class='header'>
  <div class='container'>
    <div>
      <a href='<?php echo home_url() ?>' class='logo'><?php bloginfo('name') ?></a>
      <p>Header</p>
      <nav>
        <?php
          wp_nav_menu([
            'theme_location' => 'top ',
            'container' => null,
            'item_wrap' => '<ul>%3$s</ul>',
          ]);
        ?>
      </nav>
    </div>
    <?php if (!is_page() && is_active_sidebar('sidebar-top')): ?>
      <div>
        <?php dynamic_sidebar('sidebar-top') ?>
      </div>
    <?php endif; ?>
  </div>
</header>