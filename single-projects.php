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

$summary = get_field('summary');
$website_type = get_field('website_type');
$involvement = get_field('involvement');
$platform = get_field('platform');
$visit = get_field('visit');
$gallery = get_field('gallery');

?>
	<main class="page-single-project">

		<div class="container project">

            <?php while ( have_posts() ) : the_post(); ?>

                <h1 class="project__title"><?php the_title(); ?></h1>
                
                <div class="row">
                    <div class="col-12 col-md-9">
                        <div class="project__summary">
                            <?php echo $summary; ?>
                        </div>
                    </div>

                    <div class="col-12 col-md-3">
                        <div class="d-inline-block float-end h-100">
                            <div class="d-flex flex-wrap flex-column justify-content-between h-100">

                                <div>
                                    <h4 class="project__info">
                                        <span class="text-bold">Website Type:</span> <?php echo $website_type; ?>
                                    </h4>
    
                                    <h4 class="project__info">
                                        <span class="text-bold">Involvement:</span> <?php echo $involvement; ?>
                                    </h4>
    
                                    <h4 class="project__info">
                                        <span class="text-bold">Platform:</span> <?php echo $platform; ?>
                                    </h4>
                                </div>
    
                                <a class="project__website" href="<?php echo $visit['url']; ?>" target="_blank">Visit the website</a>

                            </div>
                        </div>
                    </div>
                </div>


                <?php if( $gallery ): ?>
                <div class="">
                    <?php foreach( $gallery as $image ): ?>
                        <div class="">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

            <?php endwhile; ?>

        </div><!-- /.container -->

	</main>

<?php get_footer();
