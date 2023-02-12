<?php
/**
 * The About page template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nate
 */

get_header();

$introduction = get_field('introduction');
$content = get_field('content');
$skills = get_field('skills');
$photo = get_field('photo');
$photo_b = get_field('photo_b');

?>
	<main>

		<div class="container sm:max-w-box-sm md:max-w-box-md lg:max-w-box-lg xl:max-w-box-xl 2xl:max-w-screen-xl px-6 md:px-3">

            <div class="flex flex-wrap justify-between">
                <div class="w-full lg:w-[48%] order-2 lg:order-1">

                    <h2 class="font-normal mt-0 mb-3 md:mb-4"><?php echo $introduction; ?></h2>

                    <div class="mb-4">
                        <?php echo $content; ?>
                    </div>

                    <div class="skills">

                        <?php if( have_rows( 'skills' ) ) : ?>

                        <h3 class="mb-2 text-lg">Skills</h3>

                        <ul class="columns-2 m-0 p-0">
                            <?php while( have_rows( 'skills' ) ) : the_row(); ?>
                                <li class="list-none"><?php echo get_sub_field('skill'); ?></li>
                            <?php endwhile; ?>
                        </ul>

                        <?php endif; ?>

                    </div>

                </div>

                <div class="w-full lg:w-[48%] order-1 lg:order-2 mb-4 lg:mb-0">
                    <div class="lg:mb-4">
                        <picture>
                            <source media="(max-width: 575px)" srcset="<?php echo $photo['sizes']['photo-xlarge']; ?>" />
                            <source media="(max-width: 767px)" srcset="<?php echo $photo['sizes']['photo-small']; ?>" />
                            <source media="(max-width: 991px)" srcset="<?php echo $photo['sizes']['photo-medium']; ?>" />
                            <source media="(max-width: 1199px)" srcset="<?php echo $photo['sizes']['photo-large']; ?>" />
                            <source media="(max-width: 1499px)" srcset="<?php echo $photo['sizes']['photo-xlarge']; ?>" />
                            <source media="(min-width: 1500px)" srcset="<?php echo $photo['sizes']['photo-xxlarge']; ?>" />
                            <img class="max-w-full" src="<?php echo $photo['sizes']['photo-medium']; ?>" alt="<?php echo $photo['alt']; ?>" />
                        </picture>
                    </div>

                    <div class="hidden lg:block">
                        <picture>
                            <source media="(max-width: 575px)" srcset="<?php echo $photo_b['sizes']['photo-xlarge']; ?>" />
                            <source media="(max-width: 767px)" srcset="<?php echo $photo_b['sizes']['photo-small']; ?>" />
                            <source media="(max-width: 991px)" srcset="<?php echo $photo_b['sizes']['photo-medium']; ?>" />
                            <source media="(max-width: 1199px)" srcset="<?php echo $photo_b['sizes']['photo-large']; ?>" />
                            <source media="(max-width: 1499px)" srcset="<?php echo $photo_b['sizes']['photo-xlarge']; ?>" />
                            <source media="(min-width: 1500px)" srcset="<?php echo $photo_b['sizes']['photo-xxlarge']; ?>" />
                            <img class="max-w-full" src="<?php echo $photo_b['sizes']['photo-medium']; ?>" alt="<?php echo $photo_b['alt']; ?>" />
                        </picture>
                    </div>
                </div>
            </div>

        </div>

	</main>

<?php get_footer();
