<?php
/**
 * Custom functions added to all projects
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BaseTheme Package
 * @since 1.0.0
 */

/**
 * Excerpt Function
 *
 * Function used to create custom excerpt.
 */
function glide_excerpt( $count ) {
	global $post;
	$permalink = get_permalink( $post->ID );
	$excerpt   = get_the_excerpt();
	$excerpt   = strip_tags( $excerpt );
	$excerpt   = substr( $excerpt, 0, $count );
	$excerpt   = substr( $excerpt, 0, strripos( $excerpt, ' ' ) );
	$excerpt   = $excerpt . ' ...';
	$excerpt   = $excerpt;
	return $excerpt;
}


/**
 * Excerpt with no read more option
 *
 * Function used to create custom excerpt.
 */
function glide_excerpt_nomore( $count ) {
	global $post;
	$permalink = get_permalink( $post->ID );
	$excerpt   = get_the_excerpt();
	$excerpt   = strip_tags( $excerpt );
	$excerpt   = substr( $excerpt, 0, $count );
	$excerpt   = substr( $excerpt, 0, strripos( $excerpt, ' ' ) );
	$excerpt   = $excerpt;
	return $excerpt;
}


/**
 * Pagination Function
 *
 * The pagination function to display pagination on any archive page
 */
function glide_pagination( $pages = '', $range = 4 ) {
	$showitems = ( $range * 2 ) + 1;

	global $paged;
	if ( empty( $paged ) ) {
		$paged = 1;
	}

	if ( $pages == '' ) {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if ( ! $pages ) {
			$pages = 1;
		}
	}

	if ( 1 != $pages ) {
		echo '<div class="pagination"><span>Page ' . $paged . ' of ' . $pages . '</span>';
		if ( $paged > 2 && $paged > $range + 1 && $showitems < $pages ) {
			echo "<a href='" . get_pagenum_link( 1 ) . "'>&laquo; First</a>";
		}
		if ( $paged > 1 && $showitems < $pages ) {
			echo "<a href='" . get_pagenum_link( $paged - 1 ) . "'>&lsaquo; Previous</a>";
		}

		for ( $i = 1; $i <= $pages; $i++ ) {
			if ( 1 != $pages && ( ! ( $i >= $paged + $range + 1 || $i <= $paged - $range - 1 ) || $pages <= $showitems ) ) {
				echo ( $paged == $i ) ? '<span class="current">' . $i . '</span>' : "<a href='" . get_pagenum_link( $i ) . "' class=\"inactive\">" . $i . '</a>';
			}
		}

		if ( $paged < $pages && $showitems < $pages ) {
			echo '<a href="' . get_pagenum_link( $paged + 1 ) . '">Next &rsaquo;</a>';
		}
		if ( $paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages ) {
			echo "<a href='" . get_pagenum_link( $pages ) . "'>Last &raquo;</a>";
		}
		echo "<div class='clear'></div></div>\n";
	}
}


/**
 * Allow SVG files upload in WordPress Media panel - Default restricted
 */
function glide_svg_upload_support( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}

add_filter( 'upload_mimes', 'glide_svg_upload_support' );


/**
 * Remove default WordPress login logo link & set it to homepage of site
 */
function glide_login_logo_url( $url ) {
	return '"' . home_url() . '"';
}

add_filter( 'login_headerurl', 'glide_login_logo_url' );


/**
 * Add viewport meta tag in head
 */
function glide_viewport() {
	echo '
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	';
}

add_action( 'wp_head', 'glide_viewport' );


/**
 * Gravity forms filters
 */
add_filter( 'gform_confirmation_anchor', '__return_true' );
add_filter( 'gform_init_scripts_footer', '__return_true' );

// Set Tabindex For Gravity Form
add_filter( 'gform_tabindex', 'change_tabindex', 10, 2 );
function change_tabindex( $tabindex, $form ) {
	return 10;
}

/**
 * First and last menu item classes
 */
function glide_first_last_menu_classes( $items ) {
	if ( $items ) {
		$items[1]->classes[]                 = 'first-menu-item';
		$items[ count( $items ) ]->classes[] = 'last-menu-item';
		return $items;
	}
	return $items;
}
add_filter( 'wp_nav_menu_objects', 'glide_first_last_menu_classes' );

/**
 * Gravity Forms
 *
 * Disable the tab-index
 */

add_filter( 'gform_tabindex', '__return_false' );



/**
 * Set favicon of dashboard
 */

function glide_theme_favicon() {
	 $favicon_path = get_template_directory_uri() . '/assets/img/pwa/favicon.ico';

	 echo '<link rel="shortcut icon" href="' . esc_url( $favicon_path ) . '" />';
}

