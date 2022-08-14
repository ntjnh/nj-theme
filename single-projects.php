<?php
/**
 * Project custom post type template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package natejonah
 */

get_header();

?>
	<main class="py-5">

		<div class="container">

            <?php while ( have_posts() ) : the_post(); ?>

            <h1 class="project-title"><?php the_title(); ?></h1>
            
            <div class="row">
                <div class="col-12 col-md-9">
                    <div>
                        <?php echo get_field('summary'); ?>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <h4>Website Type</h4>
                    <p><?php echo get_field('industry'); ?></p>

                    <h4>Involvement</h4>
                    <ul class="list-inline">
                        <?php $terms = get_the_terms( $post->ID , 'project_type' );

                        if ( $terms != null ) {
                            foreach( $terms as $term ) {
                                echo '<li class="list-inline-item"><span class="badge text-bg-secondary">' . $term->name . '</span></li>';
                                unset($term); // Get rid of the other data stored in the object, since it's not needed
                            }
                        } ?>
                    </ul>

                    <h4>Visit</h4>
                    <a href="<?php echo get_field('visit')['url']; ?>" target="_blank"><?php echo get_field('visit')['title']; ?></a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">

                    <?php $gallery = get_field('gallery');
                    if( $gallery ): ?>
                    <div class="project-gallery">
                        <?php foreach( $gallery as $image ): ?>
                            <div class="screenshot">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                </div>
            </div>

            <div class="row pt-3">
                <div class="col-6">
                    <?php previous_post_link('%link', '« Previous project'); ?>
                </div>

                <div class="col-6 text-end">
                    <?php next_post_link('%link', 'Next project »'); ?>
                </div>
            </div>

            <?php endwhile; ?>

        </div><!-- /.container -->

	</main>

<?php get_footer();
