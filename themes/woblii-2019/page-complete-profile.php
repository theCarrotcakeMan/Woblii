	<?php

    // Redirect user if already logged in
    if(!is_user_logged_in()){
        wp_redirect(site_url('/'));
    }
    $currentUser = wp_get_current_user();

    if(!$currentUser)
        wp_redirect(site_url('signup'));

	// If user hasn't finished setting up their profile, redirect to complete profile page
    $userObject = fetchUserObject($currentUser);
    if(!empty($currentUser) && !empty($userObject->bio))
        wp_redirect(site_url('my-feed'));

    get_header();

    $mustache = new Mustache_Engine([
        'loader' => new Mustache_Loader_FilesystemLoader(THEMEPATH.'/views'),
        'partials_loader' => new Mustache_Loader_FilesystemLoader(THEMEPATH.'/views/partials')
    ]);

    $lines_terms = get_terms( [
        'taxonomy'      => 'line-of-business',
        'hide_empty'    => false,
    ] );
        array_walk($lines_terms, function(&$thisObject){
            $thisObject = (object) $thisObject->to_array();
        });

    $tpl = $mustache->loadTemplate('full-profile');
    echo $tpl->render(['blueprint' => jsonToProp($userObject),'site_url' => site_url('/'),'lines' => jsonToProp($lines_terms),'user_role' => $userObject->role]);

    get_footer();
