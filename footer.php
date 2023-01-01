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

    <footer class="footer pb-4 pt-5">

        <div class="container">

            <div class="row">
                <div class="col-6">
                    <ul class="social">
                        <li class="social__item">
                            <a class="social__link" href="https://github.com/ntjnh" target="_blank">
                                <i class="fab fa-github" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="social__item">
                            <a class="social__link" href="https://www.linkedin.com/in/nate-manyande/" target="_blank">
                                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-6">
                    <p class="footer__copyright m-0 text-end">&copy; <?php echo get_bloginfo('name') . ' ' . date('Y'); ?></p>
                </div>
            </div>

        </div>

    </footer>

    <?php wp_footer(); ?>
</body>
</html>