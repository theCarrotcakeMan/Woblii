<?php


// DEFINIR LOS PATHS A LOS DIRECTORIOS DE JAVASCRIPT Y CSS ///////////////////////////



	define( 'JSPATH', get_template_directory_uri() . '/dist/js/' );

	define( 'CSSPATH', get_template_directory_uri() . '/assets/css/' );

	define( 'THEMEPATH', get_template_directory_uri() . '/' );
	
	define( 'SITEURL', site_url('/') );



// FRONT END SCRIPTS AND STYLES //////////////////////////////////////////////////////



	add_action( 'wp_enqueue_scripts', function(){

		// scripts
//		wp_enqueue_script( 'plugins', JSPATH.'plugins.js', array('jquery'), '1.0', true );
  
		// Vuejs Dev
        // wp_enqueue_script( 'vuejs', 'https://cdn.jsdelivr.net/npm/vue/dist/vue.js' );
        // Vuejs Prod
        // wp_enqueue_script( 'vuejs', 'https://cdn.jsdelivr.net/npm/vue@2.6.0' );

        wp_enqueue_script( 'bundle', JSPATH.'bundle.js', [], '1.0', true );
		
        // localize scripts
		wp_localize_script( 'bundle', 'ajax_url', admin_url('admin-ajax.php') );
  
		// styles
		wp_enqueue_style( 'styles', get_stylesheet_uri() );

	});



// ADMIN SCRIPTS AND STYLES //////////////////////////////////////////////////////////



	add_action( 'admin_enqueue_scripts', function(){

		// scripts
		wp_enqueue_script( 'admin-js', JSPATH.'admin.js', array('jquery'), '1.0', true );

		// localize scripts
		wp_localize_script( 'admin-js', 'ajax_url', admin_url('admin-ajax.php') );

		// styles
		wp_enqueue_style( 'admin-assets', CSSPATH.'admin.css' );

	});



// FRONT PAGE DISPLAYS A STATIC PAGE /////////////////////////////////////////////////



	add_action( 'after_setup_theme', function () {
		
		$frontPage = get_page_by_path('home', OBJECT);
		$feedPage  = get_page_by_path('my-feed', OBJECT);
		
		if ( $frontPage ){
			update_option('show_on_front', 'page');
			update_option('page_on_front', $frontPage->ID);
			update_option('page_for_posts', $feedPage->ID);
		}
		
	});



// REMOVE ADMIN BAR FOR NON ADMINS ///////////////////////////////////////////////////



	add_filter( 'show_admin_bar', function($content){
		return false;
	});



// CAMBIAR EL CONTENIDO DEL FOOTER EN EL DASHBOARD ///////////////////////////////////



	add_filter( 'admin_footer_text', function() {
		echo 'Created with love and coffee by <a href="http://pixelton.xyz">John Falcon</a>. ';
		echo 'Powered by <a href="http://www.wordpress.org">WordPress</a>';
	});



// POST THUMBNAILS SUPPORT ///////////////////////////////////////////////////////////



	if ( function_exists('add_theme_support') ){
		add_theme_support('post-thumbnails');
	}

	if ( function_exists('add_image_size') ){
		
		// add_image_size( 'size_name', 200, 200, true );
		
		// cambiar el tamaño del thumbnail
		/*
		update_option( 'thumbnail_size_h', 100 );
		update_option( 'thumbnail_size_w', 200 );
		update_option( 'thumbnail_crop', false );
		*/
	}



// POST TYPES, METABOXES, TAXONOMIES AND CUSTOM PAGES ////////////////////////////////



	require_once('inc/post-types.php');


	require_once('inc/metaboxes.php');


	require_once('inc/taxonomies.php');


	require_once('inc/pages.php');
	
	
	require_once('inc/users.php');
	
	
// MODIFICAR EL MAIN QUERY ///////////////////////////////////////////////////////////



	add_action( 'pre_get_posts', function($query){

//		if ( is_page('lets-do-this-together') and ! is_admin() ) {
//		    echo print_r($query);
//            $query->set( 'post_type', 'woblii-post' );
//            $query->set( 'posts_per_page', 8 );
//		}
		return $query;

	});



// THE EXECRPT FORMAT AND LENGTH /////////////////////////////////////////////////////



	/*add_filter('excerpt_length', function($length){
		return 20;
	});*/


	/*add_filter('excerpt_more', function(){
		return ' &raquo;';
	});*/



// REMOVE ACCENTS AND THE LETTER Ñ FROM FILE NAMES ///////////////////////////////////



	add_filter( 'sanitize_file_name', function ($filename) {
		$filename = str_replace('ñ', 'n', $filename);
		return remove_accents($filename);
	});



