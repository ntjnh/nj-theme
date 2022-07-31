<?php
/**
 * The main template file
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

// ACF fields
$about = get_field('about');
$about_content = $about['content'];
$about_image = $about['image'];
// buttons

$info = get_field('more_info');
$info_image = $info['image'];
$info_content = $info['content'];

$projects = get_field('projects');
$projects_heading = $projects['heading'];
$projects_featured = $projects['featured'];

$blog_posts = get_field('blog_posts');
$blog_heading = $blog_posts['heading'];
$blog_featured = $blog_posts['featured'];
$blog_more_button = $blog_posts['more_button'];

?>
    <main>
        <section class="about">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 about-content">
                        <h2>Hello, I'm <?php echo get_bloginfo('title'); ?>.</h2>
                        
                        <p class="text-uppercase fw-normal"><?php echo get_bloginfo('description'); ?></p>
                        
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
                        <p class="m-0">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>

                        <a href="#" class="btn btn-yellow d-inline-block mt-3">About Me</a>
                    </div>

                    <div class="col-12 col-md-4 pe-md-0">
                        <img class="img-fluid" src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>">
                    </div>
                </div>
            </div>
        </section>

        <section class="more-info">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <img class="img-fluid" src="<?php echo $info_image['url']; ?>" alt="<?php echo $info_image['alt']; ?>">
                    </div>
    
                    <div class="col-12 col-md-4">
                        <h2>Lorem ipsum dolor sit amet consectetur</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore qui, id facilis dolore alias libero illum! Praesentium hic quaerat, nostrum beatae, voluptatem animi omnis ratione libero suscipit veniam, culpa ullam?</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects -->
        <?php if( $projects_featured ): ?>
        <section class="projects">
            <div class="container">
                <h2 class="text-center"><?php echo $projects_heading; ?></h2>

                <div class="row">
                    <?php foreach( $projects_featured as $post ): 
                        // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post); 
                    
                    $title = get_the_title();
                    ?>

                        <div class="col">
                            <div class="card">
                                <?php the_post_thumbnail( 'thumbnail', ['class' => 'card-img', 'alt' => $title] ); ?>

                                <div class="card-img-overlay">
                                    <h3 class="card-title">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php echo $title; ?>
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; 
                    // Reset the global post object so that the rest of the page works correctly.
                    wp_reset_postdata(); ?>
                
                </div>

            </div>
        </section>
        <?php endif; ?>

        <section class="blog">
            <div class="container">
                <h2 class="text-center"><?php echo $blog_heading; ?></h2>

                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora asperiores repellat consequatur corrupti accusantium, omnis voluptas, exercitationem earum blanditiis ab culpa ipsam sint? Voluptatem omnis molestiae placeat quia dolor tenetur?</p>
                            </div>

                            <div class="card-footer">
                                <a href="#" class="btn btn-black">Read more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="card active h-100">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo assumenda sapiente recusandae adipisci ipsa ipsam est, maxime magni quis dignissimos autem quae, earum, unde doloribus neque saepe? Aliquam, at. Eligendi?</p>
                            </div>

                            <div class="card-footer">
                                <a href="#" class="btn btn-black">Read more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt non deserunt voluptatum fugit, facere nisi sequi necessitatibus laborum quis! Vero id saepe tempora sit quibusdam non illum a similique qui?</p>
                            </div>

                            <div class="card-footer">
                                <a href="#" class="btn btn-black">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>            

                <div class="blog-button text-center">
                    <a class="btn btn-black" href="<?php echo $blog_more_button['url']; ?>" role="button"><?php echo $blog_more_button['title']; ?></a>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
