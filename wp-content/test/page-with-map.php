<?php
	/*
   Template Name: Контент на фоні карти.
	Template post type: post, page
	*/
?>

<?php get_header(); ?>

  <main class='main'>
    <div>
		<?php the_post(); ?>
      <article>
        <div>КАРТА</div>
        <h2><?php the_title() ?></h2>
        <div><?php the_content(); ?></div>
      </article>
    </div>
  </main>

<?php get_footer(); ?>