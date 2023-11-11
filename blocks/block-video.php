<?php
/**
 * Block Name: Video
 *
 * The template for displaying the custom gutenberg block named Video.
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

// Get the class name for the block to be used for it.
$class_name = ( isset( $block['className'] ) ) ? $block['className'] : null;

// Get the ID name for the block to be used for it.
$section_anchor_id = (isset($block['anchor'])) ? $block['anchor'] : null;


// Making the unique ID for the block.
$id = 'block-' . $block_glide_name . '-' . $block['id'];

// Making the unique ID for the block.
if ( $block['name'] ) {
	$block_name = $block['name'];
	$block_name = str_replace( '/', '-', $block_name );
	$name       = 'block-' . $block_name;
}

// Block variables

$databook_blk_video_variation      = ( isset( $block_fields['databook_blk_video_variation'] ) ) ? $block_fields['databook_blk_video_variation'] : null;
$databook_blk_headline_text = ( isset( $block_fields['databook_blk_headline_text'] ) ) ? $block_fields['databook_blk_headline_text'] : null;
$databook_blk_video_discription = ( isset( $block_fields['databook_blk_video_discription'] ) ) ? $block_fields['databook_blk_video_discription'] : null;
$dtabook_blk_video_link = ( isset( $block_fields['dtabook_blk_video_link'] ) ) ? $block_fields['dtabook_blk_video_link'] : null;
$databook_blk_video_thumbnail_image = ( isset( $block_fields['databook_blk_video_thumbnail_image'] ) ) ? $block_fields['databook_blk_video_thumbnail_image'] : null;

$databook_blk_video_play_button_text = ( isset( $block_fields['databook_blk_video_play_button_text'] ) ) ? $block_fields['databook_blk_video_play_button_text'] : null;


if ($databook_blk_video_variation == 'video'){
    $databook_blk_video_variation_class = 'video_details';
} else{
     $databook_blk_video_variation_class = 'video_with_content';
}  
?>

<?php if ( $databook_blk_video_variation == 'video' ) { ?>
<div id="<?php echo $section_anchor_id; ?>" class="<?php echo $align_class . ' ' . $class_name . ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

    <div class="container-1322 <?php echo $databook_blk_video_variation_class; ?>">
		<div class="srm-video">
			<div class="">
				<?php if($databook_blk_video_thumbnail_image || $dtabook_blk_video_link){ ?>
					<div class="play-srm-video">
						<?php echo wp_get_attachment_image( $databook_blk_video_thumbnail_image, 'thumb_1200' );  ?>
						<?php if($dtabook_blk_video_link){ ?>
							<div class="srm-play-btn">
								<a class="icon-text-btn open-popup-btn2" href="<?php echo $dtabook_blk_video_link; ?>">
								  <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/play-ic.svg'; ?>">
								  <span class="label-hidden"><?php echo $databook_blk_video_play_button_text; ?></span>
								</a>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</div>
    </div>
 
</div>
<?php } else { ?>

<?php if($databook_blk_headline_text || $databook_blk_video_discription || $dtabook_blk_video_link){ ?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name . ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">
 
    <div class="<?php echo $databook_blk_video_variation_class; ?>">
    	<?php if($databook_blk_headline_text || $databook_blk_video_discription){ ?>		
		<div class="video-content video-top d-flex flex-wrap">
			<?php if($databook_blk_headline_text){ ?>
				<div class="left-title">
					<h3 class="uc-heading-3 title-block"><?php echo $databook_blk_headline_text; ?></h3>
				</div>
			<?php } ?>
			<?php if($databook_blk_video_discription){ ?>
				<div class="content-right medium-text">
					<?php echo html_entity_decode($databook_blk_video_discription) ?>
				</div>
			<?php } ?>   
		</div>
		<div class="glide-spacer s-72"></div>
		<?php } ?>
		
		<?php if($databook_blk_video_thumbnail_image || $dtabook_blk_video_link){ ?>
			<div class="srm-video">
				<div class="play-srm-video">
					<?php if($databook_blk_video_thumbnail_image){
						echo wp_get_attachment_image( $databook_blk_video_thumbnail_image, 'thumb_1200' );  ?>
					<?php } ?>
					<?php if($dtabook_blk_video_link){ ?>
						<div class="srm-play-btn">
							<a class="icon-text-btn open-popup-btn2" href="<?php echo $dtabook_blk_video_link; ?>">
							  <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/play-ic.svg'; ?>">

							  <span class="label-hidden"><?php echo $databook_blk_video_play_button_text; ?></span>
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		<?php } ?>
    </div>
</div>
<?php } ?>
<?php } ?>

<script type="text/javascript">
jQuery('.open-popup-btn2').magnificPopup({
	// disableOn: 700,
	type: 'iframe',
	mainClass: 'mfp-fade',
	removalDelay: 160,
	preloader: false,
	callbacks: {
  close: function(){
	jQuery('body').removeClass('open-video');
  }
},
	fixedContentPos: false,
	iframe: {
		markup: '<div class="mfp-iframe-scaler">' +
			'<div class="mfp-close">x</div>' +
			'<iframe class="mfp-iframe" frameborder="0" allow="autoplay"></iframe>' +
			'</div>',
		patterns: {
			youtube: {
				index: 'youtube.com/',
				id: 'v=',
				src: 'https://www.youtube.com/embed/%id%?autoplay=1'
			},
			vimeo: {
			index: 'vimeo.com/', 
				id: function(url) {        
					var m = url.match(/(https?:\/\/)?(www.)?(player.)?vimeo.com\/([a-z]*\/)*([0-9]{6,11})[?]?.*/);
					if ( !m || !m[5] ) return null;
					return m[5];
				},
				src: 'https://player.vimeo.com/video/%id%?autoplay=1'
			}
		}
	}
});
</script>
