<?php
/**
 * Functions for custom post types
 *
 * @link https://developer.wordpress.org/themes/basics/post-types/
 *
 * @package BaseTheme Package
 * @since 1.0.0
 */

function register_cpt_quotes() {
	// CPT Labels
	$cpt_singular_capital   = 'Quote'; // Name of the post type shown in the menu
	$cpt_plural_capital     = 'Quotes';
	$cpt_singular_lowercase = 'quote';
	$cpt_plural_lowercase   = 'quotes';

	// CPT Slug & Name
	$cpt_register_key = 'quote';  // This is the registering name of the single CPT post. (Try to keep it singular).
	$cpt_slug         = 'quote';  // This is the permalink slug of single CPT post. (Try to keep it singular).
	// The slug will become - www.website.com/quotes/single-quote-name

	$labels = array(
		'name'                  => _x( 'Quotes', 'Post type general name', 'databook_td' ),
		'singular_name'         => _x( 'Quote', 'Post type singular name', 'databook_td' ),
		'menu_name'             => _x( 'Quotes', 'Admin Menu text', 'databook_td' ),
		'name_admin_bar'        => _x( 'Quote', 'Add New on Toolbar', 'databook_td' ),
		'add_new'               => __( 'Add New ', 'databook_td' ),
		'add_new_item'          => __( 'Add New ' . 'Quote', 'databook_td' ),
		'new_item'              => __( 'New ' . 'Quote', 'databook_td' ),
		'edit_item'             => __( 'Edit ' . 'Quote', 'databook_td' ),
		'update_item'           => __( 'Update ' . 'Quote', 'databook_td' ),
		'view_item'             => __( 'View  ' . 'Quote', 'databook_td' ),
		'view_items'            => __( 'View  ' . 'Quotes', 'databook_td' ),
		'all_items'             => __( 'All ' . 'Quotes', 'databook_td' ),
		'search_items'          => __( 'Search ' . 'Quotes', 'databook_td' ),
		'parent_item_colon'     => __( 'Parent: ' . 'Quote', 'databook_td' ),
		'not_found'             => __( 'No ' . 'quotes' . ' found.', 'databook_td' ),
		'not_found_in_trash'    => __( 'No ' . 'quotes' . ' found in Trash.', 'databook_td' ),
		'featured_image'        => _x( 'Quote' . ' Featured Image', 'Overrides the “Featured Image” phrase.', 'databook_td' ),
		'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase.', 'databook_td' ),
		'remove_featured_image' => _x( 'Remove ' . 'quote' . ' image', 'Overrides the “Remove featured image” phrase.', 'databook_td' ),
		'use_featured_image'    => _x( 'Use as ' . 'quote' . ' image', 'Overrides the “Use as featured image” phrase.', 'databook_td' ),
		'archives'              => _x( 'Quote' . ' archives', 'The post type archive label used in nav menus.', 'databook_td' ),
		'attributes'            => _x( 'Quote' . ' attributes', 'The post type attributes label.', 'databook_td' ),
		'insert_into_item'      => _x( 'Insert into ' . 'quote', 'Overrides the “Insert into post” phrase.', 'databook_td' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this ' . 'quote', 'Overrides the “Uploaded to this post” phrase.', 'databook_td' ),
		'filter_items_list'     => _x( 'Filter ' . 'quotes' . ' list', 'Screen reader text for the filter links.', 'databook_td' ),
		'items_list_navigation' => _x( 'Quotes' . ' list navigation', 'Screen reader text for the pagination.', 'databook_td' ),
		'items_list'            => _x( 'Quotes' . ' list', 'Screen reader text for the items list.', 'databook_td' ),
	);
	$args   = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_position'      => null,
		'map_meta_cap'       => true,
		'show_in_rest'       => true,
		'supports'           => array( 'title', 'editor', 'author', 'excerpt' ),
		'capability_type'    => 'page', // Set this value for each CPT.
		'has_archive'        => false, // Set this value for each CPT.
		'hierarchical'       => true, // Set this value for each CPT.
		'menu_icon'          => 'dashicons-groups', // Set this value for each CPT.
		'rewrite'            => array(
			'slug'       => $cpt_slug,
			'with_front' => true, // If required only then set this value for each CPT.
		),
	);
	register_post_type( $cpt_register_key, $args );
}

