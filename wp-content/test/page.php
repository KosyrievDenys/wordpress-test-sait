<?php get_header(); ?>

  <main class='main'>
    <div>
      <?php the_post(); ?>
      <article>
        <h2><?php the_title() ?></h2>
        <div><?php the_content(); ?></div>
      </article>
    </div>
  </main>
<?php get_footer(); ?>