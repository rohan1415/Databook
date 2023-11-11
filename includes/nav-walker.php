<?php
/**
 * Custom walker class.
 */


class Walker_Header_Nav extends Walker_Nav_Menu
{

    function start_lvl(&$output, $depth = 0, $args = array())
    {
        // Depth-dependent classes.
        $indent = ($depth > 0 ? str_repeat("\t", $depth) : ''); // code indent
        $display_depth = ($depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'sub-menu',
            ($display_depth % 2 ? 'menu-odd' : 'menu-even'),
            ($display_depth >= 2 ? 'sub-sub-menu' : ''),
            'menu-depth-' . $display_depth
        );
        $class_names = implode(' ', $classes);
        // Build HTML for output.
        $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
    }



    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        global $wp_query;
        $indent = ($depth > 0 ? str_repeat("\t", $depth) : ''); // code indent

        // Depth-dependent classes.
        $depth_classes = array(
            ($depth == 0 ? 'main-menu-item' : 'sub-menu-item'),
            ($depth >= 2 ? 'sub-sub-menu-item' : ''),
            ($depth % 2 ? 'menu-item-odd' : 'menu-item-even'),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr(implode(' ', $depth_classes));


        // Passed classes.
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = esc_attr(implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item)));
        // Build HTML.
        $output .= $indent . '<li id="nav-menu-item-' . $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';

        // Link attributes.
        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        $attributes .= ' class="menu-link ' . ($depth > 0 ? 'sub-menu-link' : 'main-menu-link') . '"';

        // Build HTML output and pass through the proper filter.
        $item_output = sprintf(
            '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters('the_title', $item->title, $item->ID),
            $args->link_after,
            $args->after
        );
        if (in_array("custom-solution", $classes) && wp_is_mobile()) {
            global $option_fields;
            global $pID;
            global $fields;

            $pID = get_the_ID();

            if (is_home()) {
                $pID = get_option('page_for_posts');
            }

            if (is_404() || is_archive() || is_category() || is_search()) {
                $pID = get_option('page_on_front');
            }

            if (function_exists('get_fields') && function_exists('get_fields_escaped')) {
                $option_fields = get_fields_escaped('option');
                $fields = get_fields_escaped($pID);
            }
            // Page Tags - Advanced custom fields variables



            $databook_menu_title = $option_fields['databook_menu_title'];
            $icon_with_title = $option_fields['icon_with_title'];
            $title_with_description = $option_fields['title_with_description'];

            $item_output .= '<ul class="sub-menu mobile-class" id="solution-mobile">
            <div class="mega-dropdown-block">
					<div class="menu-lft">';
            if ($databook_menu_title != '') {
                $item_output .= '<div class="menu-title">' . $databook_menu_title . '</div>';
            }
            $item_output .= '<div class="menu-lists">';
            foreach ($icon_with_title as $icontitle):
                $icon = $icontitle['icon'];
                $title = $icontitle['menu_title'];
                $link = $icontitle['menu_link'];

                $item_output .= '<div class="menu-row">
									<div class="menu-icon">
										' . wp_get_attachment_image($icon, 'thumb_30') . '
									</div>
									<div class="menu-item">
										<a href="' . $link . '">' . $title . '</a>
									</div>
								</div>';
            endforeach;
            $item_output .= '</div>
					</div>';
            $item_output .= '<div class="menu-rft">
						<div class="arrow-menu-block">';
            foreach ($title_with_description as $titledesc):
                $right_column_icon = $titledesc['right_column_icon'];
                $right_column_title = $titledesc['right_column_title'];
                $right_column_description = $titledesc['right_column_description'];
                $right_column_description_link = $titledesc['right_column_description_link'];

                $item_output .= '<a href="' . $right_column_description_link . '" class="arrow-menu-link">
                <div class="arrow-menu-row">
                <div class="menu-item-left">
                <div class="menu-left-icons">
                   
                ' .  wp_get_attachment_image( $right_column_icon ,'thumb_50' ) . ' 

                </div>';

                $item_output .= '<div class="menu-desc-detail">';
                if ($right_column_title != '') {
                    $item_output .= '<div class="menu-title">' . $right_column_title . '</div>';
                }

                if ($right_column_description != '') {
                    $item_output .= '<div class="menu-content">' . html_entity_decode($right_column_description) . '</div>';
                }
                $item_output .= '</div>';
                $item_output .= '</div>';
                if ($right_column_title || $right_column_description) {
                    $item_output .= '<div class="menu-item-right">
													<svg xmlns="http://www.w3.org/2000/svg" width="26" height="16"
														viewBox="0 0 26 16" fill="none">
														<path d="M0 8H25M25 8L17.2131 0.5M25 8L17.2131 15.5" stroke="#100F13"
															stroke-width="1.25" />
													</svg>
												</div>';
                }
                $item_output .= '</div>
								</a>';
            endforeach;
            $item_output .= '</div>
					</div>
			</div>
        </ul></li>';

        }
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
