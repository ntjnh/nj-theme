<?php
/**
 * The homepage template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nate
 */

get_header();

?>
	<main>

		<div class="container sm:max-w-box-sm md:max-w-box-md lg:max-w-[82.5%] 2xl:max-w-screen-xl px-6 md:px-3">

            <p class="text-base"><em>The following projects were built on behalf of my employer. I am not a freelancer.</em></p>

            <div class="flex flex-wrap justify-between">

                <?php
                    $args = array(
                        'post_type' => array( 'projects' ),
                        'posts_per_page' => -1
                    );

                    $the_query = new WP_Query( $args );

                    while ( $the_query->have_posts() ) :
                        $the_query->the_post();

                ?>

                <article class="w-full md:w-[48%]">

                    <a class="block mb-8 xl:mb-10 no-underline" href="<?php the_permalink(); ?>">
                        <img class="max-w-full mb-3 xl:mb-4" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

                        <h2 class="transition-all duration-300 font-normal m-0 hover:text-blue hover:underline"><?php the_title(); ?></h2>
                    </a>

                </article>

                <?php		
                    endwhile;

                    wp_reset_postdata();
                ?>

            </div>

        </div>

	</main>

<?php get_footer();