/**
 * Register custom tags for Experiments cpt
 */
function quote_taxonomy() {

	// CPT Slug & Name
	$tax_parent       = 'quote'; // This is registering name of respective CPT.
	$tax_register_key = 'quote_category';  // This is the registering name of the taxonomy (Try to keep it plural).
	$tax_slug         = 'quote_category'; // This is the permalink slug of taxonomy archive (Try to keep it plural).
	// The slug will become - www.website.com/testimonials/single-testimonial-category

	$labels = array(
		'name'                       => _x( 'Quote Category', 'Taxonomy General Name', 'databook_td' ),
		'singular_name'              => _x( 'Quote Category', 'Taxonomy Singular Name', 'databook_td' ),
		'menu_name'                  => __( 'Quote Categories', 'databook_td' ),
		'all_items'                  => __( 'All Items', 'databook_td' ),
		'parent_item'                => __( 'Parent Item', 'databook_td' ),
		'parent_item_colon'          => __( 'Parent Item:', 'databook_td' ),
		'new_item_name'              => __( 'New Item Name', 'databook_td' ),
		'add_new_item'               => __( 'Add New Item', 'databook_td' ),
		'edit_item'                  => __( 'Edit Item', 'databook_td' ),
		'update_item'                => __( 'Update Item', 'databook_td' ),
		'view_item'                  => __( 'View Item', 'databook_td' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'databook_td' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'databook_td' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'databook_td' ),
		'popular_items'              => __( 'Popular Items', 'databook_td' ),
		'search_items'               => __( 'Search Items', 'databook_td' ),
		'not_found'                  => __( 'Not Found', 'databook_td' ),
		'no_terms'                   => __( 'No items', 'databook_td' ),
		'items_list'                 => __( 'Items list', 'databook_td' ),
		'items_list_navigation'      => __( 'Items list navigation', 'databook_td' ),
	);
	$args   = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => true,
		'query_var'         => true,
		'show_in_quick_edit'=> false,
		'meta_box_cb'       => false,
		'rewrite'           => array(
			'slug'       => $tax_slug,
			'with_front' => false, // If required only then set this for each taxonomy.
		),
	);
	register_taxonomy( $tax_register_key, array( $tax_parent ), $args );

}

add_action( 'init', 'quote_taxonomy', 0 );

