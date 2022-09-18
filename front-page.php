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
	<main class="">

		<div class="container">

            <?php
                $args = array(
                    'post_type' => array( 'projects' ),
                    'posts_per_page' => -1
                );

                $the_query = new WP_Query( $args );

                while ( $the_query->have_posts() ) :
                    $the_query->the_post();

            ?>

            <article class="project">

                <a href="<?php the_permalink(); ?>">
                    <img class="project__img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

                    <h2 class="project__title"><?php the_title(); ?></h2>
                </a>

            </article>

            <?php		
                endwhile;

                wp_reset_postdata();
            ?>

        </div>

	</main>

<?php get_footer();
