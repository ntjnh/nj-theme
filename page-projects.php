<?php
/**
 * Projects page template
 *
 * @package natejonah
 */

get_header();

?>
	<main class="py-5">

		<div class="container">
            <header class="page-header">
                <h1><?php the_title(); ?></h1>
            </header>

            <?php
            $args = array(
                'post_type' => array( 'projects' )
            );

            $the_query = new WP_Query( $args );

            while ( $the_query->have_posts() ) :
                $the_query->the_post();

            ?>

                <article>

                    <!-- Post thumbnail -->

                    <h2><?php the_title(); ?></h2>

                    <!-- Short description -->

                </article>

            <?php		
            endwhile;

            wp_reset_postdata();
            ?>
        </div>

	</main>

<?php get_footer();
