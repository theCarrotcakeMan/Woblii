<?php

    // CUSTOM USER CONFIGURATIONS /////////////////////////////////////////////////////////

    $administrator = get_role('administrator');
    add_role( 'developer', 'Developer', $administrator->capabilities );
    
    $subscriber = get_role('subscriber');
    add_role( 'entrepreneur', 'Entrepreneur', $subscriber->capabilities );
    add_role( 'investor', 'Investor', $subscriber->capabilities );
    
    remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );
    
    add_filter('user_contactmethods', function ( $contactmethods ) {
        unset($contactmethods['url']);
        unset($contactmethods['aim']);
        unset($contactmethods['yim']);
        unset($contactmethods['jabber']);
        $contactmethods['twitter']  = 'Twitter';
        $contactmethods['facebook'] = 'Facebook';
        return $contactmethods;
    });
    
    add_action('admin_menu', function() use (&$current_user){
        if ( in_array('developer', $current_user->roles) ){
            add_options_page(__('Todos los ajustes'), __('Todos los ajustes'), 'developer', 'options.php');
        }
    });
    
    // CUSTOM BASE URL FOR USERS //////////////////////////////////////////////////////////

    global $wp_rewrite;
    $wp_rewrite->author_base = 'entrepreneur';
    $wp_rewrite->flush_rules();