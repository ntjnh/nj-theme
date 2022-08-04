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
                    'post_type' => array( 'projects' )
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
                                <?php 
                                $types = get_terms( 'project_type' );
                                foreach( $types as $type ) {
                                    echo '<li class="list-inline-item">' . $type->name . '</li>';
                                }
                                ?>
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