function register_cpt_casestudy() {
	// CPT Labels
	$cpt_singular_capital   = 'Case Study'; // Name of the post type shown in the menu
	$cpt_plural_capital     = 'Case Studys';
	$cpt_singular_lowercase = 'case study';
	$cpt_plural_lowercase   = 'case studys';

	// CPT Slug & Name
	$cpt_register_key = 'casestudy';  // This is the registering name of the single CPT post. (Try to keep it singular).
	$cpt_slug         = 'casestudy';  // This is the permalink slug of single CPT post. (Try to keep it singular).
	// The slug will become - www.website.com/testimonial/single-testimonial-name

	$supports = array(
		'title', // post title
		'editor', // post content
		'author', // post author
		'thumbnail', // featured images
		'excerpt', // post excerpt
		'custom-fields', // custom fields
		'comments', // post comments
		'revisions', // post revisions
		'post-formats', // post formats
		'page-attributes',
		);

	$labels = array(
		'name'                  => __( 'Case Study', 'Post type general name', 'databook_td' ),
		'singular_name'         => __( 'Case Study', 'Post type singular name', 'databook_td' ),
		'menu_name'             => __( 'Case Study', 'Admin Menu text', 'databook_td' ),
		'name_admin_bar'        => __( 'Case Study', 'Add New on Toolbar', 'databook_td' ),
		'add_new'               => __( 'Add New ', 'databook_td' ),
		'add_new_item'          => __( 'Add New ', 'Case Study', 'databook_td' ),
		'new_item'              => __( 'New ' , 'Case Study', 'databook_td' ),
		'edit_item'             => __( 'Edit ','Case Study', 'databook_td' ),
		'update_item'           => __( 'Update ','Case Study', 'databook_td' ),
		'view_item'             => __( 'View  ','Case Study', 'databook_td' ),
		'view_items'            => __( 'View  ','Case Studys', 'databook_td' ),
		'all_items'             => __( 'All ','Case Study', 'databook_td' ),
		'search_items'          => __( 'Search ','Case Studys', 'databook_td' ),
		'parent_item_colon'     => __( 'Parent: ','Case Study', 'databook_td' ),
		'not_found'             => __( 'No ','Case Studys',' found.', 'databook_td' ),
		'not_found_in_trash'    => __( 'No ','Case Studys',' found in Trash.', 'databook_td' ),
		'featured_image'        => _x( 'Featured Image',' Featured Image', 'Overrides the “Featured Image” phrase.', 'databook_td' ),
		'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase.', 'databook_td' ),
		'remove_featured_image' => _x( 'Remove ','Case Study',' image', 'Overrides the “Remove featured image” phrase.', 'databook_td' ),
		'use_featured_image'    => _x( 'Use as ','Case Study',' image', 'Overrides the “Use as featured image” phrase.', 'databook_td' ),
		'archives'              => _x( 'Case Study',' archives', 'The post type archive label used in nav menus.', 'databook_td' ),
		'attributes'            => _x( 'Case Study',' attributes', 'The post type attributes label.', 'databook_td' ),
		'insert_into_item'      => _x( 'Insert into ','Case Study', 'Overrides the “Insert into post” phrase.', 'databook_td' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this ','Case Study', 'Overrides the “Uploaded to this post” phrase.', 'databook_td' ),
		'filter_items_list'     => _x( 'Filter ','Case Studys',' list', 'Screen reader text for the filter links.', 'databook_td' ),
		'items_list_navigation' => _x( 'Case Studys',' list navigation', 'Screen reader text for the pagination.', 'databook_td' ),
		'items_list'            => _x( 'Case Studys',' list', 'Screen reader text for the items list.', 'databook_td' ),
	);
	$args   = array(
		'labels'              => $labels,
		'public'              => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'query_var'           => true,
		'menu_position'       => null,
		'map_meta_cap'        => true,
		'show_in_rest'        => true,
		'supports'            => $supports,
		'capability_type'     => 'page', // Set this value for each CPT.
		'has_archive'         => true, // Set this value for each CPT.
		'hierarchical'        => false, // Set this value for each CPT.
		'menu_icon'           => 'dashicons-groups', // Set this value for each CPT.
		'rewrite'             => array(
			'slug'       => $cpt_slug,
			'with_front' => false, // If required only then set this value for each CPT.
		),

	);
	register_post_type( $cpt_register_key, $args );
}
function register_cpt_resources() {
	// CPT Labels
	$cpt_singular_capital   = 'Resource'; // Name of the post type shown in the menu
	$cpt_plural_capital     = 'Resources';
	$cpt_singular_lowercase = 'resource';
	$cpt_plural_lowercase   = 'resources';
	$cpt_register_key = 'resource';  // This is the registering name of the single CPT post. (Try to keep it singular).
	$cpt_slugs         = 'resource';  // This is the permalink slug of single CPT post. (Try to keep it singular).

	$supports = array(
		'title', 
		'editor', 
		'author', 
		'thumbnail', 
		'excerpt',
		'custom-fields', 
		'comments',
		'revisions', 
		'post-formats',
		);
	$labels = array(
		'name'                  => _x( $cpt_plural_capital, 'Post type general name', 'databook_td' ),
		'singular_name'         => _x( $cpt_singular_capital, 'Post type singular name', 'databook_td' ),
		'menu_name'             => _x( $cpt_plural_capital, 'Admin Menu text', 'databook_td' ),
		'name_admin_bar'        => _x( $cpt_singular_capital, 'Add New on Toolbar', 'databook_td' ),
		'add_new'               => __( 'Add New ', 'databook_td' ),
		'add_new_item'          => __( 'Add New ' . $cpt_singular_capital, 'databook_td' ),
		'new_item'              => __( 'New ' . $cpt_singular_capital, 'databook_td' ),
		'edit_item'             => __( 'Edit ' . $cpt_singular_capital, 'databook_td' ),
		'update_item'           => __( 'Update ' . $cpt_singular_capital, 'databook_td' ),
		'view_item'             => __( 'View  ' . $cpt_singular_capital, 'databook_td' ),
		'view_items'            => __( 'View  ' . $cpt_plural_capital, 'databook_td' ),
		'all_items'             => __( 'All ' . $cpt_plural_capital, 'databook_td' ),
		'search_items'          => __( 'Search ' . $cpt_plural_capital, 'databook_td' ),
		'parent_item_colon'     => __( 'Parent: ' . $cpt_singular_capital, 'databook_td' ),
		'not_found'             => __( 'No ' . $cpt_plural_capital . ' found.', 'databook_td' ),
		'not_found_in_trash'    => __( 'No ' . $cpt_plural_capital . ' found in Trash.', 'databook_td' ),
		'featured_image'        => _x( $cpt_singular_capital . ' Featured Image', 'Overrides the “Featured Image” phrase.', 'databook_td' ),
		'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase.', 'databook_td' ),
		'remove_featured_image' => _x( 'Remove ' . $cpt_singular_capital . ' image', 'Overrides the “Remove featured image” phrase.', 'databook_td' ),
		'use_featured_image'    => _x( 'Use as ' . $cpt_singular_capital . ' image', 'Overrides the “Use as featured image” phrase.', 'databook_td' ),
		'archives'              => _x( $cpt_singular_capital . ' archives', 'The post type archive label used in nav menus.', 'databook_td' ),
		'attributes'            => _x( $cpt_singular_capital . ' attributes', 'The post type attributes label.', 'databook_td' ),
		'insert_into_item'      => _x( 'Insert into ' . $cpt_singular_capital, 'Overrides the “Insert into post” phrase.', 'databook_td' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this ' . $cpt_singular_capital, 'Overrides the “Uploaded to this post” phrase.', 'databook_td' ),
		'filter_items_list'     => _x( 'Filter ' . $cpt_plural_capital . ' list', 'Screen reader text for the filter links.', 'databook_td' ),
		'items_list_navigation' => _x( $cpt_plural_capital . ' list navigation', 'Screen reader text for the pagination.', 'databook_td' ),
		'items_list'            => _x( $cpt_plural_capital . ' list', 'Screen reader text for the items list.', 'databook_td' ),
	);
	$args   = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_position'      => null,
		'map_meta_cap'       => true,
		'show_in_rest'       => true,
		'supports'           => $supports,
		'capability_type'    => 'page', // Set this value for each CPT.
		'has_archive'        => 'resource', // Set this value for each CPT.
		'hierarchical'       => true, // Set this value for each CPT.
		'menu_icon'          => 'dashicons-groups', // Set this value for each CPT.
		'rewrite'            => array(
			
			'slug'       => 'resource/%resource_category%',
			'with_front' => true, // If required only then set this value for each CPT.
		),
		'capabilities'       => array(
            'edit_post'              => 'edit_resource',
            'edit_posts'             => 'edit_resources',
            'edit_others_posts'      => 'edit_other_resource',
            'publish_posts'         => 'publish_resource',
            'read_post'              => 'read_resource',
            'read_private_posts'    => 'read_private_resource',
            'delete_post'            => 'delete_resource',
            'delete_published_posts' => 'delete_published_resource',
            'delete_others_posts'   => 'delete_other_resource', 
        ),
	);
	register_post_type( $cpt_register_key, $args );
}
function register_cpt_press_mentions() {
	// CPT Labels
	$cpt_singular_capital   = 'Press Mentions'; // Name of the post type shown in the menu
	$cpt_plural_capital     = 'Press Mentions';
	$cpt_singular_lowercase = 'press mentions';
	$cpt_plural_lowercase   = 'press mentions';

	// CPT Slug & Name
	$cpt_register_key = 'press_mentions';  // This is the registering name of the single CPT post. (Try to keep it singular).
	$cpt_slug         = 'press-mentions';  // This is the permalink slug of single CPT post. (Try to keep it singular).
	// The slug will become - www.website.com/testimonial/single-testimonial-name

	$labels = array(
		'name'                  => _x( $cpt_singular_capital, 'Post type general name', 'databook_td' ),
		'singular_name'         => _x( $cpt_singular_capital, 'Post type singular name', 'databook_td' ),
		'menu_name'             => _x( $cpt_singular_capital, 'Admin Menu text', 'databook_td' ),
		'name_admin_bar'        => _x( $cpt_singular_capital, 'Add New on Toolbar', 'databook_td' ),
		'add_new'               => __( 'Add New ', 'databook_td' ),
		'add_new_item'          => __( 'Add New ' . $cpt_singular_capital, 'databook_td' ),
		'new_item'              => __( 'New ' . $cpt_singular_capital, 'databook_td' ),
		'edit_item'             => __( 'Edit ' . $cpt_singular_capital, 'databook_td' ),
		'update_item'           => __( 'Update ' . $cpt_singular_capital, 'databook_td' ),
		'view_item'             => __( 'View  ' . $cpt_singular_capital, 'databook_td' ),
		'view_items'            => __( 'View  ' . $cpt_singular_capital, 'databook_td' ),
		'all_items'             => __( 'All ' . $cpt_singular_capital, 'databook_td' ),
		'search_items'          => __( 'Search ' . $cpt_singular_capital, 'databook_td' ),
		'parent_item_colon'     => __( 'Parent: ' . $cpt_singular_capital, 'databook_td' ),
		'not_found'             => __( 'No ' . $cpt_singular_lowercase . ' found.', 'databook_td' ),
		'not_found_in_trash'    => __( 'No ' . $cpt_singular_lowercase . ' found in Trash.', 'databook_td' ),
		// 'featured_image'        => _x( $cpt_singular_capital . ' Featured Image', 'Overrides the “Featured Image” phrase.', 'databook_td' ),
		// 'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase.', 'databook_td' ),
		// 'remove_featured_image' => _x( 'Remove ' .$cpt_plural_lowercase  . ' image', 'Overrides the “Remove featured image” phrase.', 'databook_td' ),
		// 'use_featured_image'    => _x( 'Use as ' .$cpt_plural_lowercase  . ' image', 'Overrides the “Use as featured image” phrase.', 'databook_td' ),
		'archives'              => _x($cpt_singular_lowercase . ' archives', 'The post type archive label used in nav menus.', 'databook_td' ),
		'attributes'            => _x($cpt_singular_lowercase . ' attributes', 'The post type attributes label.', 'databook_td' ),
		'insert_into_item'      => _x( 'Insert into ' . $cpt_plural_lowercase, 'Overrides the “Insert into post” phrase.', 'databook_td' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this ' . $cpt_plural_lowercase, 'Overrides the “Uploaded to this post” phrase.', 'databook_td' ),
		'filter_items_list'     => _x( 'Filter ' . $cpt_singular_lowercase . ' list', 'Screen reader text for the filter links.', 'databook_td' ),
		'items_list_navigation' => _x( $cpt_plural_capital . ' list navigation', 'Screen reader text for the pagination.', 'databook_td' ),
		'items_list'            => _x( $cpt_plural_capital . ' list', 'Screen reader text for the items list.', 'databook_td' ),
	);
	$args   = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_position'      => null,
		'map_meta_cap'       => true,
		'show_in_rest'       => true,
		'supports'           => array( 'editor', 'title'),
		'capability_type'    => 'page', // Set this value for each CPT.
		'has_archive'        => true, // Set this value for each CPT.
		'hierarchical'       => true, // Set this value for each CPT.
		'menu_icon'          => 'dashicons-groups', // Set this value for each CPT.
		'rewrite'            => array(
			
			'slug'       => $cpt_slug,
			'with_front' => true, // If required only then set this value for each CPT.
		),

	);
	register_post_type( $cpt_register_key, $args );
}
function register_cpt_team() {
	// CPT Labels
	$cpt_singular_capital   = 'Team Member'; // Name of the post type shown in the menu
	$cpt_plural_capital     = 'Team Members';
	$cpt_singular_lowercase = 'team member';
	$cpt_plural_lowercase   = 'team members';

	// CPT Slug & Name
	$cpt_register_key = 'team';  // This is the registering name of the single CPT post. (Try to keep it singular).
	$cpt_slug         = 'team';  // This is the permalink slug of single CPT post. (Try to keep it singular).
	// The slug will become - www.website.com/testimonial/single-testimonial-name

	$labels = array(
		'name'                  => __( 'Team Members', 'Post type general name', 'databook_td' ),
		'singular_name'         => __( 'Team Member', 'Post type singular name', 'databook_td' ),
		'menu_name'             => __( 'Team Members', 'Admin Menu text', 'databook_td' ),
		'name_admin_bar'        => __( 'Team Member', 'Add New on Toolbar', 'databook_td' ),
		'add_new'               => __( 'Add New ', 'databook_td' ),
		'add_new_item'          => __( 'Add New ' . 'Team Member', 'databook_td' ),
		'new_item'              => __( 'New ' . 'Team Member', 'databook_td' ),
		'edit_item'             => __( 'Edit ' . 'Team Member', 'databook_td' ),
		'update_item'           => __( 'Update ' . 'Team Member', 'databook_td' ),
		'view_item'             => __( 'View  ' . 'Team Member', 'databook_td' ),
		'view_items'            => __( 'View  ' . 'Team Members', 'databook_td' ),
		'all_items'             => __( 'All ' . 'Team Members', 'databook_td' ),
		'search_items'          => __( 'Search ' . 'Team Members', 'databook_td' ),
		'parent_item_colon'     => __( 'Parent: ' . 'Team Member', 'databook_td' ),
		'not_found'             => __( 'No ' . 'team members' . ' found.', 'databook_td' ),
		'not_found_in_trash'    => __( 'No ' . 'team members' . ' found in Trash.', 'databook_td' ),
		'featured_image'        => _x( 'Team Member' . ' Featured Image', 'Overrides the “Featured Image” phrase.', 'databook_td' ),
		'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase.', 'databook_td' ),
		'remove_featured_image' => _x( 'Remove ' . 'team member' . ' image', 'Overrides the “Remove featured image” phrase.', 'databook_td' ),
		'use_featured_image'    => _x( 'Use as ' . 'team member' . ' image', 'Overrides the “Use as featured image” phrase.', 'databook_td' ),
		'archives'              => _x( 'Team Member' . ' archives', 'The post type archive label used in nav menus.', 'databook_td' ),
		'attributes'            => _x( 'Team Member' . ' attributes', 'The post type attributes label.', 'databook_td' ),
		'insert_into_item'      => _x( 'Insert into ' . 'team member', 'Overrides the “Insert into post” phrase.', 'databook_td' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this ' . 'team member', 'Overrides the “Uploaded to this post” phrase.', 'databook_td' ),
		'filter_items_list'     => _x( 'Filter ' . 'team members' . ' list', 'Screen reader text for the filter links.', 'databook_td' ),
		'items_list_navigation' => _x( 'Team Members' . ' list navigation', 'Screen reader text for the pagination.', 'databook_td' ),
		'items_list'            => _x( 'Team Members' . ' list', 'Screen reader text for the items list.', 'databook_td' ),
	);
	$args   = array(
		'labels'              => $labels,
		'public'              => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'query_var'           => true,
		'menu_position'       => null,
		'map_meta_cap'        => true,
		'show_in_rest'        => true,
		'supports'            => array( 'title', 'thumbnail' ),
		'capability_type'     => 'page', // Set this value for each CPT.
		'has_archive'         => false, // Set this value for each CPT.
		'hierarchical'        => true, // Set this value for each CPT.
		'menu_icon'           => 'dashicons-groups', // Set this value for each CPT.
		'rewrite'             => array(
			'slug'       => $cpt_slug,
			'with_front' => false, // If required only then set this value for each CPT.
		),

	);
	register_post_type( $cpt_register_key, $args );
}

