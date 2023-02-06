<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#404-not-found
 *
 * @package nate
 */

get_header();

?>
	<main class="font-serif text-lg pb-5">
        
        <div class="container">
            <header class="entry-header mb-6">
                <h2 class="font-bold text-4xl"><?php esc_html_e( 'Page Not Found', 'goal' ); ?></h2>
            </header>

            <div>
				<p class="mb-4">Sorry but the page you're looking for can't be found. It may have been removed, renamed, or is temporarily unavailable.</p>

				<p class="mb-4">You could try:</p>

				<ul class="list-disc pl-8">
					<li>Double-checking your spelling</li>
					<li>Going back to the <a class="underline" href="<?php echo get_bloginfo('url'); ?>">homepage</a></li>
					<li><a class="underline" href="javascript:history.back()">Going back</a> to the page you came from</li>
				</ul>
			</div>

        </div>

	</main>

<?php get_footer();
