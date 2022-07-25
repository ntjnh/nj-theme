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

?>
    <h6 style="background-color: #ffe66b; margin: 0; padding: 4px;">front-page.php</h6>
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
                        <img class="img-fluid" src="https://source.unsplash.com/random/500x625/?man" alt="Nate">
                    </div>
                </div>
            </div>
        </section>

        <section class="more-info">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <img class="img-fluid" src="https://source.unsplash.com/random/750x500/?ocean" alt="Ocean">
                    </div>
    
                    <div class="col-12 col-md-4">
                        <h2>Lorem ipsum dolor sit amet consectetur</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore qui, id facilis dolore alias libero illum! Praesentium hic quaerat, nostrum beatae, voluptatem animi omnis ratione libero suscipit veniam, culpa ullam?</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects -->
        <section class="projects">
            <div class="container">
                <h2 class="text-center">Projects</h2>

                <div class="row">
                    <div class="col">
                        <div class="card">
                            <img src="https://source.unsplash.com/random/500x500/?puppy" class="card-img" alt="Project Name">
                            <div class="card-img-overlay">
                                <h3 class="card-title">
                                    <a href="#">
                                        Project Name
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://source.unsplash.com/random/400x400/?puppy" class="card-img" alt="Project Name">
                            <div class="card-img-overlay">
                                <h3 class="card-title">
                                    <a href="#">
                                        Project Name
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://source.unsplash.com/random/600x600/?puppy" class="card-img" alt="Project Name">
                            <div class="card-img-overlay">
                                <h3 class="card-title">
                                    <a href="#">
                                        Project Name
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog">
            <div class="container">
                <h2 class="text-center">Blog</h2>

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
                    <a class="btn btn-black" href="#" role="button">View All</a>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