add_action( 'admin_head', 'glide_theme_favicon' );

/**
 * Function to remove the starting words from the_archive_title()
 *
 * E.g. from Category : Dallas Neighborhoods => Dallas Neighborhoods
 */

function glide_theme_archive_title( $title ) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = get_the_author_meta( 'display_name' );
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	} elseif ( is_tax() ) {
		$title = single_term_title( '', false );
	}

	 return $title;
}

add_filter( 'get_the_archive_title', 'glide_theme_archive_title' );



/**
 * Custom logo for WordPress login screen
 *
 * This function replaces the default WordPress logo on the login with website logo.
 */
function glide_login_logo() {
	 echo '
		<style type="text/css">
			.login h1 a {
				background-image: url(' . get_stylesheet_directory_uri() . '/assets/img/databook-black-logo.svg) !important;
				background-position: center center;
				color:rgba(0, 0, 0, 0);
				background-size: contain;
				height: 80px;
				width: 80%;
				outline: 0;
			}
		</style>
	';
}

add_action( 'login_head', 'glide_login_logo' );

// removing parmalink from team cpt
add_action( 'admin_head', 'wpds_custom_admin_post_css' );
function wpds_custom_admin_post_css() {

	 global $post_type;

	if ( $post_type == 'team' ) {
		echo '<style>#edit-slug-box {display:none;}</style>';
	}
}

function myprefix_exclude_ipad( $is_mobile ) {
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') !== false) {
        $is_mobile = false;
    }
    return $is_mobile ;
}
add_filter( 'wp_is_mobile', 'myprefix_exclude_ipad' );

/**
 * New Shortcode created to obfuscate email
 */
add_shortcode( 'obfuscate_email', 'glide_obfuscate_email' );
function glide_obfuscate_email( $atts ) {
	$atts = shortcode_atts( array(
		'email' => null,
		'class'	=> null,
		'style'	=> null,
	), $atts, 'obfuscate_email' );
	
	
	$emailScript = $ArrowHTML = $class = null;
	if(!empty($atts['email'])){
		$emailArr = explode("@",$atts['email']);
		
		if($atts['style']) {
			$ArrowHTML = '<span><img src="'.get_template_directory_uri().'/assets/img/text-arrow.svg"  width="16" height="16"></span>';
		}
		
		if(!empty($atts['class'])){
			$class = '"'.$atts['class'].'"';
		}

		$emailhtml = '<script language="javaScript">';
		$emailhtml .= "var user = '".$emailArr[0]."'; var site = '".$emailArr[1]."';";
		$emailhtml .= "document.write('<a class=".$class." href=\"mailto:'+user+'@'+site+'\">');";
		$emailhtml .= "document.write(user+'@'+site);";
		$emailhtml .= "document.write('".$ArrowHTML."');";
		$emailhtml .= "document.write('</a>');";
		$emailhtml .= '</script>';
		// document.write('</a>');
		
		// $emailhtml = '</script>';
		// $emailhtml = "<a href='mailto:".$atts['email']."' class='".$atts['class']."'>";
		// $emailhtml .= $atts['email'];
		// $emailhtml .= '</a>';
		
	}
	
	return $emailhtml;
}

//Post updated

add_action('acf/save_post', 'db_acf_save_post');
function db_acf_save_post( $post_id ) {
	global $post;
	if ( 'quote' !== $post->post_type ) {		
		return;
	}
	$image_audio_video_option = get_field( 'image_audio_video_option', $post_id );
	
	if($image_audio_video_option=='image') {
		$quote_category = 'Image';
	}
	if($image_audio_video_option=='image_audio') {
		$quote_category = 'Audio';
	}
	if($image_audio_video_option=='image_video') {
		$quote_category = 'Video';
	}
	$term_id = wp_set_object_terms( $post_id, $quote_category, 'quote_category' );
}

//add_action( 'save_post', 'db_set_quote_post_category', 999999999, 3 );

function db_set_quote_post_category( $post_id, $post, $update ) {
	
	// Only set for post_type = post!
	if ( 'quote' !== $post->post_type ) {		
		return;
	}
	
	$image_audio_video_option = get_field( 'image_audio_video_option', $post_id );
	echo $image_audio_video_option; exit; 	
	if($image_audio_video_option=='image') {
		$quote_category = 'Image';
	}
	if($image_audio_video_option=='image_audio') {
		$quote_category = 'Audio';
	}
	if($image_audio_video_option=='image_video') {
		$quote_category = 'Video';
	}
	$term_id = wp_set_object_terms( $post_id, $quote_category, 'quote_category' );
}

