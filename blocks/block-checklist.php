<?php
/**
 * Block Name: Checklist
 *
 * The template for displaying the custom gutenberg block named Logo Gird.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package BaseTheme Package
 * @since 1.0.0
 */


// Get all the fields from ACF for this block ID

$block_fields = get_fields_escaped( $block['id'] );
// $block_fields = get_fields_escaped( $block['id'] ,'sanitize_text_field' ); // if want to remove all html


// Set the block name for it's ID & class from it's file name
$block_glide_name = $block['name'];
$block_glide_name = str_replace( 'acf/', '', $block_glide_name );

// Set the preview thumbnail for this block for gutenberg editor view.
if ( isset( $block['data']['preview_image_help'] ) ) {    /* rendering in inserter preview  */
	echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
}

// create align class ("alignwide") from block setting ("wide").
$align_class = $block['align'] ? 'align' . $block['align'] : '';

// Get the ID name for the block to be used for it.
$section_anchor_id = (isset($block['anchor'])) ? $block['anchor'] : null;


// Get the class name for the block to be used for it.
$class_name = ( isset( $block['className'] ) ) ? $block['className'] : null;

// Making the unique ID for the block.
$id = 'block-' . $block_glide_name . '-' . $block['id'];

// Making the unique ID for the block. 
if ( $block['name'] ) {
	$block_name = $block['name'];
	$block_name = str_replace( '/', '-', $block_name );
	$name       = 'block-' . $block_name;
}

// Block variables

$databook_cl_main_title  = ( isset( $block_fields['databook_cl_main_title'] ) ) ? $block_fields['databook_cl_main_title'] : null;
$databook_cl_select_headline_tag   = ( isset( $block_fields['databook_cl_select_headline_tag'] ) ) ? $block_fields['databook_cl_select_headline_tag'] : null;

$databook_cl_description = ( isset( $block_fields['databook_cl_description'] ) ) ? $block_fields['databook_cl_description'] : null;
$databook_cl_checklist_details = ( isset( $block_fields['databook_cl_checklist_details'] ) ) ? $block_fields['databook_cl_checklist_details'] : null;
?>

<div id="<?php echo $section_anchor_id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">
    
            <div class="icon-grid variation-five variation-checklist">
                
                    <div class="block-heading">
                        <<?php echo esc_html($databook_cl_select_headline_tag); ?> class="nc-heading-2 block-title">
                            <?php echo $databook_cl_main_title; ?>
                        </<?php echo esc_html($databook_cl_select_headline_tag); ?>>
                        <?php if($databook_cl_description){ ?>
                            <div class="large-text block-content">
                                <?php echo html_entity_decode($databook_cl_description); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="glide-spacer s-72"></div>
                     
                    <div class="icon-listing column-three gap-0">
                        <?php foreach($databook_cl_checklist_details  as $checklistdetail ) :
                             $title = $checklistdetail['checklist_title'];
                             $description = $checklistdetail['checklist_description'];
                        ?>
                        <div class="item">
                            <div class="item-content">
                                <?php if($title && $description){ ?>
                                    <div class="item-info small-text">
                                        <div class="item-title nc-heading-5 mb-0">
                                            <?php echo $title; ?>
                                        </div>
                                        <div class="small-text item-desc"> 
                                            <?php echo html_entity_decode($description); ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div> 
                        </div>
                        <?php endforeach; ?>
                    </div>
                
            </div>
       
</div>