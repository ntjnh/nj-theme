
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

<body <?php body_class( 'font-normal font-serif not-italic text-lg' ); ?>>
    <?php wp_body_open(); ?>

    <header class="header py-6 md:py-12">
        
        <div class="container sm:max-w-box-sm md:max-w-box-md lg:max-w-box-lg xl:max-w-box-xl 2xl:max-w-screen-xl px-6 md:px-3 mx-auto">

            <div class="w-full flex flex-wrap">
                <div class="w-full sm:w-4/12 md:w-3/12 mb-4 sm:mb-0">
                    <p class="block font-normal leading-none m-0 text-6xxl text-black text-center sm:text-left tracking-[-4px] uppercase">
                        <a class="no-underline" href="<?php echo get_bloginfo('url'); ?>"><?php echo get_bloginfo('title'); ?></a>
                    </p>
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
