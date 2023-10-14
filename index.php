<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nate
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/wp-content/themes/nj-theme/style.css">

    <title>NATE</title>
</head>
<body>
    <header>
        <h1>Nate</h1>
    </header>

	<main class="py-12">

		<div class="container sm:max-w-box-sm md:max-w-box-md lg:max-w-[82.5%] 2xl:max-w-screen-xl px-6 md:px-3">

            <?php if ( have_posts() ) :

                while ( have_posts() ) :
                    the_post();
                ?>

                    <article class="max-w-3xl mx-auto w-full">

                        <header>
                            <h1 class="font-bold mb-2 mt-0 text-3xl md:text-4xl xl:text-4xxl"><?php the_title(); ?></h1>

                            <div class="text-base mb-6">
                                <?php echo get_the_date(); ?>
                            </div>
                        </header>

                        <div class="text-lg">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>

                <?php endwhile;

            endif; ?>

        </div>

	</main>

</body>

</html>
