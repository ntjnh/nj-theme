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
	<main class="">

		<div class="container">

            <?php while ( have_posts() ) : the_post(); ?>

                <h1 class=""><?php the_title(); ?></h1>
                
                <div class="">
                    <div class="">
                        <div>
                            <?php echo $summary; ?>
                        </div>
                    </div>

                    <div class="">
                        <h4>Website Type</h4>
                        <p><?php echo $website_type; ?></p>

                        <h4>Involvement</h4>
                        <p><?php echo $involvement; ?></p>

                        <h4>Platform</h4>
                        <p><?php echo $platform; ?></p>

                        <h4>Visit</h4>
                        <a href="<?php echo $visit['url']; ?>" target="_blank"><?php echo $visit['title']; ?></a>
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
