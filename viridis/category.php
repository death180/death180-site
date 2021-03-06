<?php get_header(); ?>
  <section id="main" role="main">
  <div>
    <h1 class="archive-title"><?php single_cat_title(); ?></h1>
    <?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
  </div>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'entry' ); ?>
  <?php endwhile; endif; ?>
  <?php get_template_part( 'nav', 'below' ); ?>
  </section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
