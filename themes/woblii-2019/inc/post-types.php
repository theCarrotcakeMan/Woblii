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
			'menu_position'      => 1,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'project', $args );

	});