<?php
/**
 * Block Name: Content Slides
 *
 * The template for displaying the custom gutenberg block named Spacer.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package Databook
 * @since 1.0.0
 */


// Get all the fields from ACF for this block ID
// $block_fields = get_fields( $block['id'] );
$block_fields = get_fields_escaped( $block['id'] );
// $block_fields = get_fields_escaped( $block['id'] ,'sanitize_text_field' ); // if want to remove all html


// Set the block name for it's ID & class from it's file name
$block_glide_name = $block['name'];
$block_glide_name = str_replace("acf/" , "" , $block_glide_name);

// Set the preview thumbnail for this block for gutenberg editor view.
if( isset( $block['data']['preview_image_help'] )  ) {  
	echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';
}

// create align class ("alignwide") from block setting ("wide").
$align_class = $block['align'] ? 'align' . $block['align'] : '';

// Get the class name for the block to be used for it.
$class_name = (isset($block['className'])) ? $block['className'] : null;

// Making the unique ID for the block.
$id = 'block-' .$block_glide_name . "-" . $block['id'];
$section_anchor_id = (isset($block['anchor'])) ? $block['anchor'] : null;

// Making the unique ID for the block.
if($block['name']){
	$block_name = $block['name'];
	$block_name = str_replace("/" , "-" , $block_name);
	$name = 'block-' .  $block_name;
}

// Block variables
$databook_cs_kicker      = ( isset( $block_fields['databook_cs_kicker'] ) ) ? $block_fields['databook_cs_kicker'] : null;
$databook_cs_content_details    = ( isset( $block_fields['databook_cs_content_details'] ) ) ? $block_fields['databook_cs_content_details'] : null;
?>

<div id="<?php echo $section_anchor_id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

<!-- For Desktop Version -->
<section id="<?php echo $id; ?>" class="wp-block-create-block-glide-section-container container-1194 dc-container-lightgrey">
		<div class="wrapper">
			<div
				class="lft-section variation-six sticky-slides alignwide block-acf-image-alongside-text glide-block-image-alongside-text">
				<?php if($databook_cs_kicker != ''){ ?>
                    <h6 class="block-title mb-0">
                        <?php echo $databook_cs_kicker; ?>
                    </h6>
                <?php } ?>
				<div class="glide-spacer s-48"> </div>
				<?php $count = 1;  foreach($databook_cs_content_details  as $contentdet ) : 
					$conimg = $contentdet['content_image'];
					$conheadline = $contentdet['content_headline'];
                    $condescri = $contentdet['content_description']; 
					
				?>
					<div class="block-row scrolling-content d-flex flex-wrap followMeBar">
						<div class="cl-left bg-cl-gray-0">
							<?php if($conimg != '') { ?>
							<div class="info-img">
								<?php echo wp_get_attachment_image( $conimg ,'thumb_375' ); ?>
							</div>
							<?php } ?>
						</div>
						<div class="cl-right">
							<div class="sticky-md-group">
							<?php if($conimg != '') { ?>
								<div class="info-img bg-cl-gray-0">
									<?php echo wp_get_attachment_image( $conimg ,'thumb_375' ); ?>
								</div>
							<?php } ?>
							<div class="info-content">
								<?php if($conheadline != '') { ?>
									<h3 class="nc-heading-3 mb-0"><span class="text-blue"><?php echo $count; ?>.</span> 
									<?php echo $conheadline;  ?>
									</h3>
								<?php } ?>
								<?php if($condescri != '') { ?> 
									<div class="block-desc large-text">
										<?php echo html_entity_decode($condescri);  ?>
									</div>
								<?php } ?>
							</div>
							
							</div>
						</div>
					</div>
				<?php $count++; endforeach; ?>
			</div>
		</div>
	</section>
  
</div>

<!-- For Mobile Version -->
<section class="wp-block-create-block-glide-section-container container-1194 dc-container-lightgrey">
		<div class="wrapper">
			<div
				class="lft-section variation-six md-lft-block sticky-slides alignwide block-acf-image-alongside-text glide-block-image-alongside-text">
				<?php if($databook_cs_kicker != ''){ ?>
                    <h6 class="block-title mb-0">
                        <?php echo $databook_cs_kicker; ?>
                    </h6>
                <?php } ?>
				<div class="glide-spacer s-48"> </div>
				<div class="block-row d-flex flex-wrap">
				<?php $counts = 1;  foreach($databook_cs_content_details  as $contentdetmob ) : 
					$conimgs = $contentdetmob['content_image'];
					$conheadlines = $contentdetmob['content_headline'];
                    $condescris = $contentdetmob['content_description']; 
					
				?>
					<div class="sticky-md-group">
						<div class="cl-left">
							<?php if($conimgs != '') { ?>
								<div class="info-img bg-cl-gray-0">
									<?php echo wp_get_attachment_image( $conimgs ,'thumb_375' ); ?>
								</div>
							<?php } ?>
						</div>
						<div class="cl-right">
							<div class="info-content">
								<?php if($conheadlines != '') { ?>
									<h3 class="nc-heading-3 mb-0"><span class="text-blue"><?php echo $counts; ?>.</span> 
									<?php echo $conheadlines;  ?>
									</h3>
								<?php } ?>
								<?php if($condescris != '') { ?> 
									<div class="block-desc large-text">
										<?php echo html_entity_decode($condescris);  ?>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
					<?php $counts++; endforeach; ?>
				</div>
			</div>
		</div>
	</section>