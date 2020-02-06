<?php
    get_header();

    $mustache = new Mustache_Engine([
        'loader' => new Mustache_Loader_FilesystemLoader(THEMEPATH.'/views'),
        'partials_loader' => new Mustache_Loader_FilesystemLoader(THEMEPATH.'/views/partials')
    ]);
    
    $myPosts = [];
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            $myPosts[] = &$post;
        endwhile;
    endif;

    $tpl = $mustache->loadTemplate('search-results');
    echo $tpl->render(['site_url' => site_url(), 'posts' => $myPosts, 'userObject' => jsonToProp($userObject)]);
    
    get_footer();
 