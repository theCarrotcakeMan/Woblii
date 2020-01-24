<?php
    get_header();
    
    // Redirect user if already logged in
    if(!is_user_logged_in()){
        wp_redirect(site_url('/'));
    }
    $currentUser = wp_get_current_user();
    $currentUser->role = (array) $currentUser->roles[0];  ?>

    <section id="articleContainer" class="max-w-3xl mb-24 mx-auto relative pt-24 md:pt-32 pl-6 md:pl-0 pr-6 md:pr-0 w-full">
    
        <h1 class="block text-purple-dark text-2xl md:text-3xl text-center md:text-left mx-auto w-full">Crea un proyecto</h1>
        
    
    </section>

<?php get_footer(); ?>
