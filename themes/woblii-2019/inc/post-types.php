<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// PROJECTS
		$labels = array(
			'name'          => 'Projects',
			'singular_name' => 'Project',
			'add_new'       => 'New Project',
			'add_new_item'  => 'New Project',
			'edit_item'     => 'Edit Project',
			'new_item'      => 'New Project',
			'all_items'     => 'All',
			'view_item'     => 'View Project',
			'search_items'  => 'Search Project',
			'not_found'     => 'Project not found',
			'menu_name'     => 'Projects'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'projects' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 2,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'project', $args );
  
		// Let's do this together
		$labels = array(
			'name'          => 'Woblii Content',
			'singular_name' => 'Content',
			'add_new'       => 'New Content',
			'add_new_item'  => 'New Content',
			'edit_item'     => 'Edit Content',
			'new_item'      => 'New Content',
			'all_items'     => 'All',
			'view_item'     => 'View Content',
			'search_items'  => 'Search Content',
			'not_found'     => 'Content not found',
			'menu_name'     => 'Woblii Content'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'woblii-posts' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 3,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'woblii-post', $args );

	});