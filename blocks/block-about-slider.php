<?php
/**
 * Block Name: About Slider
 *
 * The template for displaying the custom gutenberg block named Image Alongside Text.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package BaseTheme Package
 * @since 1.0.0
 */


// Get all the fields from ACF for this block ID

$block_fields = get_fields_escaped($block['id']);
// $block_fields = get_fields_escaped( $block['id'] ,'sanitize_text_field' ); // if want to remove all html


// Set the block name for it's ID & class from it's file name
$block_glide_name = $block['name'];
$block_glide_name = str_replace('acf/', '', $block_glide_name);

// Set the preview thumbnail for this block for gutenberg editor view.
if (isset($block['data']['preview_image_help'])) { /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
}

// create align class ("alignwide") from block setting ("wide").
$align_class = $block['align'] ? 'align' . $block['align'] : '';

// Get the class name for the block to be used for it.
$class_name = (isset($block['className'])) ? $block['className'] : null;

// Making the unique ID for the block.
$id = 'block-' . $block_glide_name . '-' . $block['id'];
$section_anchor_id = (isset($block['anchor'])) ? $block['anchor'] : null;

// Making the unique ID for the block.
if ($block['name']) {
    $block_name = $block['name'];
    $block_name = str_replace('/', '-', $block_name);
    $name = 'block-' . $block_name;
}
// Block variables
$databook_as_headline_text = (isset($block_fields['databook_as_headline_text'])) ? $block_fields['databook_as_headline_text'] : null;
$databook_as_slider_heading = (isset($block_fields['databook_as_slider_heading'])) ? $block_fields['databook_as_slider_heading'] : null;
$databook_as_display_team_members = (isset($block_fields['databook_as_display_team_members'])) ? $block_fields['databook_as_display_team_members'] : null;
$databook_as_manual_select_team_members = (isset($block_fields['databook_as_select_team_members'])) ? $block_fields['databook_as_select_team_members'] : null;
$databook_as_latest_select_taxonomy = (isset($block_fields['databook_as_select_team_category'])) ? $block_fields['databook_as_select_team_category'] : null;

// Displays data from selected taxonomies and add them into array
global $taxonomy_terms;
if ($databook_as_latest_select_taxonomy):
    foreach ($databook_as_latest_select_taxonomy as $term):
        $taxonomy_terms[] = $term->term_id;
    endforeach;
endif;

// Custom query for fetching latest team members
$args = array(
    'post_type' => 'team',
    'orderby' => 'menu_order',
    'order' => 'DESC',
    'posts_per_page' => 10,
    'post_status' => 'publish',
    'tax_query' => array(
        array(
            'taxonomy' => 'team-categories',
            'terms' => $databook_as_latest_select_taxonomy[0],
            'field' => 'slug',

        )
    ),
);

$display_team_members = new WP_Query($args);
//echo '<pre>'; print_r($display_team_members); echo '</pre>';
?>

