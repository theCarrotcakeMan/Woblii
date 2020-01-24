<?php
    
    // Redirect user if already logged in
    if(is_user_logged_in())
        return wp_redirect(site_url('/'));
    if(!empty($_POST) && !empty($_POST['signup_submit'])){
        register_woblii_user($_POST);
    }

    get_header(); ?>

<section id="articleContainer" class="max-w-3xl mb-24 mx-auto relative pt-24 md:pt-32 pl-6 md:pl-0 pr-6 md:pr-0 w-full min-h-screen">

    <h1 class="block text-purple-dark text-2xl md:text-3xl text-center md:text-left mx-auto w-full">¡Regístrate como Entrepreneur!</h1>

    <profile-entrepreneur
        mode="signup"
        shortcode="<?php do_shortcode("[bws_google_captcha]") ?>"
        >
    </profile-entrepreneur>

</section>

<?php get_footer(); ?>
