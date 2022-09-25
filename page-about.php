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
	<main class="about">

		<div class="container">

            <div class="row gx-5">
                <div class="col-12 col-lg-6 order-2 order-lg-1">

                    <h2 class="about__intro mt-0 mb-3 mb-md-4"><?php echo $introduction; ?></h2>

                    <div class="mb-4">
                        <?php echo $content; ?>
                    </div>

                    <div class="skills">

                        <?php if( have_rows( 'skills' ) ) : ?>

                        <h3 class="skills__title">Skills</h3>

                        <ul class="skills__list">
                            <?php while( have_rows( 'skills' ) ) : the_row(); ?>
                                <li><?php echo get_sub_field('skill'); ?></li>
                            <?php endwhile; ?>
                        </ul>

                        <?php endif; ?>

                    </div>

                </div>

                <div class="col-12 col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                    <div class="mb-lg-4">
                        <picture>
                            <source media="(max-width: 575px)" srcset="<?php echo $photo['sizes']['photo-xlarge']; ?>" />
                            <source media="(max-width: 767px)" srcset="<?php echo $photo['sizes']['photo-small']; ?>" />
                            <source media="(max-width: 991px)" srcset="<?php echo $photo['sizes']['photo-medium']; ?>" />
                            <source media="(max-width: 1199px)" srcset="<?php echo $photo['sizes']['photo-large']; ?>" />
                            <source media="(max-width: 1499px)" srcset="<?php echo $photo['sizes']['photo-xlarge']; ?>" />
                            <source media="(min-width: 1500px)" srcset="<?php echo $photo['sizes']['photo-xxlarge']; ?>" />
                            <img class="mw-100" src="<?php echo $photo['sizes']['photo-medium']; ?>" alt="<?php echo $photo['alt']; ?>" />
                        </picture>
                    </div>

                    <div class="d-none d-lg-block">
                        <picture>
                            <source media="(max-width: 575px)" srcset="<?php echo $photo_b['sizes']['photo-xlarge']; ?>" />
                            <source media="(max-width: 767px)" srcset="<?php echo $photo_b['sizes']['photo-small']; ?>" />
                            <source media="(max-width: 991px)" srcset="<?php echo $photo_b['sizes']['photo-medium']; ?>" />
                            <source media="(max-width: 1199px)" srcset="<?php echo $photo_b['sizes']['photo-large']; ?>" />
                            <source media="(max-width: 1499px)" srcset="<?php echo $photo_b['sizes']['photo-xlarge']; ?>" />
                            <source media="(min-width: 1500px)" srcset="<?php echo $photo_b['sizes']['photo-xxlarge']; ?>" />
                            <img class="mw-100" src="<?php echo $photo_b['sizes']['photo-medium']; ?>" alt="<?php echo $photo_b['alt']; ?>" />
                        </picture>
                    </div>
                </div>
            </div>

        </div>

	</main>

<?php get_footer();
