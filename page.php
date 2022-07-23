<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package natejonah
 */

get_header();

?>
	<main class="py-5">

		<div class="container">
            <?php
            while ( have_posts() ) :
                the_post();

            ?>

                <article>
                    <header class="page-header">
                        <h1><?php the_title(); ?></h1>
                    </header>

                    <?php the_post_thumbnail(); ?>

                    <div class="entry-content">
                        <?php
                        the_content();

                        ?>
                    </div><!-- .entry-content -->

                    
                </article><!-- #post-<?php the_ID(); ?> -->

            <?php		
            endwhile; // End of the loop.
            ?>
        </div>

	</main><!-- #main -->

<?php get_footer();