add_action( 'init', 'register_cpt_team' );
add_action( 'init', 'register_cpt_resources' );
add_action( 'init', 'register_cpt_press_mentions' );
add_action( 'init', 'register_cpt_quotes' );
add_action( 'init', 'register_cpt_casestudy' );


/**
 * Register custom tags for Experiments cpt
 */
function casestudy_taxonomy() {

	// CPT Slug & Name
	$tax_parent       = 'casestudy'; // This is registering name of respective CPT.
	$tax_register_key = 'casestudy_category';  // This is the registering name of the taxonomy (Try to keep it plural).
	$tax_slug         = 'casestudy_category'; // This is the permalink slug of taxonomy archive (Try to keep it plural).
	// The slug will become - www.website.com/testimonials/single-testimonial-category

	$labels = array(
		'name'                       => _x( 'Casestudy Category', 'Taxonomy General Name', 'databook_td' ),
		'singular_name'              => _x( 'Casestudy Category', 'Taxonomy Singular Name', 'databook_td' ),
		'menu_name'                  => __( 'Casestudy Categories', 'databook_td' ),
		'all_items'                  => __( 'All Items', 'databook_td' ),
		'parent_item'                => __( 'Parent Item', 'databook_td' ),
		'parent_item_colon'          => __( 'Parent Item:', 'databook_td' ),
		'new_item_name'              => __( 'New Item Name', 'databook_td' ),
		'add_new_item'               => __( 'Add New Item', 'databook_td' ),
		'edit_item'                  => __( 'Edit Item', 'databook_td' ),
		'update_item'                => __( 'Update Item', 'databook_td' ),
		'view_item'                  => __( 'View Item', 'databook_td' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'databook_td' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'databook_td' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'databook_td' ),
		'popular_items'              => __( 'Popular Items', 'databook_td' ),
		'search_items'               => __( 'Search Items', 'databook_td' ),
		'not_found'                  => __( 'Not Found', 'databook_td' ),
		'no_terms'                   => __( 'No items', 'databook_td' ),
		'items_list'                 => __( 'Items list', 'databook_td' ),
		'items_list_navigation'      => __( 'Items list navigation', 'databook_td' ),
	);
	$args   = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => true,
		'query_var'         => true,
		'show_in_quick_edit'=> false,
		'meta_box_cb'       => false,
		'rewrite'           => array(
			'slug'       => $tax_slug,
			'with_front' => false, // If required only then set this for each taxonomy.
		),
	);
	register_taxonomy( $tax_register_key, array( $tax_parent ), $args );

}

