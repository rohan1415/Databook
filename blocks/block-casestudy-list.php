<?php
/**
 * Block Name: Casestudy List
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

$databook_cs_main_title  = ( isset( $block_fields['databook_cs_main_title'] ) ) ? $block_fields['databook_cs_main_title'] : null;
$databook_cs_select_case_study   = ( isset( $block_fields['databook_cs_select_case_study'] ) ) ? $block_fields['databook_cs_select_case_study'] : null;

$databook_blh_cs_variation = ( isset( $block_fields['databook_blh_cs_variation'] ) ) ? $block_fields['databook_blh_cs_variation'] : null;
$databook_cs_headline = ( isset( $block_fields['databook_cs_headline'] ) ) ? $block_fields['databook_cs_headline'] : null;
$databook_cs_select_headline_tag = ( isset( $block_fields['databook_cs_select_headline_tag'] ) ) ? $block_fields['databook_cs_select_headline_tag'] : null;
$databook_cs_description = ( isset( $block_fields['databook_cs_description'] ) ) ? $block_fields['databook_cs_description'] : null;
$databook_cs_multiple_case_study = ( isset( $block_fields['databook_cs_multiple_case_study'] ) ) ? $block_fields['databook_cs_multiple_case_study'] : null;
$databook_cs_view_all_case_study = ( isset( $block_fields['databook_cs_view_all_case_study'] ) ) ? $block_fields['databook_cs_view_all_case_study'] : null;

$databook_cs_background_color = ( isset( $block_fields['databook_cs_background_color'] ) ) ? $block_fields['databook_cs_background_color'] : null;
?>


<?php if($databook_blh_cs_variation == 'single_casestudy'){ ?>

    <div id="<?php echo $section_anchor_id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">
       
                <div
                    class="lft-section variation-five left-img alignwide  block-acf-image-alongside-text glide-block-image-alongside-text">
                    <div class="block-row d-flex flex-wrap">
                        <div class="cl-left ">
                            <div class="info-content">
                                <?php if($databook_cs_main_title){ ?>
                                    <div class="title-label ui-uc-large w-full">
                                        <?php echo html_entity_decode($databook_cs_main_title);  ?>
                                    </div>
                                <?php } ?>
                                    <?php 
                                    if($databook_cs_select_case_study):
                                        foreach( $databook_cs_select_case_study as $selcasestudy ):
                                            $post_id         =  $selcasestudy->ID;
                                            $title           = get_the_title( $post_id ); 
                                            $content         = $selcasestudy->post_content;
                                            $singleurl = get_permalink($post_id);
                                            $trimmed_content = wp_trim_words($content, 20);
                                            $databook_cs_author_img = get_field( 'databook_cs_author_img', $post_id );
                                            $databook_cs_author_name = get_field( 'databook_cs_author_name', $post_id );
                                            $databook_cs_author_designation = get_field( 'databook_cs_author_designation', $post_id ); 
                                            $databook_cs_company_logo = get_field('databook_cs_company_logo', $post_id);
                                            //$testimonial_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ),'large');
                                            $databook_cs_company_name = get_field( 'databook_cs_company_name', $post_id );
                                            $databooksee_case_study_btn_text = get_field( 'databooksee_case_study_btn_text', $post_id ); 
                                    ?>
                                    <?php if(!empty($title)){ ?>
                                        <h3 class="nc-heading-3 mb-0">
                                            <?php echo html_entity_decode($title); ?>
                                        </h3>
                                    <?php } ?>
                                    <div class="block-desc">
                                        <div class="ui-uc-xs-small w-full">
                                            <?php echo $databook_cs_author_name; ?>
                                        </div>
                                        <div class="ui-uc-xxs-small-reg w-full">
                                            <?php echo $databook_cs_company_name; ?>
                                        </div>
                                        <div class="ui-uc-xxs-small-reg w-full">
                                            <?php echo $databook_cs_author_designation; ?>
                                        </div>
                                    </div>
                                <?php if($databooksee_case_study_btn_text == ''){ 
                                     $databooksee_case_study_btn_text = 'See Case Study'; 
                                    } ?>
                                    <div class="block-btn">
                                        <a href="<?php echo $singleurl;?>" title="Get a Demo" target=""
                                            class="button black-btn">
                                            <span class="btn-text"><?php echo $databooksee_case_study_btn_text; ?></span>
                                            <span class="btn-user-arrow">
                                                <img width="14" height="13" decoding="async"
                                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/white-arrow.svg"
                                                    alt="">
                                            </span>
                                        </a>
                                    </div>
                            </div>
                        </div>
                        <div class="cl-right" style="background-color: <?php if(!empty($databook_cs_background_color)){ echo $databook_cs_background_color; }else{ echo "#DBDBDB"; } ?>">
                            <div class="lft-bg-color" style="background-color: <?php if(!empty($databook_cs_background_color)){ echo $databook_cs_background_color; }else{ echo "#DBDBDB"; } ?>"></div>
                            <?php if($databook_cs_author_img){ ?>
                                <div class="info-img aos-init aos-animate" data-aos="fade-up">
                                        <div class="img-gfx-lines">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="419" height="419" viewBox="0 0 419 419"
                                                fill="none">
                                                <path opacity="0.3"
                                                    d="M1 1L73.7927 73.7927M418 1L345.207 74.6152M1 418L73.7927 345.207M418 418L345.207 345.207"
                                                    stroke="#201F22" />
                                            </svg>
                                        </div>
                                    <?php echo wp_get_attachment_image($databook_cs_author_img, 'thumb_300'); ?>
                                </div>
                            <?php } ?>
                            <?php if($databook_cs_company_logo){ ?>
                                <div class="bg-bt-logo">
                                    <?php echo wp_get_attachment_image($databook_cs_company_logo, 'thumb_200'); ?>
                                </div>
                            <?php } ?>
                        </div>
                        <?php endforeach; endif; ?>
                    </div>
                </div>
       

    </div>

<?php }elseif($databook_blh_cs_variation == 'multiple_casestudy'){ ?>

<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">
    

			<div class="icon-grid variation-five lists-icon-v6">
				
					<div class="block-heading">
                    <<?php echo esc_html($databook_cs_select_headline_tag); ?> class="nc-heading-2 block-title mb-0">
                        <?php echo html_entity_decode($databook_cs_headline);  ?>
                    </<?php echo esc_html($databook_cs_select_headline_tag); ?>>
                        <?php if($databook_cs_description != ""){ ?>
						<div class="large-text block-content">
                            <?php echo html_entity_decode($databook_cs_description); ?>
						</div>
                        <?php } ?>
					</div>
					<div class="glide-spacer s-72"></div>
					<div class="icon-listing column-three gap-0">
                    <?php 
                        if($databook_cs_multiple_case_study):
                        foreach( $databook_cs_multiple_case_study as $multicasestudy ):
                            $post_id         =  $multicasestudy->ID;
                            $title           = get_the_title( $post_id ); 
                            $content         = $multicasestudy->post_content;
                            $trimmed_content = wp_trim_words($content, 20);
                            $multiurl = get_permalink($post_id);
                            $case_study_industry_value = get_field('case_study_industry_value', $post_id);
                            $muldatabook_cs_company_logo = get_field('databook_cs_company_logo', $post_id);
                            ?>
						<div class="item">
							<div class="item-content">
								<div class="item-icon">
                                    <?php echo wp_get_attachment_image($muldatabook_cs_company_logo, 'thumb_200');?>
								</div>
								<div class="item-info">
									<div class="item-title ui-uc-xs-small mb-0"><?php echo $case_study_industry_value; ?></div>
									<div class="nc-heading-5 item-desc">
                                    <?php echo $title; ?>
									</div>
									<div class="glide-spacer s-72"></div>
									<div class="info-btn">
										<a class="border-btn-icon gray-border-btn" href="<?php echo $multiurl; ?>" target="_self">
											<span>Learn More</span>
										</a>
									</div>
								</div>
							</div>
						</div>
                        <?php endforeach; 
                            endif;
                            ?>
					</div>
					<div class="block-btn">
                    <?php 
                            $viewmore = get_field('databook_cs_view_all_case_study');
                            if( $viewmore ): 
                                $link_url = $viewmore['url'];
                                $link_title = $viewmore['title'];
                                $link_target = $viewmore['target'] ? $viewmore['target'] : '_self';
                                ?>
						<a class="button black-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span
								class="btn-text"><?php echo esc_html( $link_title ); ?></span>
							<span class="btn-user-arrow">
								<img width="14" height="13" decoding="async"
									src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/white-arrow.svg"
									alt="">
							</span>
						</a>
                        <?php endif; ?> 
					</div>
				
			</div>
		
    
</div>
<?php } ?>