<?php
/**
 * Projects page template
 *
 * @package natejonah
 */

get_header();

?>

	<main class="page-projects py-5">

		<div class="container">
            <header class="page-header">
                <h1><?php the_title(); ?></h1>
            </header>

            <div class="grid row gy-4">

                <div class="grid-sizer col-12 col-md-6"></div>

                <?php
                $args = array(
                    'post_type' => array( 'projects' ),
                    'posts_per_page' => -1
                );

                $the_query = new WP_Query( $args );

                while ( $the_query->have_posts() ) :
                    $the_query->the_post();

                ?>

                    <article class="project grid-item col-12 col-md-6">

                        <div class="grid-item-content">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="mb-3">
                            </a>

                            <h2>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <ul class="list-inline">
                                <?php $terms = get_the_terms( $post->ID , 'project_type' );

                                if ( $terms != null ) {
                                    foreach( $terms as $term ) {
                                        echo '<li class="list-inline-item"><span class="badge text-bg-secondary">' . $term->name . '</span></li>';
                                        unset($term); // Get rid of the other data stored in the object, since it's not needed
                                    }
                                } ?>
                            </ul>

                            <?php $description = get_field('description'); ?>

                            <p class="m-0"><?php echo $description; ?></p>
                        </div>

                    </article>

                <?php		
                endwhile;

                wp_reset_postdata();
                ?>

            </div>
        </div>

	</main>

<?php get_footer();
