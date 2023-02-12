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
	<main>

		<div class="container sm:max-w-box-sm md:max-w-box-md lg:max-w-[82.5%] 2xl:max-w-screen-xl px-6 md:px-3">

            <?php while ( have_posts() ) : the_post(); ?>

                <h1 class="text-3xl sm:text-3xxl lg:text-4xl xl:text-4xxl text-center mb-6 md:text-left"><?php the_title(); ?></h1>
                
                <div class="flex flex-wrap justify-between">
                    <div class="w-full lg:w-[73%] order-2 md:order-1">
                        <div class="project__summary">
                            <?php echo $summary; ?>
                        </div>
                    </div>

                    <div class="w-full lg:w-[23%] order-1 md:order-2 mb-6 md:mb-0">
                        <div class="md:inline-block md:float-right h-full">
                            <div class="text-center md:text-left">

                                <h4 class="font-normal leading-tight mb-4 text-lg">
                                    <span class="font-bold">Website Type:</span> <?php echo $website_type; ?>
                                </h4>

                                <h4 class="font-normal leading-tight mb-4 text-lg">
                                    <span class="font-bold">Involvement:</span> <?php echo $involvement; ?>
                                </h4>

                                <h4 class="font-normal leading-tight mb-4 text-lg">
                                    <span class="font-bold">Platform:</span> <?php echo $platform; ?>
                                </h4>
    
                                <a class="inline-block hover:text-blue underline hover:no-underline" href="<?php echo $visit['url']; ?>" target="_blank" rel="noreferrer">Visit the website</a>

                                <p class="text-base	mt-5 mb-0 mx-0"><em>I worked on this project while employed by DS.Emotion. I'm not a freelancer.</em></p>

                            </div>
                        </div>
                    </div>
                </div>

                <?php if( $gallery ): ?>
                <div class="mt-5">
                    <?php foreach( $gallery as $image ): ?>
                        <div class="mb-3">
                            <img class="max-w-full" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

            <?php endwhile; ?>

        </div><!-- /.container -->

	</main>

<?php get_footer();
