<?php
    get_header();
    
    // Redirect user if already logged in
    if(!is_user_logged_in()){
        wp_redirect(site_url('/'));
    }
    $currentUser = wp_get_current_user();
    $currentUser->data->role = $currentUser->roles[0];
//    if ( in_array( 'entrepreneur', (array) $currentUser->roles ) ) {
//        $currentUser->data->role = 'entrepreneur';
//        //The user has the "author" role
//    }
//    if ( in_array( 'administrator', (array) $currentUser->roles ) ) {
//        $currentUser->data->role = 'administrator';
//        //The user has the "author" role
//    }
//    if ( in_array( 'investor', (array) $currentUser->data->roles ) ) {
//        //The user has the "author" role
//        $currentUser->data->role = 'investor';
//    }

    $lines_terms = get_terms( [
        'taxonomy'      => 'line-of-business',
        'hide_empty'    => false,
    ] );
    array_walk($lines_terms, function(&$thisObject){
        $thisObject = (object) $thisObject->to_array();
    });
    $decoded = json_encode($lines_terms);
    ?>

    <section id="articleContainer" class="max-w-3xl mb-24 mx-auto relative pt-24 md:pt-32 pl-6 md:pl-0 pr-6 md:pr-0 w-full">
    
        <h1 class="block text-purple-dark text-2xl md:text-3xl text-center md:text-left mx-auto w-full">Información de perfil</h1>
    
        <profile-entrepreneur
            mode="profile"
            role='<?php echo $currentUser->data->role; ?>'
            :lines='<?php echo $decoded; ?>'
            >
        </profile-entrepreneur>
    
    </section>

<?php get_footer(); ?>
