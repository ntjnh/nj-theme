
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

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="header">
        
        <div class="container">

            <div class="title">
                <a href="<?php echo get_bloginfo('url'); ?>">Nate</a>
            </div>

            <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'main-menu',
                        'menu_id' => 'main-nav'
                    )
                );
            ?>

        </div>

    </header>
