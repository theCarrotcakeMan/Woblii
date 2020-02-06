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
            $myPost = &$post;
            $myPost->feed_post        = $myPost->post_type === "post" ? TRUE : FALSE;
            $myPost->author_name      = get_the_author_meta('user_firstname', $myPost->post_author) . " " . get_the_author_meta('user_lastname', $myPost->post_author);
            $myPost->post_excerpt     = get_the_excerpt();
            $myPost->thumbnail_tag    = get_the_post_thumbnail($myPost->ID, 'medium',[ "class" => "block w-full h-auto"]);
            $myPosts[] = $myPost;
        endwhile;
    endif;

    $tpl = $mustache->loadTemplate('main-feed');
    echo $tpl->render(['site_url' => site_url(), 'posts' => $myPosts, 'userObject' => jsonToProp($userObject)]);
    
    get_footer();
 