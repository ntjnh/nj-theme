<?php
/**
 * The 404 template
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

?>
	<main class="py-5">

		<div class="container">

            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', '_s' ); ?></h1>
            </header>

            <div class="entry-content pb-5">
                <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                <p>Please try the following:</p>
                <ul>
                    <li>Check your spelling</li>
                    <li>Return to the <a href="<?php echo get_bloginfo('url'); ?>">home page</a>						</li>
                    <li>Click the <a href="javascript:history.back()">Back</a> button</li>
                </ul>
            </div>

        </div>

	</main>

<?php get_footer();
