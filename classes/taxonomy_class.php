<?php
class customTaxonomies{
		function __construct()
		{
			add_action( 'init', array( $this, 'taxonomy_tezina'));
			add_action( 'init', array( $this, 'taxonomy_vjezba'));	
		}
		function taxonomy_vjezba() {
			$labels = array(
				'name'                       => _x( 'Vježbe', 'Taxonomy General Name', 'fitbit' ),
				'singular_name'              => _x( 'Vježba', 'Taxonomy Singular Name', 'fitbit' ),
				'menu_name'                  => __( 'Vježbe', 'fitbit' ),
				'all_items'                  => __( 'Sve vježbe', 'fitbit' ),
				'parent_item'                => __( 'Parent Item', 'fitbit' ),
				'parent_item_colon'          => __( 'Parent Item:', 'fitbit' ),
				'new_item_name'              => __( 'Nova vježba', 'fitbit' ),
				'add_new_item'               => __( 'Dodaj novu vježbu', 'fitbit' ),
				'edit_item'                  => __( 'Uredi vježbu', 'fitbit' ),
				'update_item'                => __( 'Ažuriraj vježbu', 'fitbit' ),
				'view_item'                  => __( 'Pogledaj vježbu', 'fitbit' ),
				'separate_items_with_commas' => __( 'Odvojite vježbe zarezima', 'fitbit' ),
				'add_or_remove_items'        => __( 'Dodaj ili ukloni vježbe', 'fitbit' ),
				'choose_from_most_used'      => __( 'Odaberite među najpopularnijima', 'fitbit' ),
				'popular_items'              => __( 'Popularne vježbe', 'fitbit' ),
				'search_items'               => __( 'Pretraži vježbe', 'fitbit' ),
				'not_found'                  => __( 'Vježba nije nađena', 'fitbit' ),
				'no_terms'                   => __( 'Nema vježbi', 'fitbit' ),
				'items_list'                 => __( 'Lista vježbi', 'fitbit' ),
				'items_list_navigation'      => __( 'Navigacija kroz vježbe', 'fitbit' ),
			);
			$args = array(
				'labels'                     => $labels,
				'hierarchical'               => false,
				'public'                     => true,
				'show_ui'                    => true,
				'show_admin_column'          => true,
				'show_in_nav_menus'          => true,
				'show_tagcloud'              => true,
			);
			register_taxonomy( 'vjezba', array( 'program'), $args );
		}
			function taxonomy_tezina() {

				$labels = array(
					'name'                       => _x( 'Težine', 'Taxonomy General Name', 'fitbit' ),
					'singular_name'              => _x( 'Težina', 'Taxonomy Singular Name', 'fitbit' ),
					'menu_name'                  => __( 'Težine', 'fitbit' ),
					'all_items'                  => __( 'Sve težin', 'fitbit' ),
					'parent_item'                => __( 'Parent Item', 'fitbit' ),
					'parent_item_colon'          => __( 'Parent Item:', 'fitbit' ),
					'new_item_name'              => __( 'Nova težina', 'fitbit' ),
					'add_new_item'               => __( 'Dodaj novu težinu', 'fitbit' ),
					'edit_item'                  => __( 'Uredi težinu', 'fitbit' ),
					'update_item'                => __( 'Ažuriraj težinu', 'fitbit' ),
					'view_item'                  => __( 'Pregledaj težinu', 'fitbit' ),
					'separate_items_with_commas' => __( 'Odvojite težine zarezima', 'fitbit' ),
					'add_or_remove_items'        => __( 'Dodaj ili ukloni težinu', 'fitbit' ),
					'choose_from_most_used'      => __( 'Odaberite među najkorištenijima', 'fitbit' ),
					'popular_items'              => __( 'Popularne težine', 'fitbit' ),
					'search_items'               => __( 'Pretraži težine', 'fitbit' ),
					'not_found'                  => __( 'Nema pronađenih težin', 'fitbit' ),
					'no_terms'                   => __( 'Nema težine', 'fitbit' ),
					'items_list'                 => __( 'Lista težina', 'fitbit' ),
					'items_list_navigation'      => __( 'Navigacija među težinama', 'fitbit' ),
				);
				$args = array(
					'labels'                     => $labels,
					'hierarchical'               => false,
					'public'                     => true,
					'show_ui'                    => true,
					'show_admin_column'          => true,
					'show_in_nav_menus'          => true,
					'show_tagcloud'              => true,
				);
				register_taxonomy( 'tezina', array( 'program' ), $args );
			}
	} 
 ?>