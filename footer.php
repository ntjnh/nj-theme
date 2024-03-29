<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package natejonah
 */

?>

<footer class="footer pb-6 pt-12">

    <div class="container sm:max-w-box-sm md:max-w-box-md lg:max-w-[82.5%] 2xl:max-w-screen-xl px-6 md:px-3 mx-auto">

        <div class="flex flex-wrap">
            <div class="w-full sm:w-6/12">
                <ul class="leading-none m-0 p-0">
                    <li class="leading-none inline-block text-2xl list-none mr-2">
                        <a class="hover:text-blue" href="https://github.com/ntjnh" target="_blank">
                            <i class="fa-brands fa-github"></i>
                        </a>
                    </li>
                    <li class="leading-none inline-block text-2xl list-none">
                        <a class="hover:text-blue" href="https://www.linkedin.com/in/nate-manyande/" target="_blank">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="flex flex-nowrap items-center justify-end w-full sm:w-6/12">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu',
                        'menu_id' => 'footer-nav',
                        'container' => 'div',
                        'container_class' => 'footer-nav'
                    )
                );
                ?>

                <p class="border border-r-0 border-y-0 border-blue-980 border-solid ml-3 my-0 pl-3 text-right text-sm">&copy; <?php echo get_bloginfo('name') . ' ' . date('Y'); ?></p>
            </div>
        </div>

    </div>

</footer>

<?php wp_footer(); ?>
</body>

</html>