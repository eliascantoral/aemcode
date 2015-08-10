<?php get_header(); ?>
<div class="row">
    <aside class="col-xs-4 col-md-2">
      <?php get_categorylist();?>
    </aside>
    <section class="col-xs-14 col-sm-8 col-md-10" role="main">
        <header class="header">
        <h1 class="entry-title"><?php _e( 'Categoria: ', 'blankslate' ); ?><?php single_cat_title(); ?></h1>
        <?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
        </header>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>
        <?php endwhile; endif; ?>
        <?php get_template_part( 'nav', 'below' ); ?>
    </section>
</div>
<?php get_footer(); ?>