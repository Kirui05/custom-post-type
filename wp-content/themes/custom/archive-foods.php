<?php
get_header(); ?>

<main id="main" class="site-main" role="main">

    <header class="page-header">
        <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
    </header><!-- .page-header -->

    <?php if ( have_posts() ) : ?>

        <div class="post-list">

            <?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
                    </header><!-- .entry-header -->

                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div><!-- .entry-summary -->
                </article><!-- #post-## -->

            <?php endwhile; ?>

        </div><!-- .post-list -->

    <?php endif; ?>

</main><!-- .site-main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