<div id="<?php echo $section_anchor_id; ?>"
    class="<?php echo $align_class . ' ' . $class_name . ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">
            <div class="glide-spacer s-128"> </div>
            <div class="our-team-slide relative">
                <div class="slider-head d-flex flex-wrap align-items-end justify-between">
                    <div class="content-left">
                        <div class="title-sub mb-0 ui-uc-medium text-white">
                            <?php echo $databook_as_headline_text; ?>
                        </div>
                        <h2 class="nc-heading-2 mb-0 slide-title text-white">
                            <?php echo $databook_as_slider_heading; ?>
                        </h2>
                    </div>
                    <div class="slider-arrow2 arrow-custom d-flex flex-wrap align-items-center">

                    </div>
                </div>
                <div class="img-text-slide arrow-disable right-move-column">
                    <?php if ($databook_as_display_team_members == 'manual_selection') {
                        if ($databook_as_manual_select_team_members) {
                            foreach ($databook_as_manual_select_team_members as $single_team_member) {
                                $selection_id = $single_team_member->ID;
                                $member_permalink = get_permalink($single_team_member->ID);
                                $featured_img_url = get_the_post_thumbnail_url($single_team_member->ID, 'thumb_480');
                                $member_title = get_the_title($single_team_member->ID);
                                $member_designation = get_field('basethemevar_cpt_team_designation', $single_team_member->ID);
                                $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $member_title)));
                                $bio_modal_or_links = get_field('bio_modal_or_links', $selection_id);
                                $basethemevar_cpt_team_linkedin = get_field('basethemevar_cpt_team_linkedin', $selection_id);
                                ?>

                                <div id="<?php echo esc_html($single_team_member->ID); ?>" <?php if($bio_modal_or_links == 'links'){ ?> data-linkedin="yes" <?php } ?> class="img-text-card <?php if($bio_modal_or_links == 'biomodal'){ echo 'popup-open'; } ?>" data-member-name="<?php echo $slug; ?>" data-memberID="<?php echo esc_html(get_the_ID()); ?>" >
                                    <?php if($bio_modal_or_links == 'biomodal'){  ?>
                                        <a href="#<?php echo $slug; ?>">
                                    <?php }elseif($bio_modal_or_links == 'links'){ ?>
                                        <a href="<?php echo $basethemevar_cpt_team_linkedin; ?>" target="_blank">
                                    <?php }else{ ?>
                                        <a href="#<?php echo $slug; ?>">
                                    <?php } ?>
                                                                                    
                                    <div class="single-img">
                                                <?php if($featured_img_url){ ?>
                                                    <img src="<?php echo $featured_img_url; ?>" alt="" />
                                                <?php } 
                                                        else{ ?>
                                                           <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/admin/databook-user.jpg" alt="" />
                                                <?php } ?>
                                                
                                             <!-- Member-Bio -->
                                             <?php if ($bio_modal_or_links == 'biomodal') { ?>
                                            <div class="team-linkedin team-bio">
                                                <a href="javascript:void()" class="button white-btn">
                                                    <span class="btn-arrow">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                            <g clip-path="url(#clip0_5789_5897)">
                                                                <circle cx="6.5" cy="7" r="6" stroke="#201F22" />
                                                                <rect x="6" y="3.5" width="1" height="7" fill="#201F22" />
                                                                <rect x="3" y="7.5" width="1" height="7" transform="rotate(-90 3 7.5)" fill="#201F22" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_5789_5897">
                                                                    <rect width="13" height="13" fill="white" transform="translate(0 0.5)" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </span>
                                                    <span class="text-btn">Read Bio</span>
                                                </a>
                                            </div>
                                            <?php } ?>
                                            <!-- end Member-Bio -->
                                            <!-- Linkedin -->
                                            <?php if ($bio_modal_or_links == 'links') { ?>
                                                <div class="team-linkedin">
                                                    <a href="<?php echo $basethemevar_cpt_team_linkedin; ?>" target="_blank" class="button white-btn">
                                                        <span class="text-btn">Visit LinkedIn</span>
                                                        <span class="btn-arrow">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="18" viewBox="0 0 11 18" fill="none">
                                                                <path d="M0.5 12.9809L9.48097 4M9.48097 4L1.50003 4.00001M9.48097 4L9.48096 11.9809" stroke="#201F22" stroke-width="1.15" />
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            <?php } ?>
                                            <!-- End of Linkedin -->
                                            </div>
                                            <div class="single-content">
                                                <h5 class="nc-heading-5 card-title text-white">
                                                    <?php echo esc_html($member_title); ?>
                                                </h5>
                                                <div class="ui-nc-xtra-small user-position">
                                                    <?php echo esc_html($member_designation); ?>
                                                </div>
                                            </div>
                                        
                                    </a>
                                </div>
                            <?php } //endforeach 
                        } //endif databook_as_select_team_members
                    } elseif ($databook_as_display_team_members == 'latest_posts') {
                        if ($display_team_members->have_posts()) {
                            while ($display_team_members->have_posts()) {
                                $display_team_members->the_post();
                                $member_id = get_the_ID();
                                $members_image = wp_get_attachment_url(get_post_thumbnail_id($member_id), 'thumb_480');
                                $member_permalink = get_permalink($member_id);
                                $member_title = get_the_title($member_id);
                                $member_designation = get_field('basethemevar_cpt_team_designation', $member_id);
                                $slug = get_post_field( 'post_name', get_the_ID() );
                                $bio_modal_or_links = get_field('bio_modal_or_links', $member_id);
                                $basethemevar_cpt_team_linkedin = get_field('basethemevar_cpt_team_linkedin', $member_id);
                                ?>
                                    <?php if($bio_modal_or_links == 'biomodal'){  ?>
                                        <a href="#<?php echo $slug; ?>">
                                    <?php }elseif($bio_modal_or_links == 'links'){ ?>
                                        <a href="<?php echo $basethemevar_cpt_team_linkedin; ?>" target="_blank">
                                    <?php }else{ ?>
                                        <a href="#<?php echo $slug; ?>">
                                        <?php } ?>
                                        <div id="<?php echo esc_html($member_id); ?>" <?php if($bio_modal_or_links == 'links'){?> data-linkedin="yes" <?php } ?> class="img-text-card <?php if($bio_modal_or_links == 'biomodal'){ echo 'popup-open'; } ?>" data-member-name="<?php echo $slug; ?>" data-memberID="<?php echo esc_html($member_id); ?>">
                                        <div class="single-img">

                                                <?php if($members_image){ ?>
                                                    <img src="<?php echo $members_image; ?>" alt="" />
                                                <?php } 
                                                        else{ ?>
                                                           <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/admin/databook-user.jpg" alt="" />
                                                <?php } ?>  
                                                
                                                <?php if ($bio_modal_or_links == 'biomodal') { ?>
                                            <div class="team-linkedin team-bio">
                                                <a href="javascript:void()" class="button white-btn">
                                                    <span class="btn-arrow">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                            <g clip-path="url(#clip0_5789_5897)">
                                                                <circle cx="6.5" cy="7" r="6" stroke="#201F22" />
                                                                <rect x="6" y="3.5" width="1" height="7" fill="#201F22" />
                                                                <rect x="3" y="7.5" width="1" height="7" transform="rotate(-90 3 7.5)" fill="#201F22" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_5789_5897">
                                                                    <rect width="13" height="13" fill="white" transform="translate(0 0.5)" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </span>
                                                    <span class="text-btn">Read Bio</span>
                                                </a>
                                            </div>
                                            <?php } ?>
                                            <!-- end Member-Bio -->
                                            <!-- Linkedin -->
                                            <?php if ($bio_modal_or_links == 'links') { ?>
                                                <div class="team-linkedin">
                                                    <a href="<?php echo $basethemevar_cpt_team_linkedin; ?>" target="_blank" class="button white-btn">
                                                        <span class="text-btn">Visit LinkedIn</span>
                                                        <span class="btn-arrow">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="18" viewBox="0 0 11 18" fill="none">
                                                                <path d="M0.5 12.9809L9.48097 4M9.48097 4L1.50003 4.00001M9.48097 4L9.48096 11.9809" stroke="#201F22" stroke-width="1.15" />
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            <?php } ?>
                                            <!-- End of Linkedin --> 
                                            </div>
                                            <div class="single-content">
                                                <h5 class="nc-heading-5 card-title text-white">
                                                    <?php echo esc_html($member_title); ?>
                                                </h5>
                                                <div class="ui-nc-xtra-small user-position">
                                                    <?php echo esc_html($member_designation); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                            <?php } } }  ?>
                </div>
                <div class="popup-member popup-show"></div>
                <div class="glide-spacer s-128"> </div>
                <div class="single-border"></div>
                <div class="pre-loader">
                    <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
                </div><!-- /pre-loader -->
            </div>
</div>