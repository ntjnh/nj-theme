<?php
/**
 * The template for displaying single coding projects
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nate
 */

get_header();

?>
	<main class="py-12">

		<div class="container sm:max-w-box-sm md:max-w-box-md lg:max-w-[82.5%] 2xl:max-w-screen-xl px-6 md:px-3">

            <?php if ( have_posts() ) :

                while ( have_posts() ) :
                    the_post();
                ?>

                    <article class="max-w-3xl mx-auto w-full">

                        <header>
                            <h1 class="font-bold mb-2 mt-0 text-3xl md:text-4xl xl:text-4xxl"><?php the_title(); ?></h1>

                            <div class="text-base mb-6">
                                Coding for Practice
                            </div>
                            
                            <img style="margin-bottom:1.5rem; max-width:100%;" src="https://images.pexels.com/photos/382177/pexels-photo-382177.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="placeholder">
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
