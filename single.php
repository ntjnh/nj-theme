<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nate
 */

get_header();

?>
	<main class="py-5">

		<div class="container">

            <?php if ( have_posts() ) :

                while ( have_posts() ) :
                    the_post();
                ?>

                    <article class="pb-3 mx-auto" style="max-width:840px; width:100%;">

                        <header class="entry-header">
                            <h1 class="entry-title mb-3"><?php the_title(); ?></h1>

                            <div class="entry-meta mb-3">
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
