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
	<main class="py-12">

		<div class="container">

            <?php if ( have_posts() ) :

                while ( have_posts() ) :
                    the_post();
                ?>

                    <article class="max-w-3xl mx-auto w-full">

                        <header>
                            <h1 class="font-bold mb-2 mt-0 text-3xl md:text-4xl xl:text-4xxl"><?php the_title(); ?></h1>

                            <div class="text-base mb-6">
                                <?php echo get_the_date(); ?>
                            </div>
                        </header>

                        <div class="text-lg">
                            <?php the_content(); ?>
                        </div>
                    </article>

                <?php endwhile;

            endif; ?>

        </div>

	</main>

<?php get_footer();
