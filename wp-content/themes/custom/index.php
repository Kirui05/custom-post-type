<?php get_header(); ?>

<main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : ?>

        <?php if ( is_home() && ! is_front_page() ) : ?>
            <header>
                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
            </header>
        <?php endif; ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <?php
            // Check if post type is "foods"
            if ( 'foods' == get_post_type() ) :
                get_template_part( 'template-parts/content', 'foods' );
            else :
                get_template_part( 'template-parts/content', get_post_format() );
            endif;
            ?>

        <?php endwhile; ?>

        <?php the_posts_navigation(); ?>

    <?php else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

</main><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
