<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

        <!-- BANNER -->
        <section class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-12 content">
                        <h1><?php the_field( 'title' ); ?></h1>
                        <p><?php the_field( 'tagline' ); ?></p>
                        <a href="#" class="button">Get the App</a>
                    </div>
                    <div class="col-12 arrowDown text-center">
                        <a href="#about"><img src="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" alt=""></a>
                    </div>
                </div>    
            </div>
            <div class="imgParent">
                <img src="<?php the_field( 'top-image' ); ?>" alt="App Profile">
            </div>
        </section>

        <!-- ABOUT APP-->
        <section class="aboutApp" id="about">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-12">
                        <h4><?php the_field( 'aboutApp-title' ); ?></h4>
                        <h2 class="main-head"><?php the_field( 'aboutApp-desc' ); ?></h2>
                        <img src="<?php the_field( 'aboutApp-image' ); ?>" alt="Richard App" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <!-- ARTICLE 1-->
        <section class="article1" id="howToUse">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12 content">
                        <h4><?php the_field( 'article1-title' ); ?></h4>
                        <h2 class="main-head"><?php the_field( 'article1-main-title' ); ?></h2>
                        <p class="main-desc"><?php the_field( 'article1-desc' ); ?></p>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                        <img src="<?php the_field( 'article1-image' ); ?>" alt="Aenean Consectetur">
                    </div>
                </div>
            </div>
        </section>

        <!-- ARTICLE 2-->
        <section class="article2">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 order-md-1 order-sm-2 text-md-left text-sm-center imgWrapper">
                        <img src="<?php the_field( 'article2-image' ); ?>" alt="Consect Ultricies" class="img-fluid">
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12 content order-md-2 order-sm-1">
                        <h4><?php the_field( 'article2-title' ); ?></h4>
                        <h2 class="main-head"><?php the_field( 'article2-main-title' ); ?></h2>
                        <p class="main-desc"><?php the_field( 'article2-desc' ); ?></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ARTICLE 3-->
        <section class="article3">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12 content">
                        <h4><?php the_field( 'article3-title' ); ?></h4>
                        <h2 class="main-head"><?php the_field( 'article3-main-title' ); ?></h2>
                        <p class="main-desc"><?php the_field( 'article3-desc' ); ?></p>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 text-center">
                        <img src="<?php the_field( 'article3-image' ); ?>" alt="Aenean Consectetur Porta" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <!-- FEATURES -->
        <section class="features" id="features">
            <div class="container">
                <div class="row text-center">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 content">

                        <img src="<?php bloginfo('template_url'); ?>/assets/img/Activity-Notifications.svg" alt="Activity Notifications">
                        <a href="#" class="link">Activity Notifications</a>
                        <p class="main-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 content">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/Custom-Timing.svg" alt="Custom Timing">
                        <a href="#" class="link">Custom Timing</a>
                        <p class="main-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 content">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/Mobile-Optimized.svg" alt="Mobile Optimized">
                        <a href="#" class="link">Mobile Optimized</a>
                        <p class="main-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- STATISTICS -->
        <section class="statistics">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 content">
                        <p>+12k</p>
                        <a href="#" class="link">Nibh Elit Tristique</a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 content">
                        <p>84</p>
                        <a href="#" class="link">Aenean Condimentum</a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 content">
                        <p>3,07</p>
                        <a href="#" class="link">Quam Inceptos</a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 content">
                        <p>24h</p>
                        <a href="#" class="link">Ullamcorper</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ARTICLE 4-->
        <section class="article4">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12 content">
                        <h4><?php the_field( 'article4-title' ); ?></h4>
                        <h2 class="main-head"><?php the_field( 'article4-main-title' ); ?></h2>
                        <p class="main-desc"><?php the_field( 'article4-desc' ); ?></p>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 text-center">
                        <img src="<?php the_field( 'article4-image' ); ?>" alt="Aenean Consectetur Porta" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <!-- ARTICLE 5-->
        <section class="article5">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 text-center order-md-1 order-sm-2 imgWrapper">
                        <img src="<?php the_field( 'article5-image' ); ?>" alt="Aenean Consectetur Porta" class="img-fluid">
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12 content order-md-2 order-sm-1">
                        <h4><?php the_field( 'article5-title' ); ?></h4>
                        <h2 class="main-head"><?php the_field( 'article5-main-title' ); ?></h2>
                        <p class="main-desc"><?php the_field( 'article5-desc' ); ?></p>
                    </div>
                </div>
            </div>
        </section>



        <!-- BLOG -->
        <section class="blog">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-10 col-md-12 col-sm-12 text-center">
                        <div class="owl-carousel owl-theme" id="blog">
<?php
global $post;

$myposts = get_posts([ 
	'numberposts' => -1,
    'category' => 3
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
?>
    <div class="slide">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/Richard-blog.svg" alt="Richard blog" class="img-fluid">
        <p><?php the_content(); ?></p>
        <p class="main-desc">Joshua Home</p>  
        <span><?php the_title(); ?></span>
    </div>
<?php } } wp_reset_postdata(); ?>
                    
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SOFTWARE -->
        <section class="software">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                        <div class="owl-carousel" id="software">
                            <div class="slide">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/nebflow.png" alt="Nebflow" >
                            </div>
                            <div class="slide">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/uber-eats.png" alt="Uber Eats" >
                            </div>
                            <div class="slide">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/Product-Hunt.png" alt="Product Hunt">
                            </div>
                            <div class="slide">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/Microsoft.png" alt="Microsoft">
                            </div>
                            <div class="slide">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/Bitcoin.png" alt="Bitcoin">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="phones">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/phones.png" alt="Richard App" class="img-fluid">
            </div>
        </section>

        <!-- REGISTRATION  -->
        <section class="registration" id="registration">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12">
                        <h2 class="main-head">Ready to get started?</h2>
                        <a href="#" class="button">Download Now</a>
                        <a href="#" class="button">Get in Touch</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- UPDATES  -->
        <section class="updates">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12">
                        <h2 class="main-head">Get updates from Richard</h2>
                        <p class="main-desc">New course alerts, discounts and free lessons</p>
                        <form action="contact.php">
                            <?php echo do_shortcode('[contact-form-7 id="28" title="Контактная форма"]'); ?>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <?php get_footer(); ?>



