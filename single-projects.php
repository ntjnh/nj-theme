<?php
/**
 * Project custom post type template file
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

            <h1 class="project-title"><?php the_title(); ?></h1>
            
            <div class="row">
                <div class="col-12 col-md-9">
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus vitae suscipit at commodi officiis, nesciunt eligendi tempore delectus quasi repudiandae recusandae, culpa, impedit possimus mollitia dolores nobis consectetur. Inventore, quae.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus vitae suscipit at commodi officiis, nesciunt eligendi tempore delectus quasi repudiandae recusandae, culpa, impedit possimus mollitia dolores nobis consectetur. Inventore, quae.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus vitae suscipit at commodi officiis, nesciunt eligendi tempore delectus quasi repudiandae recusandae, culpa, impedit possimus mollitia dolores nobis consectetur. Inventore, quae.</p>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <h4>Website Type</h4>
                    <p>Shopping Centre</p>

                    <h4>Involvement</h4>
                    <ul>
                        <li>Web Design</li>
                        <li>Web Development</li>
                    </ul>

                    <h4>Visit</h4>
                    <a href="https://theglassworksbarnsley.com" target="_blank">theglassworksbarnsley.com</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <img src="https://via.placeholder.com/960x960" alt="Screenshot">
                </div>
            </div>

        </div>

	</main>

<?php get_footer();
