<?php

    // Redirect user if already logged in
    if(is_user_logged_in())
        return wp_redirect(site_url('/'));
    if(!empty($_POST) && !empty($_POST['signup_submit'])){
        register_woblii_user($_POST);
    }

    get_header(); ?>

    <section id="articleContainer" class="max-w-3xl mb-24 mx-auto relative pt-24 md:pt-32 pl-4 md:pl-0 pr-4 md:pr-0 w-full min-h-screen">

        <h1 class="block text-purple-dark text-2xl md:text-3xl text-center md:text-left mx-auto w-full">¡Regístrate como Emprendedor!</h1>

        <profile-entrepreneur
            mode="signup"
            shortcode="<?php do_shortcode("[bws_google_captcha]") ?>"
            >
        </profile-entrepreneur>

        <hr class="border border-gray-300 border-0 border-b w-full max-w-3xl mt-8" />

		<div class="clearfix"></div>
        <home-tabs
            site-url="<?php echo site_url(''); ?>"
            >
        </home-tabs>

    </section>

<?php get_footer(); ?>
