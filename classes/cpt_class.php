<?php 			
class customPostType{	
	 function __construct()
	 {	
		add_action( 'init', array( $this, 'cpt_program'), 0);
		add_action( 'init', array( $this, 'cpt_instruktor'), 0 );
	 }	
	function cpt_program() {
		$labels = array(
			'name'                  => _x( 'Programi', 'Post Type General Name', 'fitbit' ),
			'singular_name'         => _x( 'Program', 'Post Type Singular Name', 'fitbit' ),
			'menu_name'             => __( 'Programi', 'fitbit' ),
			'name_admin_bar'        => __( 'Programi', 'fitbit' ),
			'archives'              => __( 'Programi arhiva', 'fitbit' ),
			'attributes'            => __( 'Atributi', 'fitbit' ),
			'parent_item_colon'     => __( 'Parent Item:', 'fitbit' ),
			'all_items'             => __( 'Svi programi', 'fitbit' ),
			'add_new_item'          => __( 'Dodaj novi program', 'fitbit' ),
			'add_new'               => __( 'Dodaj novi', 'fitbit' ),
			'new_item'              => __( 'Dodaj program', 'fitbit' ),
			'edit_item'             => __( 'Uredi program', 'fitbit' ),
			'update_item'           => __( 'Ažuriraj program', 'fitbit' ),
			'view_item'             => __( 'Pregledaj program', 'fitbit' ),
			'view_items'            => __( 'Pregledaj programe', 'fitbit' ),
			'search_items'          => __( 'Pretraži programe', 'fitbit' ),
			'not_found'             => __( 'Nema pronađenih programa', 'fitbit' ),
			'not_found_in_trash'    => __( 'Nema programa u smeću', 'fitbit' ),
			'featured_image'        => __( 'Glavna slika', 'fitbit' ),
			'set_featured_image'    => __( 'Postavi glavnu sliku', 'fitbit' ),
			'remove_featured_image' => __( 'Ukloni glavnu sliku', 'fitbit' ),
			'use_featured_image'    => __( 'Koristi kao glavnu sliku', 'fitbit' ),
			'insert_into_item'      => __( 'Umetni u program', 'fitbit' ),
			'uploaded_to_this_item' => __( 'Dodano na program', 'fitbit' ),
			'items_list'            => __( 'Lista programa', 'fitbit' ),
			'items_list_navigation' => __( 'Navigacija kroz programe', 'fitbit' ),
			'filter_items_list'     => __( 'Filtriraj programe', 'fitbit' ),
		);
		$args = array(
			'label'                 => __( 'Program', 'fitbit' ),
			'description'           => __( 'Post Type Description', 'fitbit' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor','thumbnail' ),
			'taxonomies'            => array( 'tezina', ' vjezba' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'program', $args );
	}
	function cpt_instruktor() {

		$labels = array(
			'name'                  => _x( 'Instruktori', 'Post Type General Name', 'fitbit' ),
			'singular_name'         => _x( 'Instruktor', 'Post Type Singular Name', 'fitbit' ),
			'menu_name'             => __( 'Instruktori', 'fitbit' ),
			'name_admin_bar'        => __( 'Instruktori', 'fitbit' ),
			'archives'              => __( 'Arhiva instruktora', 'fitbit' ),
			'attributes'            => __( 'Atributi', 'fitbit' ),
			'parent_item_colon'     => __( 'Parent Item:', 'fitbit' ),
			'all_items'             => __( 'Svi instruktori', 'fitbit' ),
			'add_new_item'          => __( 'Dodaj novog instruktora', 'fitbit' ),
			'add_new'               => __( 'Dodaj novog', 'fitbit' ),
			'new_item'              => __( 'Novi instruktor', 'fitbit' ),
			'edit_item'             => __( 'Uredi instruktora', 'fitbit' ),
			'update_item'           => __( 'Ažuriraj instruktora', 'fitbit' ),
			'view_item'             => __( 'Pregledaj instruktora', 'fitbit' ),
			'view_items'            => __( 'Pregledaj instruktore', 'fitbit' ),
			'search_items'          => __( 'Pretraži instruktore', 'fitbit' ),
			'not_found'             => __( 'Nema pronađenih instruktora', 'fitbit' ),
			'not_found_in_trash'    => __( 'Nema instruktora u smeću', 'fitbit' ),
			'featured_image'        => __( 'Glavna slika', 'fitbit' ),
			'set_featured_image'    => __( 'Postavi glavnu sliku', 'fitbit' ),
			'remove_featured_image' => __( 'Ukloni glavnu sliku', 'fitbit' ),
			'use_featured_image'    => __( 'Koristi kao glavnu sliku', 'fitbit' ),
			'insert_into_item'      => __( 'Umetni u instruktora', 'fitbit' ),
			'uploaded_to_this_item' => __( 'Dodano na instruktora', 'fitbit' ),
			'items_list'            => __( 'Lista instruktora', 'fitbit' ),
			'items_list_navigation' => __( 'Navigacija kroz instruktore', 'fitbit' ),
			'filter_items_list'     => __( 'Filtrirana lista instruktora', 'fitbit' ),
		);
		$args = array(
			'label'                 => __( 'Instruktor', 'fitbit' ),
			'description'           => __( 'Post Type Description', 'fitbit' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail'),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'instruktor', $args );
	}
}
?>