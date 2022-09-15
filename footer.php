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

    <footer class="footer">
        <div class="container">

            <ul class="social-icons">
                <li>
                    <a href="https://github.com/ntjnh" target="_blank">
                        <i class="fab fa-github" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/nate-manyande/" target="_blank">
                        <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>

            <p class="copyright">&copy; <?php echo get_bloginfo('name') . ' ' . date('Y'); ?></p>

        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>