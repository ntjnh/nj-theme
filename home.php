<?php
/**
 * The posts template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package natejonah
 */

get_header();

?>
    <h6 style="background-color: #ffe66b; margin: 0; padding: 4px;">home.php</h6>
	<main class="py-5">

		<div class="container">

            <h1 class="blog-title"><?php single_post_title(); ?></h1>

            <?php if ( have_posts() ) :

                query_posts('posts_per_page=3');

                while ( have_posts() ) :
                    the_post();
                ?>

                    <article class="pb-3">

                        <header class="entry-header">
                            <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

                            <div class="entry-meta">
                                <?php echo get_the_date(); ?>
                            </div>
                        </header>

                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>

                <?php endwhile;

            endif;
            
            the_posts_navigation(); ?>

        </div>

	</main>

<?php get_footer();
