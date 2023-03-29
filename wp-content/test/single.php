<?php get_header(); ?>

  <main class='main'>
    <div>
      <?php the_post(); ?>
      <article>
        <a href='<?php the_title() ?>'>
          <?php the_post_thumbnail('large') ?>
        </a>
        <h2><?php the_title() ?></h2>
        <div><?php the_content(); ?></div>
      </article>
    </div>
  </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>