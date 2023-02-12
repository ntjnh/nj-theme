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
	<main class="font-serif text-lg pb-12">
        
        <div class="container sm:max-w-box-sm md:max-w-box-md lg:max-w-box-lg xl:max-w-box-xl 2xl:max-w-screen-xl px-6 md:px-3">

			<article class="max-w-3xl mx-auto w-full">

				<h1 class="font-bold mb-8 mt-0 text-3xl md:text-4xl xl:text-4xxl"><?php esc_html_e( 'Page Not Found', 'nate' ); ?></h1>
	
				<div class="text-lg">
					<p>Sorry but the page you're looking for can't be found. It may have been removed, renamed, or is temporarily unavailable.</p>
	
					<p>You could try:</p>
	
					<ul class="list-disc pl-8">
						<li>Double-checking your spelling</li>
						<li>Going back to the <a class="underline" href="<?php echo get_bloginfo('url'); ?>">homepage</a></li>
						<li><a class="underline" href="javascript:history.back()">Going back</a> to the page you came from</li>
					</ul>
				</div>

			</article>

        </div>

	</main>

<?php get_footer();
