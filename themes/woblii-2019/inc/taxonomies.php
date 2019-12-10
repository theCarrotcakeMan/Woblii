<?php


// TAXONOMIES ////////////////////////////////////////////////////////////////////////


	add_action( 'init', 'custom_taxonomies_callback', 0 );

	function custom_taxonomies_callback(){

		// Giros
		if( ! taxonomy_exists('line-of-business')){

			$labels = array(
				'name'              => 'Giros',
				'singular_name'     => 'Giro',
				'search_items'      => 'Buscar',
				'all_items'         => 'Todos',
				'edit_item'         => 'Editar Giro',
				'update_item'       => 'Actualizar Giro',
				'add_new_item'      => 'Nuevo Giro',
				'new_item_name'     => 'Nombre Nuevo Giro',
				'menu_name'         => 'Giro del negocio'
			);

			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'show_in_nav_menus' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'lines-of-business' ),
			);

			register_taxonomy( 'line-of-business', 'project', $args );
		}
		
		// Rango inversión
		if( ! taxonomy_exists('range')){

			$labels = array(
				'name'              => 'Rangos',
				'singular_name'     => 'Rango',
				'search_items'      => 'Buscar',
				'all_items'         => 'Todos',
				'edit_item'         => 'Editar Rango',
				'update_item'       => 'Actualizar Rango',
				'add_new_item'      => 'Nuevo Rango',
				'new_item_name'     => 'Nombre Nuevo Rango',
				'menu_name'         => 'Rango $'
			);

			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'show_in_nav_menus' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'investment-range' ),
			);

			register_taxonomy( 'investment-range', 'project', $args );
		}
		
		
		// TERMS
		/*if ( ! term_exists( 'some-term', 'autor' ) ){
			wp_insert_term( 'Some term', 'category', array('slug' => 'some-term') );
		}*/

		/* // SUB TERMS CREATION
		if(term_exists('parent-term', 'category')){
			$term = get_term_by( 'slug', 'parent-term', 'category');
			$term_id = intval($term->term_id);
			if ( ! term_exists( 'child-term', 'category' ) ){
				wp_insert_term( 'A child term', 'category', array('slug' => 'child-term', 'parent' => $term_id) );
			}
			
		} */
	}
