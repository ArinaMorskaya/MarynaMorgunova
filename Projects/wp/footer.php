 
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <a href="#header"><img src="<?php bloginfo('template_url'); ?>/assets/img/footer-logo.png" alt="Richard logo"></a>
                    </div>
                    <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12 contacts">
                        <a type="email" href="mailto:<?php the_field( 'email' ); ?> ">Email</a>
                        <a href="<?php the_field( 'instagram-link' ); ?>">Instagram</a>
                        <a href="<?php the_field( 'facebook-link' ); ?>">Facebook</a>
                        <a href="<?php the_field( 'twitter-link' ); ?>">Twitter</a>
                        <a href="#">Image License Info</a>
                        <a href="#">Powered by Webflow</a>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    
    <?php wp_footer(); ?>

</body>
</html>

