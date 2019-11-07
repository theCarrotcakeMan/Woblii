<?php
    
    // Redirect user if already logged in
    if( is_user_logged_in() ){
        return wp_redirect(site_url('my-feed'));
    }else{
        return wp_redirect(site_url('login'));
    }