<?php


// CUSTOM PAGES //////////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// Home
		if( ! get_page_by_path('home') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Mi feed',
				'post_name'   => 'home',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}
        // Sign-up
		if( ! get_page_by_path('signup') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Crea tu cuenta en Woblii',
				'post_name'   => 'signup',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}
  
		// Log-in
		if( ! get_page_by_path('login') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Iniciar sesión en Woblii',
				'post_name'   => 'login',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}
  
		// Profile page
		if( ! get_page_by_path('profile') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Perfil de usuario',
				'post_name'   => 'profile',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}


	});
