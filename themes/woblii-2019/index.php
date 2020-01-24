<?php
    
    // Redirect user if already logged in
    if(!is_user_logged_in()){
        wp_redirect(site_url('/'));
    }
    $currentUser = wp_get_current_user();
    
    if(!$currentUser)
        wp_redirect(site_url('signup'));
    
    $userObject = fetchUserObject($currentUser);
   
    $errorMessage = NULL;
    
    // Try to log in
    if(! empty($_POST) AND $_POST['log']){
        try{
            $userIntent = wp_signon(compact($_POST), TRUE);
            if ( !is_wp_error( $userIntent ) )
                wp_redirect(site_url());
            $errorMessage =  $userIntent->get_error_message();
        }catch(Exception $exception){
            echo $exception;
        }
    }
    
    get_header();

    $mustache = new Mustache_Engine([
        'loader' => new Mustache_Loader_FilesystemLoader(THEMEPATH.'/views'),
        'partials_loader' => new Mustache_Loader_FilesystemLoader(THEMEPATH.'/views/partials')
    ]);
    
    if($errorMessage):
        $tpl = $mustache->loadPartial('error-message');
        echo $tpl->render(['errorMessage' => $errorMessage]);
    endif;
    
    $myPosts = [];
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            $myPosts[] = &$post;
        endwhile;
    endif;

    $tpl = $mustache->loadTemplate('main-feed');
    echo $tpl->render(['site_url' => site_url(), 'posts' => $myPosts, 'userObject' => jsonToProp($userObject)]);
    
    get_footer();
 