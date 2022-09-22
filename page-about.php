<?php
/**
 * The About page template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nate
 */

get_header();

?>
	<main class="about">

		<div class="container">

            <div class="row gx-5">
                <div class="col-12 col-lg-6 order-2 order-lg-1">

                    <h2 class="about__intro mt-0 mb-3 mb-md-4">Hi! My name is Nate Manyande and I’m a web developer based in Leeds. I work for a digital agency called DS.Emotion and I mainly do front-end development, building WordPress websites for various clients in the property industry.</h2>

                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pellentesque diam volutpat commodo sed egestas egestas. Diam donec adipiscing tristique risus nec feugiat in fermentum posuere. Bibendum est ultricies integer quis auctor. Convallis tellus id interdum velit laoreet id donec. Vestibulum lectus mauris ultrices eros in. Eget nunc scelerisque viverra mauris in aliquam sem fringilla ut.</p>

                    <div class="skills">

                        <h3 class="skills__title">Skills</h3>

                        <ul class="skills__list">
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>SCSS</li>
                            <li>JavaScript</li>
                            <li>WordPress</li>
                            <li>Version control (Git)</li>
                            <li>Gulp</li>
                            <li>Npm</li>
                            <li>Accessibility</li>
                            <li>SEO</li>
                            <li>Adobe Photoshop</li>
                            <li>Adobe XD</li>
                        </ul>

                    </div>

                </div>

                <div class="col-12 col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                    <picture>
                        <source media="(max-width: 767px)" srcset="https://via.placeholder.com/990x1234" />
                        <source media="(max-width: 991px)" srcset="https://via.placeholder.com/990x495" />
                        <source media="(min-width: 992px)" srcset="https://via.placeholder.com/990x1234" />
                        <img class="mw-100" src="https://via.placeholder.com/990x1234" alt="Photo of Nate" />
                    </picture>
                </div>
            </div>

        </div>

	</main>

<?php get_footer();