add_action( 'init', 'casestudy_taxonomy', 0 );

/**
 * Register custom tags for Experiments cpt
 */
function resource_taxonomy() {

	// CPT Slug & Name
	$tax_parent       = 'resource'; // This is registering name of respective CPT.
	$tax_register_key = 'resource_category';  // This is the registering name of the taxonomy (Try to keep it plural).
	$tax_slug         = 'resource_category'; // This is the permalink slug of taxonomy archive (Try to keep it plural).
	// The slug will become - www.website.com/testimonials/single-testimonial-category

	$labels = array(
		'name'                       => _x( 'Resource Category', 'Taxonomy General Name', 'databook_td' ),
		'singular_name'              => _x( 'Resource Category', 'Taxonomy Singular Name', 'databook_td' ),
		'menu_name'                  => __( 'Resource Categories', 'databook_td' ),
		'all_items'                  => __( 'All Items', 'databook_td' ),
		'parent_item'                => __( 'Parent Item', 'databook_td' ),
		'parent_item_colon'          => __( 'Parent Item:', 'databook_td' ),
		'new_item_name'              => __( 'New Item Name', 'databook_td' ),
		'add_new_item'               => __( 'Add New Item', 'databook_td' ),
		'edit_item'                  => __( 'Edit Item', 'databook_td' ),
		'update_item'                => __( 'Update Item', 'databook_td' ),
		'view_item'                  => __( 'View Item', 'databook_td' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'databook_td' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'databook_td' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'databook_td' ),
		'popular_items'              => __( 'Popular Items', 'databook_td' ),
		'search_items'               => __( 'Search Items', 'databook_td' ),
		'not_found'                  => __( 'Not Found', 'databook_td' ),
		'no_terms'                   => __( 'No items', 'databook_td' ),
		'items_list'                 => __( 'Items list', 'databook_td' ),
		'items_list_navigation'      => __( 'Items list navigation', 'databook_td' ),
	);
	$args   = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => true,
		'query_var'         => true,
		'show_in_quick_edit'=> false,
		'meta_box_cb'       => false,
		'capabilities'      => array(
            'manage_terms'  => 'edit_resource_categories',
            'edit_terms'    => 'edit_resource_categories',
            'delete_terms'  => 'delete_resource_categories',
            'assign_terms'  => 'assign_resource_categories',
        ),
		// 'rewrite'           => array(
		// 	"rewrite" => "hierarchical",
		// 	'slug'       => $tax_slug,
		// 	'with_front' => false, // If required only then set this for each taxonomy.
		// ),
		'rewrite' => array('slug' => 'resource')
	);
	register_taxonomy( $tax_register_key, array( $tax_parent ), $args );

}

