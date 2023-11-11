<?php
/**
 * Block Name: All Resource Categories
 *
 * The template for displaying the custom gutenberg block named BlockName.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package BaseTheme Package
 * @since 1.0.0
 */

// Get all the fields from ACF for this block ID
$block_fields = get_fields_escaped($block['id']);

// Set the block name for it's ID & class from it's file name
$block_glide_name = $block['name'];
$block_glide_name = str_replace("acf/", "", $block_glide_name);

// Set the preview thumbnail for this block for gutenberg editor view.
if (isset($block['data']['preview_image_help'])) { /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
}

// create align class ("alignwide") from block setting ("wide").
$align_class = $block['align'] ? 'align' . $block['align'] : '';

// Get the ID name for the block to be used for it.
$section_anchor_id = (isset($block['anchor'])) ? $block['anchor'] : null;

// Get the class name for the block to be used for it.
$class_name = (isset($block['className'])) ? $block['className'] : null;

// Making the unique ID for the block.
$id = 'block-' . $block_glide_name . "-" . $block['id'];

// Making the unique ID for the block.
if ($block['name']) {
    $block_name = $block['name'];
    $block_name = str_replace("/", "-", $block_name);
    $name = 'block-' . $block_name;
}

// Block variables
$databook_blk_arc_see_all_posts_cta = (isset($block_fields['databook_blk_arc_see_all_posts_cta'])) ? $block_fields['databook_blk_arc_see_all_posts_cta'] : null;


?>


<section id="<?php echo $section_anchor_id; ?>"
    class="<?php echo $align_class . ' ' . $class_name . ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?> wp-block-create-block-glide-section-container">
    <div class="wrapper">
    <div class="post-category-row">
    <div class="glide-spacer s-48"> </div> 
    <div class="category-lists">
        <?php
        $terms = get_terms([
            'taxonomy' => 'resource_category',
					'hide_empty' => true,
					'parent' => 0,
        ]);
        foreach ($terms as $term) {

            ?>
            <div class="category-card">
                <a href="<?php echo get_term_link( $term->slug, 'resource_category' ); ?>" class="category-click">
                    <?php echo $term->name ?>
                </a>
            </div>
        <?php
        }

        if ($databook_blk_arc_see_all_posts_cta):
            $link_url = $databook_blk_arc_see_all_posts_cta['url'];
            $link_title = $databook_blk_arc_see_all_posts_cta['title'] ? $databook_blk_arc_see_all_posts_cta['title'] : "View All";
            $link_target = $databook_blk_arc_see_all_posts_cta['target'] ? $databook_blk_arc_see_all_posts_cta['target'] : '_self';
            ?>
            <div class="category-card">
                <a href="<?php echo $link_url ?>" class="category-click" target="<?php echo esc_attr($link_target); ?>"><?php echo $link_title ?></a>
            </div>


        </div>
        </div>
        </div>
    <?php endif; ?>
</section>