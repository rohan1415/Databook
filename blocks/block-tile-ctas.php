<?php
/**
 * Block Name: Tile CTAs
 *
 * The template for displaying the custom gutenberg block named Tile CTAs.
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
if( isset( $block['data']['preview_image_help'] )  ) {    /* rendering in inserter preview  */
	echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';
}

// create align class ("alignwide") from block setting ("wide").
$align_class = $block['align'] ? 'align' . $block['align'] : '';

// Get the class name for the block to be used for it.
$class_name = (isset($block['className'])) ? $block['className'] : null;

// Get the ID name for the block to be used for it.
$section_anchor_id = (isset($block['anchor'])) ? $block['anchor'] : null;


// Making the unique ID for the block.
$id = 'block-' .$block_glide_name . "-" . $block['id'];

// Making the unique ID for the block.
if($block['name']){
	$block_name = $block['name'];
	$block_name = str_replace("/" , "-" , $block_name);
	$name = 'block-' .  $block_name;
}

// Block variables
$databook_blk_tile_headl_ine_text      = ( isset( $block_fields['databook_blk_tile_headl_ine_text'] ) ) ? $block_fields['databook_blk_tile_headl_ine_text'] : null;

$databook_blk_tile_content_details    = ( $block_fields['databook_blk_tile_content_details'] );

?>
<div id="<?php echo $section_anchor_id; ?>" class="<?php echo $align_class . ' ' . $class_name . ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

	<div class="scale-content">
		<div class="wrapper">
			<?php if($databook_blk_tile_headl_ine_text){ ?>
				<h2 class="nc-heading-2 title-block"><?php echo $databook_blk_tile_headl_ine_text; ?></h2>
			<?php } ?>
			<?php if($databook_blk_tile_content_details){ ?>
			<div class="border-card d-flex flex-wrap">
				<?php if(!empty($databook_blk_tile_content_details)){ ?>
				<?php foreach($databook_blk_tile_content_details  as $tilectas ) :
					$title = $tilectas['main_title'];
					$sub_title = $tilectas['sub_title'];
					$image = $tilectas['main_image'];
					$content = $tilectas['content'];
					$button_1 = $tilectas['button_1']; ?>
					<div class="border-desc">
					<?php if($image){ ?>
						<div class="card-img">
							<?php echo wp_get_attachment_image( $image ,'thumb_300' ); ?>
						</div>
					<div class="glide-spacer s-48"></div>
					<?php } ?>
					<?php if($title){ ?>
						<h4 class="block-title"><?php echo $title ?></h4>
					<?php } ?>
					<?php if($sub_title){ ?>
						<div class="ui-uc-xs-small"><?php echo $sub_title ?></div>
						<div class="glide-spacer s-36"></div>
					<?php } ?>
					<div class="info-btn">
						<?php 
						if( $button_1 ): 
						    $link_url = $button_1['url'];
						    $link_title = $button_1['title'];
						    $link_target = $button_1['target'] ? $button_1['target'] : '_self';
						    ?>
						    <a class="border-btn-icon" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/plus-ic-btn.svg"><span><?php echo esc_html( $link_title ); ?></span></a>
						<?php endif; ?>
					</div>
					<?php if($content && $button_1){ ?>
						<div class="grid-overlay">
							<?php if($title){ ?>
								<h4 class="item-title mb-0"><?php echo $title ?></h4>
							<?php } ?>
							<?php if($sub_title){ ?>
								<div class="ui-uc-xs-small sub-title"><?php echo $sub_title ?></div>
								<div class="s-36"></div>
							<?php } ?>
							<?php if($content){ ?>
								<div class="mb-0 item-desc small-text">
									<?php echo html_entity_decode($content);  ?>
								</div>
								<div class="s-30"></div>
								<?php } ?>
								<?php if($button_1){ ?>
								<div class="overlay-btn">
										<?php echo glide_acf_button( $button_1, 'button blue-btn hvr-red small-btn' ); ?>
								</div>
								<?php } ?>
						</div>
					<?php } ?>
				</div>
				<?php endforeach; ?>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
</div>
	
</div>