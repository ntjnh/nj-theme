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

            <div class="row">

                <?php
                $args = array(
                    'post_type' => array( 'projects' )
                );

                $the_query = new WP_Query( $args );

                while ( $the_query->have_posts() ) :
                    $the_query->the_post();

                ?>

                    <article class="col-6 mb-4">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="mb-3">

                        <h2><?php the_title(); ?></h2>

                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque nihil, tenetur unde eligendi aliquam perferendis. Aut nobis, nihil tenetur autem, sequi voluptate voluptatum incidunt pariatur, tempore ratione quia nulla facere.</p>
                    </article>

                <?php		
                endwhile;

                wp_reset_postdata();
                ?>

            </div>
        </div>

	</main>

<?php get_footer();
