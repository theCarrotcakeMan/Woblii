<?php

// Redirect user if already logged in
if(is_user_logged_in())
    return wp_redirect(site_url('/'));

get_header(); ?>

<section id="articleContainer" class="mb-24 mx-auto relative pt-24 md:pt-32S pl-6 md:pl-0 pr-6 md:pr-0 w-full">

    <h1 class="block text-purple-dark text-2xl md:text-3xl text-center md:text-left max-w-3xl mx-auto w-full">¡Regístrate como Inversionista!</h1>

    <profile-investor
        mode="signup"
        >
    </profile-investor>

</section>

<?php get_footer(); ?>