// HELPER METHODS AND FUNCTIONS //////////////////////////////////////////////////////



	/**
	 * Print the <title> tag based on what is being viewed.
	 * @return string
	 */
	function print_title(){
		global $page, $paged;

		wp_title( '|', true, 'right' );
		bloginfo( 'name' );

		// Add a page number if necessary
		if ( $paged >= 2 || $page >= 2 ){
			echo ' | ' . sprintf( __( 'Página %s' ), max( $paged, $page ) );
		}
	}



	/**
	 * Imprime una lista separada por commas de todos los terms asociados al post id especificado
	 * los terms pertenecen a la taxonomia especificada. Default: Category
	 *
	 * @param  int     $post_id
	 * @param  string  $taxonomy
	 * @return string
	 */
	function print_the_terms($post_id, $taxonomy = 'category'){
		$terms = get_the_terms( $post_id, $taxonomy );

		if ( $terms and ! is_wp_error($terms) ){
			$names = wp_list_pluck($terms ,'name');
			echo implode(', ', $names);
		}
	}



	/**
	 * Regresa la url del attachment especificado
	 * @param  int     $post_id
	 * @param  string  $size
	 * @return string  url de la imagen
	 */
	function attachment_image_url($post_id, $size){
		$image_id   = get_post_thumbnail_id($post_id);
		$image_data = wp_get_attachment_image_src($image_id, $size, true);
		echo isset($image_data[0]) ? $image_data[0] : '';
	}



	/*
	 * Echoes active if the page showing is associated with the parameter
	 * @param  string $compare, Array $compare
	 * @param  Bool $echo use FALSE to use with php, default is TRUE to echo value
	 * @return string
	 */
	function nav_is($compare = array(), $echo = TRUE){

		$query = get_queried_object();
		$inner_array = array();
		if(gettype($compare) == 'string'){
			
			$inner_array[] = $compare;
		}else{
			$inner_array = $compare;
		}

		foreach ($inner_array as $value) {
			if( isset($query->slug) AND preg_match("/$value/i", $query->slug)
				OR isset($query->name) AND preg_match("/$value/i", $query->name)
				OR isset($query->rewrite) AND preg_match("/$value/i", $query->rewrite['slug'])
				OR isset($query->post_name) AND preg_match("/$value/i", $query->post_name)
				OR isset($query->post_title) AND preg_match("/$value/i", remove_accents(str_replace(' ', '-', $query->post_title) ) ) )
			{
				if($echo){
					echo 'active';
				}else{
					return 'active';
				}
				return FALSE;
			}

		}
		return FALSE;
	}

    /*
     * Echoes active if the page showing is associated with the parameter
     * @param  Array $attrs
     * @param  String $user_role
     * @return Bool
     */
	function register_woblii_user($attrs = [], $user_role = ""){
	    
        $attrs['user_login'] = strtolower(str_replace(' ', '',$attrs['user_firstname'].$attrs['user_lastname']));
        $attrs['first_name'] = $attrs['user_firstname'];
        $attrs['last_name'] = $attrs['user_lastname'];
        $result = wp_insert_user($attrs);
        if( !is_wp_error($result) )
            wp_redirect( site_url('login?message=Cuenta+creada+exitosamente.+Ahora+puedes+acceder+a+Woblii.'));
        exit;
        wp_redirect( site_url('?error=Error!') );
        exit;
    }
    
    /*
     * Process user update
     */
    add_action('wp_ajax_nopriv_update_user', 'update_woblii_user');
    add_action('wp_ajax_update_user', 'update_woblii_user');
    
    function update_woblii_user($attrs = [], $user_role = ""){
        
        if(!$attrs['ID'])
            return FALSE;
        
        if($attrs['user_age'])
            update_user_meta($attrs['ID'],'user_age', $attrs['user_age']);
        if($attrs['user_gender'])
            update_user_meta($attrs['ID'],'user_gender', $attrs['user_gender']);
        
        $result = wp_update_user($attrs);
    
        if( $result )
                wp_send_json_success(NULL, 200);
            wp_die();
        
        wp_send_json_error(NULL, 500);
        wp_die();
    }

	/*
     * Echoes active if the page showing is associated with the parameter
     * @param  Array $attrs
     * @param  String $user_role
     * @return Bool
     */
	function register_woblii_user_json($attrs = [], $user_role = ""){
        
        $result = wp_insert_user($attrs);
        return !is_wp_error($result) ? wp_send_json($result) : wp_send_json_error();
    }
    
    function fetchUserObject($currentUser)
    {
    
        // $userMeta = get_user_meta($currentUser->ID, NULL, TRUE);
        
        $currentUser->data->role = $currentUser->roles[0];
        $currentUser->data->pretty_role = ucfirst($currentUser->roles[0]);
        $currentUser->data->first_name  = get_user_meta($currentUser->ID, "first_name", TRUE);
        $currentUser->data->last_name   = get_user_meta($currentUser->ID, "last_name", TRUE);
        $currentUser->data->bio         = get_user_meta($currentUser->ID, "description", TRUE);
        $currentUser->data->nickname    = get_user_meta($currentUser->ID, "nickname", TRUE);
        
        // Unset non-secure data
        unset($currentUser->user_pass, $currentUser->user_status, $currentUser->user_activation_key);
    
        return $currentUser->data;
    }
    
    
    
    add_action('wp_ajax_nopriv_contact_form', 'contact_form_callback');
    add_action('wp_ajax_contact_form', 'contact_form_callback');
    
    function contact_form_callback() {
        
        $client_name = ( isset($_POST['client_name']) ) ? $_POST['client_name'] : NULL;
        $client_mail = ( isset($_POST['client_mail']) ) ? $_POST['client_mail'] : NULL;
        $client_message = ( isset($_POST['client_message']) ) ? $_POST['client_message'] : '';
        if ( $client_mail && $client_name && $client_message ){
            
            $mail_to = 'johnleparadox@gmail.com';
            
            $subject = 'Contacto Intus.tv';
            
            $body_message = 'Nombre: '.$client_name."\n";
            $body_message .= 'E-mail: '.$client_mail."\n";
            $body_message .= 'Mensaje: '.$client_message;
            
            $headers = 'From: '.$client_mail."\r\n";
            $headers .= 'Reply-to: '.$client_mail."\r\n";
            
            if( wp_mail($mail_to, $subject, $body_message, $headers) )
                wp_send_json_success(NULL, 200);
            wp_die();
        }
        wp_send_json_error(NULL, 500);
        wp_die();
    }


function jsonToProp($data)
    {
        return json_encode($data, JSON_HEX_QUOT);
    }