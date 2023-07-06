
<?php
/**
 * Theme header
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package natejonah
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font preconnects -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php wp_head(); ?>
</head>

<body <?php body_class( 'font-normal font-sans not-italic text-lg' ); ?>>
    <?php wp_body_open(); ?>

    <header class="header py-6 md:py-12">
        
        <div class="container sm:max-w-box-sm md:max-w-box-md lg:max-w-[82.5%] 2xl:max-w-screen-xl px-6 md:px-3 mx-auto">

            <div class="w-full flex flex-wrap items-center">
                <div class="w-full sm:w-4/12 md:w-3/12 mb-4 sm:mb-0">
                    <a class="no-underline" href="<?php echo get_bloginfo('url'); ?>">
                        <img class="mx-auto sm:mx-0 py-4 w-[150px]" src="<?php echo get_template_directory_uri(); ?>/build/images/nate.svg" alt="<?php echo get_bloginfo('title'); ?>">
                    </a>
                </div>

                <div class="w-full sm:w-8/12 md:w-9/12 flex flex-nowrap items-center justify-center sm:justify-end">
                    <?php 
                        wp_nav_menu(
                            array(
                                'theme_location' => 'main-menu',
                                'menu_id' => 'main-nav',
                                'container' => 'nav',
                                'container_class' => 'header-nav'
                            )
                        );
                    ?>
                </div>
            </div>

        </div>

    </header>
