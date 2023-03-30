<?php
  /*
   Template Name: Home
  */
?>
<?php //get_header(); ?>

  <main class='main'>
    <!--    <div>-->
    <!--      --><?php //if (have_posts()) :
      //        while (have_posts()) : the_post(); ?>
    <!--          <article>-->
    <!--            <a href='--><?php //the_title() ?><!--'>-->
    <!--              --><?php //the_post_thumbnail('medium') ?>
    <!--            </a>-->
    <!--            <h2>--><?php //the_title() ?><!--</h2>-->
    <!--            <p>--><?php //echo CFS()->get('intro') ?><!--</p>-->
    <!--          </article>-->
    <!--        --><?php //endwhile; ?>
    <!--      --><?php //else: ?>
    <!--        There are no records!-->
    <!--      --><?php //endif; ?>
    <!--    </div>-->
    <!--    --><?php //the_posts_pagination(); ?>
    <?php
      wp_nav_menu([
        //        Надійніше зареєструвати зону в function.php, але можна і так
        'theme_location' => 15,
        'container' => null,
        'item_wrap' => '<ul>%3$s</ul>',
      ]);
    ?>
    <section id='app'>
      <h2>Залишити заявку</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium amet autem commodi cum ea, explicabo
        harum id libero nostrum officia ratione repellat rerum tempora ut velit vero! At dolorum esse laboriosam nemo
        reprehenderit voluptates! Amet aspernatur cupiditate eos et fugit id incidunt laborum nam nesciunt nostrum,
        perferendis quibusdam recusandae?
      </p>
    </section>
    <section id='text'>
      <h2>Опис</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium amet autem commodi cum ea, explicabo
        harum id libero nostrum officia ratione repellat rerum tempora ut velit vero! At dolorum esse laboriosam nemo
        reprehenderit voluptates! Amet aspernatur cupiditate eos et fugit id incidunt laborum nam nesciunt nostrum,
        perferendis quibusdam recusandae?
      </p>
    </section>
    <section id='about'>
      <h2>Про товар</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium amet autem commodi cum ea, explicabo
        harum id libero nostrum officia ratione repellat rerum tempora ut velit vero! At dolorum esse laboriosam nemo
        reprehenderit voluptates! Amet aspernatur cupiditate eos et fugit id incidunt laborum nam nesciunt nostrum,
        perferendis quibusdam recusandae?
      </p>
    </section>
    <section id='reviews'>
      <?php $posts = test_show_reviews() ?>
      <h2>Відгуки</h2>
      <?php foreach ($posts as $post): ?>
        <div>
          <div><?php echo $post->post_title ?></div>
          <div><?php echo $post->post_content ?></div>
        </div>
      <?php endforeach; ?>
<!--      <p>-->
<!--        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium amet autem commodi cum ea, explicabo-->
<!--        harum id libero nostrum officia ratione repellat rerum tempora ut velit vero! At dolorum esse laboriosam nemo-->
<!--        reprehenderit voluptates! Amet aspernatur cupiditate eos et fugit id incidunt laborum nam nesciunt nostrum,-->
<!--        perferendis quibusdam recusandae?-->
<!--      </p>-->
    </section>
  </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>