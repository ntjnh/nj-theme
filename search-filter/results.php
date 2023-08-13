<?php
/**
 * Search & Filter Pro
 *
 * Coding search results template
 * 
 */

// If this file is called directly, abort.
if( ! defined( 'ABSPATH' ) ) {
	exit;
}

if( $query->have_posts() ) : ?>

    <section class="flex flex-wrap justify-between w-full">

    <?php while( $query->have_posts() ) : $query->the_post(); ?>

        <article class="w-[30%]">
            <p><i class="fa-solid fa-cloud-showers-heavy"></i></p>
            <h2><?php the_title(); ?></h2>
            
            <p>Odio morbi quis commodo odio aenean sed adipiscing diam. Cursus turpis massa tincidunt.</p>
            
            <p>
                <a href="https://ntjnh-city-capture.netlify.app/" target="_blank">ntjnh-city-capture.netlify.app</a>
                <a href="https://github.com" target="_blank">github.com</a>
            </p>
            
        </article>	

    <?php endwhile; ?>

    </section>

<?php else :
	echo 'No Results Found';
endif;
