<?php get_header(); ?>

<main id="main" class="site-main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </header><!-- .entry-header -->

            <div class="entry-content">
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?>
            </div><!-- .entry-content -->

            <footer class="entry-footer">
                <?php
                // Display post meta information
                food_post_meta();
                ?>
            </footer><!-- .entry-footer -->
        </article><!-- #post-<?php the_ID(); ?> -->

    <?php endwhile; ?>

</main><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>