add_action( 'init', 'resource_taxonomy', 0 );

// function press_mentions_taxonomy() {

// 	// CPT Slug & Name
// 	$tax_parent       = 'press_mentions'; // This is registering name of respective CPT.
// 	$tax_register_key = 'press_mentions_category';  // This is the registering name of the taxonomy (Try to keep it plural).
// 	$tax_slug         = 'press_mentions_category'; // This is the permalink slug of taxonomy archive (Try to keep it plural).
// 	// The slug will become - www.website.com/testimonials/single-testimonial-category

// 	$labels = array(
// 		'name'                       => _x( 'Press Mentions Category', 'Taxonomy General Name', 'databook_td' ),
// 		'singular_name'              => _x( 'Press Mentions Category', 'Taxonomy Singular Name', 'databook_td' ),
// 		'menu_name'                  => __( 'Press Mentions Categories', 'databook_td' ),
// 		'all_items'                  => __( 'All Items', 'databook_td' ),
// 		'parent_item'                => __( 'Parent Item', 'databook_td' ),
// 		'parent_item_colon'          => __( 'Parent Item:', 'databook_td' ),
// 		'new_item_name'              => __( 'New Item Name', 'databook_td' ),
// 		'add_new_item'               => __( 'Add New Item', 'databook_td' ),
// 		'edit_item'                  => __( 'Edit Item', 'databook_td' ),
// 		'update_item'                => __( 'Update Item', 'databook_td' ),
// 		'view_item'                  => __( 'View Item', 'databook_td' ),
// 		'separate_items_with_commas' => __( 'Separate items with commas', 'databook_td' ),
// 		'add_or_remove_items'        => __( 'Add or remove items', 'databook_td' ),
// 		'choose_from_most_used'      => __( 'Choose from the most used', 'databook_td' ),
// 		'popular_items'              => __( 'Popular Items', 'databook_td' ),
// 		'search_items'               => __( 'Search Items', 'databook_td' ),
// 		'not_found'                  => __( 'Not Found', 'databook_td' ),
// 		'no_terms'                   => __( 'No items', 'databook_td' ),
// 		'items_list'                 => __( 'Items list', 'databook_td' ),
// 		'items_list_navigation'      => __( 'Items list navigation', 'databook_td' ),
// 	);
// 	$args   = array(
// 		'labels'            => $labels,
// 		'hierarchical'      => true,
// 		'public'            => true,
// 		'show_ui'           => true,
// 		'show_in_rest'      => true,
// 		'show_admin_column' => true,
// 		'show_in_nav_menus' => true,
// 		'query_var'         => true,
// 		'show_in_quick_edit'=> false,
// 		'meta_box_cb'       => false,
// 		'rewrite'           => array(
// 			"rewrite" => "hierarchical",
// 			'slug'       => $tax_slug,
// 			'with_front' => false, // If required only then set this for each taxonomy.
// 		),
// 	);
// 	register_taxonomy( $tax_register_key, array( $tax_parent ), $args );

// }

// add_action( 'init', 'press_mentions_taxonomy', 0 );


// Team Member Taxonomy

add_action( 'init', 'team_members_taxonomy', 0 );
function team_members_taxonomy() {
  
  $labels = array(
    'name' => _x( 'team-categories', 'taxonomy general name' ),
    'singular_name' => _x( 'Team Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Team Categories' ),
    'all_items' => __( 'All Team Categories' ),
    'parent_item' => __( 'Parent Category' ),
    'parent_item_colon' => __( 'Parent Team Category:' ),
    'edit_item' => __( 'Edit Team Category' ), 
    'update_item' => __( 'Update Team Category' ),
    'add_new_item' => __( 'Add New Team Category' ),
    'new_item_name' => __( 'New Team Category Name' ),
    'menu_name' => __( 'Team Categories' ),
  );    
  
  register_taxonomy('team-categories',array('team'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'team-categories' ),
  ));
  
}