function custom_post_type_pagination() {
    global $wp_query;
    // Check if there's more than one page
    if ($wp_query->max_num_pages > 1) { 
        echo '<div class="custom-pagination">';
        
        // Previous link
        if (get_previous_posts_link()) {
            previous_posts_link('<svg xmlns="http://www.w3.org/2000/svg" width="26" height="23" viewBox="0 0 26 23" fill="none">
			<path d="M26 11.5H1M1 11.5L8.78689 4M1 11.5L8.78689 19" stroke="#100F13" stroke-width="1.25"/>
			</svg>');
        } else {
            echo '<span class="disabled"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="23" viewBox="0 0 26 23" fill="none">
			<path d="M26 11.5H1M1 11.5L8.78689 4M1 11.5L8.78689 19" stroke="#100F13" stroke-width="1.25"/>
			</svg></span>';
        }
        // Dropdown for page numbers
        echo '<select id="custom-post-pagination">';
        for ($i = 1; $i <= $wp_query->max_num_pages; $i++) {
            $selected = ($i === get_query_var('paged')) ? ' selected' : '';
            echo '<option value="' . esc_url(get_pagenum_link($i)) . '"' . $selected . '>' .$i . ' / '.$wp_query->max_num_pages .'</option>';
        }
        echo '</select>';
        // Next link
        if (get_next_posts_link()) {
            next_posts_link('<svg xmlns="http://www.w3.org/2000/svg" width="26" height="23" viewBox="0 0 26 23" fill="none">
			<path d="M0 11.5H25M25 11.5L17.2131 4M25 11.5L17.2131 19" stroke="#100F13" stroke-width="1.25"/>
			</svg>');
        } else {
            echo '<span class="disabled"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="23" viewBox="0 0 26 23" fill="none">
			<path d="M0 11.5H25M25 11.5L17.2131 4M25 11.5L17.2131 19" stroke="#100F13" stroke-width="1.25"/>
			</svg></span>';
        }
        echo '</div>';
    }
}

//Rewrite resource post slug
add_filter('post_type_link', 'projectcategory_permalink_structure', 10, 4);
function projectcategory_permalink_structure($post_link, $post, $leavename, $sample) {
    if (false !== strpos($post_link, '%resource_category%')) {
        $projectscategory_type_term = get_the_terms($post->ID, 'resource_category');
        if (!empty($projectscategory_type_term))
            $post_link = str_replace('%resource_category%', array_pop($projectscategory_type_term)->
            slug, $post_link);
        else
            $post_link = str_replace('%resource_category%', 'uncategorized', $post_link);
    }
    return $post_link;
}
//Rewrite resource taxonomy slug
function resources_cpt_generating_rule($wp_rewrite) {
    $rules = array();
    $terms = get_terms( array(
        'taxonomy' => 'resource_category',
        'hide_empty' => false,
    ) );
   
    $post_type = 'resource';

    foreach ($terms as $term) {    
                
        $rules['resource/' . $term->slug . '/([^/]*)$'] = 'index.php?post_type=' . $post_type. '&resource=$matches[1]&name=$matches[1]';
                        
    }

    // merge with global rules
    $wp_rewrite->rules = $rules + $wp_rewrite->rules;
}
add_filter('generate_rewrite_rules', 'resources_cpt_generating_rule');

/* Post Reading Time get and set */
function databook_post_reading_time()
{
	global $post;
    $content = get_post_field('post_content',get_the_ID());
    $word_count = str_word_count(strip_tags($content));
    // echo '<pre>';
    $readingtime = ceil($word_count / 100);
    if ($readingtime == 1) {
        $timer = " Min Read";
    } else {
        $timer = " Min Read";
    }
    $readtime =  $readingtime . $timer;

    return $readtime;
}
add_shortcode('resourcepostread', 'databook_post_reading_time');

add_filter('the_content', function ($content) {
    global $tableOfContents;
	$table_of_contents_text = 'Table of Contents';
	
    $tableOfContents = "
        <div class='glide-spacer s-48'> </div>
        <div class='table-content'>";
		if (get_field('table_of_contents_text', 'option') != '') {
			$table_of_contents_text = get_field('table_of_contents_text', 'option');	
		}
		$tableOfContents .= "<div class='ui-uc-xxs-small table-title'>" . $table_of_contents_text . "</div>";
		$tableOfContents .= "
			<div class='glide-spacer s-24'> </div>
			<div class='table-scroll'>
			<div>
		<ul>";
	$pattern = '#<(h[2])(.*?)>(.*?)</\1>|\[acf_block\](.*?)\[/acf_block\]#si';
    $index = 0;
    $indexes = [2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0];
	$hasH2Tag = false;

    // Insert the IDs and create the TOC. 
    $content = preg_replace_callback($pattern, function ($matches) use (&$index, &$tableOfContents, &$indexes, &$hasH2Tag) {
        if (!empty($matches[1])) {
            // This is an H2 heading
			$hasH2Tag = true;
            $tag = $matches[1];
            $title = strip_tags($matches[3]);
            $hasId = preg_match('/id=(["\'])(.*?)\1[\s>]/si', $matches[2], $matchedIds);
            $id = $hasId ? $matchedIds[2] : $index++ . '-' . sanitize_title($title);
            $prefix = '';
            foreach (range(2, $tag[1]) as $i) {
                if ($i == $tag[1]) {
                    $indexes[$i] += 1;
                }

                $prefix .= $indexes[$i] . '.';
            }

            $title = "$title";

            $tableOfContents .= "<li class='toc-item' data-id='$id'><a href='#$id' class='table-jump-content'>$title</a></li>";

            if ($hasId) {
                return $matches[0];
            }
            return sprintf('<%s%s id="%s">%s</%s>', $tag, $matches[2], $id, $matches[3], $tag);
        } elseif (!empty($matches[4])) {
            // This is an ACF block content
            $acfBlockContent = $matches[4]; // Modify this to extract ACF block content
            // Include ACF block content in the TOC as needed

            return $acfBlockContent;
        }

        return $matches[0]; // Return the original content if not matched
    }, $content);

    $tableOfContents .= '</ul></div></div></div>';

	if (!$hasH2Tag) {
        $tableOfContents = ''; 
    }

    return $content;
});

function get_the_table_of_contents()
{
    global $tableOfContents;
    return $tableOfContents;
} 


function mfw_social_buttons($content) {
    global $post;
    if(is_singular( array( 'post', 'resource'))){
    
        // Get current page URL 
        $sb_url = urlencode(get_permalink());
 
        // Get current page title
        $sb_title = str_replace( ' ', '%20', get_the_title());
		
        $email_body =  str_replace( ' ', '%20', get_the_content());

		// Get Post Thumbnail for pinterest
        //$sb_thumb = mfw_get_the_post_thumbnail_src(get_the_post_thumbnail());
        // Construct sharing URL without using any script
        $twitterURL = 'https://twitter.com/intent/tweet?text='.$sb_title.'&amp;url='.$sb_url; 
        $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$sb_url.'&amp;title='.$sb_title;
 
        // Add sharing button at the end of page/page content
		$content .= '<ul>';
		$content .= '<li><a href="' . $twitterURL . '" target="_blank" rel="nofollow">';
		$content .= '<img width="16" height="16" src="' . get_template_directory_uri() . '/assets/img/admin/x-twitter-black.svg" alt="Twitter">';
		$content .= '</a></li>';
		$content .= '<li><a href="' . $linkedInURL . '" target="_blank" rel="nofollow">';
		$content .= '<img width="16" height="16" src="' . get_template_directory_uri() . '/assets/img/admin/linkedin-black-icon.svg" alt="LinkedIn">';
		$content .= '</a></li>';
		$content .= '</ul>';
        
        return $content;
    } else {
        // if not a post/page then don't include sharing button
        return $content;
    }
}

add_shortcode('mfw_social_btns','mfw_social_buttons');

add_action('template_redirect', 'glide_resource_and_press_mention_single_page_redirect', 30);
function glide_resource_and_press_mention_single_page_redirect() {
    if (is_singular('resource')) {
        global $post;
        $custom_permalink = get_field('databook_cpt_resources_redirection_link', $post->ID);

        if ($custom_permalink) {
            wp_redirect(esc_url($custom_permalink, 301));
            exit();
        }
    }
	if (is_singular('press_mentions')) {
        global $post;
        $custom_press_mentions_permalink = get_field('cpt_press_mention_redirection_link', $post->ID);

        if ($custom_press_mentions_permalink) {
            wp_redirect(esc_url($custom_press_mentions_permalink, 301 ));
            exit();
        }
    }
}

// Custom Resource External Links
add_filter('post_type_link', 'glide_resource_custom_permalink', 30, 2);
add_filter('the_permalink', 'glide_resource_custom_permalink', 30, 2);
function glide_resource_custom_permalink($permalink, $post) {
    if ( ($post->post_type == 'resource' ) && !is_admin()) {
		$custom_permalink = get_field('databook_cpt_resources_redirection_link', $post->ID);
		if(!empty($custom_permalink)){
			$permalink = esc_url($custom_permalink);
		}
    }
	if ( ($post->post_type == 'press_mentions' ) && !is_admin()) {
		$custom_permalink = get_field('cpt_press_mention_redirection_link', $post->ID);
		if(!empty($custom_permalink)){
			$permalink = esc_url($custom_permalink);
		}
    }
    return $permalink;
}


//Hide Post from admin menu
function glide_db_hide_post_from_admin_menu() {
    remove_menu_page('edit.php');
}
add_action('admin_menu', 'glide_db_hide_post_from_admin_menu');


add_action('save_post', 'glide_resources_defult_taxnomy',10,2);
function glide_resources_defult_taxnomy($post_id, $post) {
    $custom_post_type = 'resource';
    $custom_taxonomy = 'resource_category';
    $default_term_slug = 'datebook-product-news';

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // If this is just a revision, don't set default category
    if (wp_is_post_revision($post_id)) return;

    if ($post->post_type !== $custom_post_type) return;

    // Only set default category if no terms are set yet
    $terms = wp_get_post_terms($post_id, $custom_taxonomy);
    if (!empty($terms)) return;

    $default_term = get_term_by('slug', $default_term_slug, $custom_taxonomy);
    if (empty($default_term))  return;

    // Assign the default category
    wp_set_object_terms($post_id, $default_term->term_id, $custom_taxonomy);
}


function set_posts_per_page_for_press_mentions_cpt( $query ) {
	if ( !is_admin() && $query->is_main_query() && is_post_type_archive( 'press_mentions' ) ) {
	  $query->set( 'posts_per_page', '12' );
	}
  }
  add_action( 'pre_get_posts', 'set_posts_per_page_for_press_mentions_cpt' );


function set_posts_per_page_for_resource_cpt( $query ) {
	if ( !is_admin() && $query->is_main_query() && is_post_type_archive( 'resource' ) ) {
	  $query->set( 'posts_per_page', '12' );
	}
  }
  add_action( 'pre_get_posts', 'set_posts_per_page_for_resource_cpt' );


// function register_mobile_menu_walker() {
//     require_once get_template_directory() . '/custom-menu-walker.php'; // Include the file with your custom Walker
//     return new Mobile_Menu_Walker();
// }
// add_filter('wp_nav_menu_args', 'register_mobile_menu_walker');


function wpcode_snippet_disable_feed() {
    wp_die(
        sprintf(
            esc_html__( 'No feed available, please visit our %1$shomepage%2$s!' ),
            ' <a href="' . esc_url( home_url( '/' ) ) . '">',
            '</a>'
        )
    );
}
 
// Replace all feeds with the message above.
add_action( 'do_feed_rdf', 'wpcode_snippet_disable_feed', 1 );
add_action( 'do_feed_rss', 'wpcode_snippet_disable_feed', 1 );
add_action( 'do_feed_rss2', 'wpcode_snippet_disable_feed', 1 );
add_action( 'do_feed_atom', 'wpcode_snippet_disable_feed', 1 );
add_action( 'do_feed_rss2_comments', 'wpcode_snippet_disable_feed', 1 );
add_action( 'do_feed_atom_comments', 'wpcode_snippet_disable_feed', 1 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );

function add_author_support_to_posts() {
	add_post_type_support( 'resource', 'author' ); 
 }
 add_action( 'init', 'add_author_support_to_posts' );

 function add_author_contributor_capabilities() {
    $roles = array('administrator', 'author', 'contributor');
    foreach ($roles as $role) {
        $role_obj = get_role($role);
        $role_obj->add_cap('edit_resource');
        $role_obj->add_cap('edit_resources');
        $role_obj->add_cap('edit_other_resource');
        $role_obj->add_cap('publish_resource');
        $role_obj->add_cap('read_resource');
        $role_obj->add_cap('read_private_resource');
        $role_obj->add_cap('delete_resource');
        $role_obj->add_cap('delete_published_resource');
        $role_obj->add_cap('delete_other_resource');
    }
}

add_action('init', 'register_cpt_resources');
add_action('init', 'add_author_contributor_capabilities');

function add_author_contributor_taxonomy_capabilities() {
    $rolestax = array('administrator', 'author', 'contributor');
    foreach ($rolestax as $role) {
        $role_obj_tax = get_role($role);
        $role_obj_tax ->add_cap('edit_resource_categories');
        $role_obj_tax ->add_cap('delete_resource_categories');
        $role_obj_tax ->add_cap('assign_resource_categories');
    }
}

add_action('init', 'resource_taxonomy', 0);
add_action('init', 'add_author_contributor_taxonomy_capabilities');