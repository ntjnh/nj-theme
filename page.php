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
 * @package nate
 */

get_header();

?>
	<main class="pb-12">

		<div class="container sm:max-w-box-sm md:max-w-box-md lg:max-w-[82.5%] 2xl:max-w-screen-xl px-6 md:px-3">

            <?php if ( have_posts() ) :

                while ( have_posts() ) :
                    the_post();
                ?>

                    <article class="max-w-3xl mx-auto w-full">

                        <h1 class="font-bold mb-8 mt-0 text-3xl md:text-4xl xl:text-4xxl"><?php the_title(); ?></h1>

                        <div class="text-lg">
                            <?php the_content(); ?>
                        </div>
                    </article>

                <?php endwhile;

            endif; ?>

        </div>

	</main>

<?php get_footer();
