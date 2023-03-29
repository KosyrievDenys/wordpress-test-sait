<?php
  /*
   Template Name: Home
  */
?>
<?php get_header(); ?>

  <main class='main'>
    <div>
      <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
          <article>
            <a href='<?php the_title() ?>'>
              <?php the_post_thumbnail('medium') ?>
            </a>
            <h2><?php the_title() ?></h2>
            <p><?php echo CFS()->get('intro') ?></p>
          </article>
        <?php endwhile; ?>
      <?php else: ?>
        There are no records!
      <?php endif; ?>
    </div>
    <?php the_posts_pagination(); ?>
  </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>