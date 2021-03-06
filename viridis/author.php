<?php get_header(); ?>
  <section id="main" role="main">
  <div>
    <?php the_post(); ?>
    <h1 class="archive-title author"><?php _e( 'Author Archives', 'blankslate' ); ?>: <?php the_author_link(); ?></h1>
    <?php if ( '' != get_the_author_meta( 'user_description' ) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . get_the_author_meta( 'user_description' ) . '</div>' ); ?>
    <?php rewind_posts(); ?>
  </div>
  <?php while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'entry' ); ?>
  <?php endwhile; ?>
  <?php get_template_part( 'nav', 'below' ); ?>
  </section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
