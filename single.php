<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package natejonah
 */

get_header();

?>
	<main class="py-5">

		<div class="container">

            <?php if ( have_posts() ) :

                while ( have_posts() ) :
                    the_post();
                ?>

                    <article id="post-<?php the_ID(); ?>" class="pb-3">
                        <?php the_post_thumbnail(); ?>

                        <header class="entry-header">
                            <h1><?php the_title(); ?></h1>

                            <div class="entry-meta pb-3">
                                <?php echo get_the_date(); ?>
                            </div>
                        </header>

                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </article>

                <?php endwhile;

            endif; ?>

        </div>

	</main>

<?php get_footer();
