<?php
/*
Plugin Name: Custom Posts
Plugin URI:
Description: Adds Custom Post Types to AliveGene Website
Version:     1.0
Author:      HirajDey
Author URI:
License:     GNU General Public License v2 or later
License URI: LICENSE
*/


// Post Type Home
add_action('init', 'aliveGene_home_post', 0);

function aliveGene_home_post(){

	// Labels for the Post Type
	$labels = array(
		'name'                => _x( 'Home', 'Post Type General Name', 'alivegene' ),
		'singular_name'       => _x( 'Home', 'Post Type Singular Name', 'alivegene' ),
		'menu_name'           => __( 'Home', 'alivegene' ),
		'parent_item_colon'   => __( 'Parent Home', 'alivegene' ),
		'all_items'           => __( 'All Homes', 'alivegene' ),
		'view_item'           => __( 'View Home', 'alivegene' ),
		'add_new_item'        => __( 'Add New', 'alivegene' ),
		'add_new'             => __( 'Add New', 'alivegene' ),
		'edit_item'           => __( 'Edit Home', 'alivegene' ),
		'update_item'         => __( 'Update Home', 'alivegene' ),
		'search_items'        => __( 'Search Home', 'alivegene' ),
		'not_found'           => __( 'Not Found', 'alivegene' ),
		'not_found_in_trash'  => __( 'Not found in trash', 'alivegene' ),
	);

	// Anothers Customizations

	$args = array(

		'label'               => __( 'Home', 'alivegene' ),
		'description'         => __( 'Home for alivegene', 'alivegene' ),
		'labels'              => $labels,
		// Adding Support for the Post type
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/*
		* Hierarchical: Like Pages, can have parents or children.
		* Non Hierachical: Like Posts, can't have parents or childs.
		*/
		'hierarchical'        => false,
		'public'              => true, //how the type is visible to authors
		'show_ui'             => true, //Generate a default UI in the admin
		'show_in_menu'        => true, //Show or not in the admin menu
		'show_in_nav_menus'   => true, //Is available to select on Nav Menus
		'show_in_admin_bar'   => true, // show or not in the admin bar
		'menu_position'       => 2, // The position order of the post type in the admin menu
		'menu_icon'           => 'dashicons-admin-home', // the icon for the admin menu
		'can_export'          => true, // can this post type be exported
		'has_archive'         => true, //enables archives to this post type
		'exclude_from_search' => false, // exclude from search results
		'capability_type'     => 'page', // the name of the capability that will be generated or used

	);

	// register the new post type
	register_post_type( 'home', $args );

} 


    //Banner Taxonomy For Home Post	
    add_action('init', 'banner_taxonomy');

    function banner_taxonomy() {
      $labels = array(
      	'name'              => _x( 'Banners', 'taxonomy general name' ),
      	'singular_name'     => _x( 'Banners', 'taxonomy singular name' ),
      	'search_items'      => __( 'Search Banner' ),
      	'all_items'         => __( 'All Banners' ),
      	'parent_item'       => __( 'Parent Banner' ),
      	'parent_item_colon' => __( 'Parent Banner:' ),
      	'edit_item'         => __( 'Edit Banner' ),
      	'update_item'       => __( 'Update Banner' ),
      	'add_new_item'      => __( 'Add Banner' ),
      	'new_item_name'     => __( 'New Banner' ),
      	'menu_name'         => __( 'Banners'),
      );

      $args = array(
        'hierarchical'  => true, //like categories or tags
        'labels'        => $labels,
        'show_ui'       => true, //add the default UI to this taxonomy
        'show_admin_column' => true, //add the taxonomies to the wordpress admin
        'query_var'         => true,
        'rewrite'       => array('slug' =>'banners'),
      );

      register_taxonomy( 'banners', 'home', $args );
    }


    //Sections Taxonomy For All Custom Post 
    add_action('init', 'home_sections_taxonomy');

    function home_sections_taxonomy() {
      $labels = array(
        'name'              => _x( 'Home Sections', 'taxonomy general name' ),
        'singular_name'     => _x( 'Home Sections', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Home Section' ),
        'all_items'         => __( 'All Home Sections' ),
        'parent_item'       => __( 'Parent Home Section' ),
        'parent_item_colon' => __( 'Parent Home Section:' ),
        'edit_item'         => __( 'Edit Home Section' ),
        'update_item'       => __( 'Update Home Section' ),
        'add_new_item'      => __( 'Add Home Section' ),
        'new_item_name'     => __( 'New Home Section' ),
        'menu_name'         => __( 'Home Sections'),
      );

      $args = array(
        'hierarchical'  => true, //like categories or tags
        'labels'        => $labels,
        'show_ui'       => true, //add the default UI to this taxonomy
        'show_admin_column' => true, //add the taxonomies to the wordpress admin
        'query_var'         => true,
        'rewrite'       => array('slug' =>'sections'),
      );

      register_taxonomy( 'home-sections', 'home', $args );

    }//End of Script for Sections Taxonomy 

// End of Script for Post Type Home



// Post Type Individual
add_action('init', 'aliveGene_individual_post', 0);

function aliveGene_individual_post(){

  // Labels for the Post Type
  $labels = array(
    'name'                => _x( 'Individual', 'Post Type General Name', 'alivegene' ),
    'singular_name'       => _x( 'Individual', 'Post Type Singular Name', 'alivegene' ),
    'menu_name'           => __( 'Individual', 'alivegene' ),
    'parent_item_colon'   => __( 'Parent Individual', 'alivegene' ),
    'all_items'           => __( 'All Individuals', 'alivegene' ),
    'view_item'           => __( 'View Individual', 'alivegene' ),
    'add_new_item'        => __( 'Add New', 'alivegene' ),
    'add_new'             => __( 'Add New', 'alivegene' ),
    'edit_item'           => __( 'Edit Individual', 'alivegene' ),
    'update_item'         => __( 'Update Individual', 'alivegene' ),
    'search_items'        => __( 'Search Individual', 'alivegene' ),
    'not_found'           => __( 'Not Found', 'alivegene' ),
    'not_found_in_trash'  => __( 'Not found in trash', 'alivegene' ),
  );

  // Anothers Customizations

  $args = array(

    'label'               => __( 'Individual', 'alivegene' ),
    'description'         => __( 'Individual for alivegene', 'alivegene' ),
    'labels'              => $labels,
    // Adding Support for the Post type
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    /*
    * Hierarchical: Like Pages, can have parents or children.
    * Non Hierachical: Like Posts, can't have parents or childs.
    */
    'hierarchical'        => false,
    'public'              => true, //how the type is visible to authors
    'show_ui'             => true, //Generate a default UI in the admin
    'show_in_menu'        => true, //Show or not in the admin menu
    'show_in_nav_menus'   => true, //Is available to select on Nav Menus
    'show_in_admin_bar'   => true, // show or not in the admin bar
    'menu_position'       => 3, // The position order of the post type in the admin menu
    'menu_icon'           => 'dashicons-admin-post', // the icon for the admin menu
    'can_export'          => true, // can this post type be exported
    'has_archive'         => true, //enables archives to this post type
    'exclude_from_search' => false, // exclude from search results
    'capability_type'     => 'page', // the name of the capability that will be generated or used

  );

  // register the new post type
  register_post_type( 'individual', $args );

} 

    //Sections Taxonomy For All Custom Post 
    add_action('init', 'individual_sections_taxonomy');

    function individual_sections_taxonomy() {
      $labels = array(
        'name'              => _x( 'Individual Sections', 'taxonomy general name' ),
        'singular_name'     => _x( 'Individual Sections', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Individual Section' ),
        'all_items'         => __( 'All Individual Sections' ),
        'parent_item'       => __( 'Parent Individual Section' ),
        'parent_item_colon' => __( 'Parent Individual Section:' ),
        'edit_item'         => __( 'Edit Individual Section' ),
        'update_item'       => __( 'Update Individual Section' ),
        'add_new_item'      => __( 'Add Individual Section' ),
        'new_item_name'     => __( 'New Individual Section' ),
        'menu_name'         => __( 'Individual Sections'),
      );

      $args = array(
        'hierarchical'  => true, //like categories or tags
        'labels'        => $labels,
        'show_ui'       => true, //add the default UI to this taxonomy
        'show_admin_column' => true, //add the taxonomies to the wordpress admin
        'query_var'         => true,
        'rewrite'       => array('slug' =>'sections'),
      );

      register_taxonomy( 'individual-sections', 'individual', $args );

    } //End of Script for Sections Taxonomy 


//End of script for Individual  




// Post Type Clinicians
add_action('init', 'aliveGene_clinicians_post', 0);

function aliveGene_clinicians_post(){

  // Labels for the Post Type
  $labels = array(
    'name'                => _x( 'Clinicians', 'Post Type General Name', 'alivegene' ),
    'singular_name'       => _x( 'Clinicians', 'Post Type Singular Name', 'alivegene' ),
    'menu_name'           => __( 'Clinicians', 'alivegene' ),
    'parent_item_colon'   => __( 'Parent Clinicians', 'alivegene' ),
    'all_items'           => __( 'All Clinicians', 'alivegene' ),
    'view_item'           => __( 'View Clinicians', 'alivegene' ),
    'add_new_item'        => __( 'Add New', 'alivegene' ),
    'add_new'             => __( 'Add New', 'alivegene' ),
    'edit_item'           => __( 'Edit Clinicians', 'alivegene' ),
    'update_item'         => __( 'Update Clinicians', 'alivegene' ),
    'search_items'        => __( 'Search Clinicians', 'alivegene' ),
    'not_found'           => __( 'Not Found', 'alivegene' ),
    'not_found_in_trash'  => __( 'Not found in trash', 'alivegene' ),
  );

  // Anothers Customizations

  $args = array(

    'label'               => __( 'Clinicians', 'alivegene' ),
    'description'         => __( 'Clinicians for alivegene', 'alivegene' ),
    'labels'              => $labels,
    // Adding Support for the Post type
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    /*
    * Hierarchical: Like Pages, can have parents or children.
    * Non Hierachical: Like Posts, can't have parents or childs.
    */
    'hierarchical'        => false,
    'public'              => true, //how the type is visible to authors
    'show_ui'             => true, //Generate a default UI in the admin
    'show_in_menu'        => true, //Show or not in the admin menu
    'show_in_nav_menus'   => true, //Is available to select on Nav Menus
    'show_in_admin_bar'   => true, // show or not in the admin bar
    'menu_position'       => 4, // The position order of the post type in the admin menu
    'menu_icon'           => 'dashicons-admin-post', // the icon for the admin menu
    'can_export'          => true, // can this post type be exported
    'has_archive'         => true, //enables archives to this post type
    'exclude_from_search' => false, // exclude from search results
    'capability_type'     => 'page', // the name of the capability that will be generated or used

  );

  // register the new post type
  register_post_type( 'clinicians', $args );

} 

    //Generic Services Taxonomy 
    add_action('init', 'generic_services_taxonomy');

    function generic_services_taxonomy() {
      $labels = array(
        'name'              => _x( 'Generic Services', 'taxonomy general name' ),
        'singular_name'     => _x( 'Generic Services', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Generic Services' ),
        'all_items'         => __( 'All Generic Services' ),
        'parent_item'       => __( 'Parent Generic Services' ),
        'parent_item_colon' => __( 'Parent Generic Services:' ),
        'edit_item'         => __( 'Edit Generic Services' ),
        'update_item'       => __( 'Update Generic Services' ),
        'add_new_item'      => __( 'Add Generic Services' ),
        'new_item_name'     => __( 'New Generic Services' ),
        'menu_name'         => __( 'Generic Services'),
      );

      $args = array(
        'hierarchical'  => true, //like categories or tags
        'labels'        => $labels,
        'show_ui'       => true, //add the default UI to this taxonomy
        'show_admin_column' => true, //add the taxonomies to the wordpress admin
        'query_var'         => true,
        'rewrite'       => array('slug' =>'generic-services'),
      );

      register_taxonomy( 'generic-services', array('clinicians'), $args );

    }//End of Script for Generic Services Taxonomy 


    //Refer Patient Taxonomy 
    add_action('init', 'refer_patient_taxonomy');

    function refer_patient_taxonomy() {
      $labels = array(
        'name'              => _x( 'Refer Patient', 'taxonomy general name' ),
        'singular_name'     => _x( 'Refer Patient', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Refer Patient' ),
        'all_items'         => __( 'All Refer Patient' ),
        'parent_item'       => __( 'Parent Refer Patient' ),
        'parent_item_colon' => __( 'Parent Refer Patient:' ),
        'edit_item'         => __( 'Edit Refer Patient' ),
        'update_item'       => __( 'Update Refer Patient' ),
        'add_new_item'      => __( 'Add Refer Patient' ),
        'new_item_name'     => __( 'New Refer Patient' ),
        'menu_name'         => __( 'Refer Patient'),
      );

      $args = array(
        'hierarchical'  => true, //like categories or tags
        'labels'        => $labels,
        'show_ui'       => true, //add the default UI to this taxonomy
        'show_admin_column' => true, //add the taxonomies to the wordpress admin
        'query_var'         => true,
        'rewrite'       => array('slug' =>'refer-patient'),
      );

      register_taxonomy( 'refer-patient', array('clinicians'), $args );

    }//End of Script for Refer Patient Taxonomy 

  
//End of script for Post Type Clinicians   



// Post Type Partners
add_action('init', 'aliveGene_partners_post', 0);

function aliveGene_partners_post(){

  // Labels for the Post Type
  $labels = array(
    'name'                => _x( 'Partners', 'Post Type General Name', 'alivegene' ),
    'singular_name'       => _x( 'Partners', 'Post Type Singular Name', 'alivegene' ),
    'menu_name'           => __( 'Partners', 'alivegene' ),
    'parent_item_colon'   => __( 'Parent Partners', 'alivegene' ),
    'all_items'           => __( 'All Partners', 'alivegene' ),
    'view_item'           => __( 'View Partners', 'alivegene' ),
    'add_new_item'        => __( 'Add New', 'alivegene' ),
    'add_new'             => __( 'Add New', 'alivegene' ),
    'edit_item'           => __( 'Edit Partners', 'alivegene' ),
    'update_item'         => __( 'Update Partners', 'alivegene' ),
    'search_items'        => __( 'Search Partners', 'alivegene' ),
    'not_found'           => __( 'Not Found', 'alivegene' ),
    'not_found_in_trash'  => __( 'Not found in trash', 'alivegene' ),
  );

  // Anothers Customizations

  $args = array(

    'label'               => __( 'Partners', 'alivegene' ),
    'description'         => __( 'Partners for alivegene', 'alivegene' ),
    'labels'              => $labels,
    // Adding Support for the Post type
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    /*
    * Hierarchical: Like Pages, can have parents or children.
    * Non Hierachical: Like Posts, can't have parents or childs.
    */
    'hierarchical'        => false,
    'public'              => true, //how the type is visible to authors
    'show_ui'             => true, //Generate a default UI in the admin
    'show_in_menu'        => true, //Show or not in the admin menu
    'show_in_nav_menus'   => true, //Is available to select on Nav Menus
    'show_in_admin_bar'   => true, // show or not in the admin bar
    'menu_position'       => 5, // The position order of the post type in the admin menu
    'menu_icon'           => 'dashicons-admin-post', // the icon for the admin menu
    'can_export'          => true, // can this post type be exported
    'has_archive'         => true, //enables archives to this post type
    'exclude_from_search' => false, // exclude from search results
    'capability_type'     => 'page', // the name of the capability that will be generated or used

  );

  // register the new post type
  register_post_type( 'partners', $args );

} 

      //Sections Taxonomy For All Custom Post 
    add_action('init', 'partners_sections_taxonomy');

    function partners_sections_taxonomy() {
      $labels = array(
        'name'              => _x( 'Partner Sections', 'taxonomy general name' ),
        'singular_name'     => _x( 'Partner Sections', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Partner Section' ),
        'all_items'         => __( 'All Partner Sections' ),
        'parent_item'       => __( 'Parent Partner Section' ),
        'parent_item_colon' => __( 'Parent Partner Section:' ),
        'edit_item'         => __( 'Edit Partner Section' ),
        'update_item'       => __( 'Update Partner Section' ),
        'add_new_item'      => __( 'Add Partner Section' ),
        'new_item_name'     => __( 'New Partner Section' ),
        'menu_name'         => __( 'Partner Sections'),
      );

      $args = array(
        'hierarchical'  => true, //like categories or tags
        'labels'        => $labels,
        'show_ui'       => true, //add the default UI to this taxonomy
        'show_admin_column' => true, //add the taxonomies to the wordpress admin
        'query_var'         => true,
        'rewrite'       => array('slug' =>'sections'),
      );

      register_taxonomy( 'partner-sections', 'partners', $args );

    }//End of Script for Sections Taxonomy 

//End of script for Post Type Partners   




//Post Type Start with Science
add_action('init', 'aliveGene_start_with_science_post', 0);


function aliveGene_start_with_science_post(){

  // Labels for the Post Type
  $labels = array(
    'name'                => _x( 'Start With Science', 'Post Type General Name', 'alivegene' ),
    'singular_name'       => _x( 'Start With Science', 'Post Type Singular Name', 'alivegene' ),
    'menu_name'           => __( 'Start With Science', 'alivegene' ),
    'parent_item_colon'   => __( 'Parent Start With Science', 'alivegene' ),
    'all_items'           => __( 'All Start With Science', 'alivegene' ),
    'view_item'           => __( 'View Start With Science', 'alivegene' ),
    'add_new_item'        => __( 'Add New', 'alivegene' ),
    'add_new'             => __( 'Add New', 'alivegene' ),
    'edit_item'           => __( 'Edit Start With Science', 'alivegene' ),
    'update_item'         => __( 'Update Start With Science', 'alivegene' ),
    'search_items'        => __( 'Search Start With Science', 'alivegene' ),
    'not_found'           => __( 'Not Found', 'alivegene' ),
    'not_found_in_trash'  => __( 'Not found in trash', 'alivegene' ),
  );

  // Anothers Customizations

  $args = array(

    'label'               => __( 'Start With Science', 'alivegene' ),
    'description'         => __( 'Start With Science for alivegene', 'alivegene' ),
    'labels'              => $labels,
    // Adding Support for the Post type
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    /*
    * Hierarchical: Like Pages, can have parents or children.
    * Non Hierachical: Like Posts, can't have parents or childs.
    */
    'hierarchical'        => false,
    'public'              => true, //how the type is visible to authors
    'show_ui'             => true, //Generate a default UI in the admin
    'show_in_menu'        => true, //Show or not in the admin menu
    'show_in_nav_menus'   => true, //Is available to select on Nav Menus
    'show_in_admin_bar'   => true, // show or not in the admin bar
    'menu_position'       => 6, // The position order of the post type in the admin menu
    'menu_icon'           => 'dashicons-admin-post', // the icon for the admin menu
    'can_export'          => true, // can this post type be exported
    'has_archive'         => true, //enables archives to this post type
    'exclude_from_search' => false, // exclude from search results
    'capability_type'     => 'page', // the name of the capability that will be generated or used

  );

  // register the new post type
  register_post_type( 'start-with-science', $args );

} 

    //Sections Taxonomy For All Custom Post 
    add_action('init', 'startwithscience_sections_taxonomy');

    function startwithscience_sections_taxonomy() {
      $labels = array(
        'name'              => _x( 'SWS Sections', 'taxonomy general name' ),
        'singular_name'     => _x( 'SWS Sections', 'taxonomy singular name' ),
        'search_items'      => __( 'Search SWS Section' ),
        'all_items'         => __( 'All SWS Sections' ),
        'parent_item'       => __( 'Parent SWS Section' ),
        'parent_item_colon' => __( 'Parent SWS Section:' ),
        'edit_item'         => __( 'Edit SWS Section' ),
        'update_item'       => __( 'Update Section' ),
        'add_new_item'      => __( 'Add SWS Section' ),
        'new_item_name'     => __( 'New SWS Section' ),
        'menu_name'         => __( 'SWS Sections'),
      );

      $args = array(
        'hierarchical'  => true, //like categories or tags
        'labels'        => $labels,
        'show_ui'       => true, //add the default UI to this taxonomy
        'show_admin_column' => true, //add the taxonomies to the wordpress admin
        'query_var'         => true,
        'rewrite'       => array('slug' =>'sections'),
      );

      register_taxonomy( 'sws-sections', 'start-with-science', $args );

    }//End of Script for Sections Taxonomy 


//End of script for Post Type Start with Science   




//Post Type Our Team
add_action('init', 'aliveGene_our_team_post', 0);


function aliveGene_our_team_post(){

  // Labels for the Post Type
  $labels = array(
    'name'                => _x( 'Our Team', 'Post Type General Name', 'alivegene' ),
    'singular_name'       => _x( 'Our Team', 'Post Type Singular Name', 'alivegene' ),
    'menu_name'           => __( 'Our Team', 'alivegene' ),
    'parent_item_colon'   => __( 'Parent Our Team', 'alivegene' ),
    'all_items'           => __( 'All Our Team', 'alivegene' ),
    'view_item'           => __( 'View Our Team', 'alivegene' ),
    'add_new_item'        => __( 'Add New', 'alivegene' ),
    'add_new'             => __( 'Add New', 'alivegene' ),
    'edit_item'           => __( 'Edit Our Team', 'alivegene' ),
    'update_item'         => __( 'Update Our Team', 'alivegene' ),
    'search_items'        => __( 'Search Our Team', 'alivegene' ),
    'not_found'           => __( 'Not Found', 'alivegene' ),
    'not_found_in_trash'  => __( 'Not found in trash', 'alivegene' ),
  );

  // Anothers Customizations

  $args = array(

    'label'               => __( 'Our Team', 'alivegene' ),
    'description'         => __( 'Our Team for alivegene', 'alivegene' ),
    'labels'              => $labels,
    // Adding Support for the Post type
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    /*
    * Hierarchical: Like Pages, can have parents or children.
    * Non Hierachical: Like Posts, can't have parents or childs.
    */
    'hierarchical'        => false,
    'public'              => true, //how the type is visible to authors
    'show_ui'             => true, //Generate a default UI in the admin
    'show_in_menu'        => true, //Show or not in the admin menu
    'show_in_nav_menus'   => true, //Is available to select on Nav Menus
    'show_in_admin_bar'   => true, // show or not in the admin bar
    'menu_position'       => 7, // The position order of the post type in the admin menu
    'menu_icon'           => 'dashicons-admin-post', // the icon for the admin menu
    'can_export'          => true, // can this post type be exported
    'has_archive'         => true, //enables archives to this post type
    'exclude_from_search' => false, // exclude from search results
    'capability_type'     => 'page', // the name of the capability that will be generated or used

  );

  // register the new post type
  register_post_type( 'our-team', $args );

} 


  //Sections Taxonomy For All Custom Post 
  add_action('init', 'ourteam_sections_taxonomy');

  function ourteam_sections_taxonomy() {
    $labels = array(
      'name'              => _x( 'Ourteam Sections', 'taxonomy general name' ),
      'singular_name'     => _x( 'Ourteam Sections', 'taxonomy singular name' ),
      'search_items'      => __( 'Search Ourteam Section' ),
      'all_items'         => __( 'All Ourteam Sections' ),
      'parent_item'       => __( 'Parent Ourteam Section' ),
      'parent_item_colon' => __( 'Parent Ourteam Section:' ),
      'edit_item'         => __( 'Edit Ourteam Section' ),
      'update_item'       => __( 'Update Ourteam Section' ),
      'add_new_item'      => __( 'Add Ourteam Section' ),
      'new_item_name'     => __( 'New Ourteam Section' ),
      'menu_name'         => __( 'Ourteam Sections'),
    );

    $args = array(
      'hierarchical'  => true, //like categories or tags
      'labels'        => $labels,
      'show_ui'       => true, //add the default UI to this taxonomy
      'show_admin_column' => true, //add the taxonomies to the wordpress admin
      'query_var'         => true,
      'rewrite'       => array('slug' =>'sections'),
    );

    register_taxonomy( 'ourteam-sections', 'our-team', $args );

  }//End of Script for Sections Taxonomy 

//End of script for Post Type Our Team



// Script For Filter Post By Taxonomie Terms

function filter_cars_by_taxonomies( $post_type, $which ) {
  
  if('home' !== $post_type && 'individual' !== $post_type && 'clinicians' !== $post_type && 'partners' !== $post_type && 'start-with-science' !== $post_type && 'our-team' !== $post_type){
    return;
  }
  // Apply this only on a specific post type
  if ( 'home' == $post_type){   
    $taxonomies = array( 'banners', 'home-sections');
  }
  if ( 'individual' == $post_type){    
    $taxonomies = array( 'individual-sections');
  }
  if ( 'clinicians' == $post_type){    
    $taxonomies = array( 'refer-patient', 'generic-services');
  } 
  if ( 'partners' == $post_type){    
    $taxonomies = array( 'partner-sections');
  }
  if ( 'start-with-science' == $post_type){    
    $taxonomies = array( 'sws-sections');
  } 
  if ( 'our-team' == $post_type){    
    $taxonomies = array( 'ourteam-sections');
  }


  foreach ( $taxonomies as $taxonomy_slug ) {

    // Retrieve taxonomy data
    $taxonomy_obj = get_taxonomy( $taxonomy_slug );
    $taxonomy_name = $taxonomy_obj->labels->name;

    // Retrieve taxonomy terms
    $terms = get_terms( $taxonomy_slug );

    // Display filter HTML
    echo "<select name='{$taxonomy_slug}' id='{$taxonomy_slug}' class='postform'>";
    echo '<option value="">' . sprintf( esc_html__( 'All %s', 'text_domain' ), $taxonomy_name ) . '</option>';
    foreach ( $terms as $term ) {
      printf(
        '<option value="%1$s" %2$s>%3$s (%4$s)</option>',
        $term->slug,
        ( ( isset( $_GET[$taxonomy_slug] ) && ( $_GET[$taxonomy_slug] == $term->slug ) ) ? ' selected="selected"' : '' ),
        $term->name,
        $term->count
      );
    }
    echo '</select>';
  }
}

add_action( 'restrict_manage_posts', 'filter_cars_by_taxonomies' , 10, 2);


























			