<?php
/**
 * The template for displaying all posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package BaseTheme Package
 * @since 1.0.0
 *
 */

// Include header

get_header();

// Global variables
global $option_fields;
global $pID;
global $fields;
global $post;

$resourceCat = get_the_terms( $pID, 'resource_category' ); //as it's returning an array
$heading_size_dropdown_for_title = get_field('heading_size_dropdown_for_title', $pID);
$databook_resources_author_name = get_field('databook_cpt_resources_author_name', $pID);
$databook_tofcta_bg_color = get_field('databook_cpt_resources_background_color', $pID);
$footer_cta_select = get_field('databook_cpt_resources_footer_cta_select', $pID);
$databook_fcta_headline = get_field('databook_cpt_resources_headline', $pID);
$databook_fcta_cta = get_field('databook_cpt_resources_cta', $pID);
$databook_cpt_resources_update_date = get_field('databook_cpt_resources_update_date', $pID);
$table_of_contents_text = get_field('table_of_contents_text', 'option');
?>

<section class="wp-block-create-block-glide-section-container">
		<div class="wrapper">
			<div class="company-detail-block">
				<div class="back-btn">
					<a href="<?php echo get_site_url(); ?>/resources" class="text-lft-link ui-nc-medium">
						<svg xmlns="http://www.w3.org/2000/svg" width="6" height="23" viewBox="0 0 6 23" fill="none">
							<path d="M5 8L1 12L5 16" stroke="#201F22" stroke-width="1.25" stroke-linecap="round"
								stroke-linejoin="round" />
						</svg>
						Back to Resources
					</a>
				</div>
			</div>
		</div>
	</section>

    <div class="glide-spacer s-48"> </div>

<section class="wp-block-create-block-glide-section-container dc-container-lightgrey">
		<div class="wrapper"> 
			<div class="sticky-sidebar-block resource-detail single-re-sidebar d-flex flex-wrap">
				
				<div class="cl-right custom-content">
					<h1 class="nc-heading-2 <?php echo esc_html ( get_field('heading_size_dropdown_for_title') ); ?>"><?php echo the_title(); ?></h1>
					<div class="details-formate">
					<div class="single-cat">
						<?php
						$resourceCat = get_the_terms($pID, 'resource_category');
						if ($resourceCat) { ?>
							<ul>
								<?php foreach ($resourceCat as $resourceInfo) {
									$category_link = get_term_link($resourceInfo);
									echo '<li><a href="' . esc_url($category_link) . '">' . esc_attr($resourceInfo->name) . '</a></li>';
								} ?>
							</ul>
						<?php } ?>
					</div>
					<div class="resource-update-details">
						<ul>
							<li class="update-bio">
								<span class="category-post-details" hover-tooltip="Published on <?php echo get_the_date('F d, Y'); ?>" tooltip-position="top">
									<?php echo __('Update on', ''); ?>
									<?php if($databook_cpt_resources_update_date != ''){
										echo $databook_cpt_resources_update_date;
									}else{
										echo get_the_modified_date('F d, Y'); 
									}?>
								</span>
							</li>
							<?php if($databook_resources_author_name != '') { ?>
								<li>
									<span>By <?php echo $databook_resources_author_name; ?></span>
								</li>
							<?php } ?>
						</ul>		
					</div>

					</div>
                        <?php if ( has_post_thumbnail() ) { ?> 
                            <div class="thumb"> 
								<?php the_post_thumbnail( 'thumb_1200',
                                array(
                                    'alt'   => get_the_title(),
                                    'title' => get_the_title(),
                                ) ); ?> 
                            </div> 
                        <?php }else{ ?>
							<div class="thumb"> 
							<?php $image = get_template_directory_uri() . "/assets/img/databook-logo-article-image.jpg"; ?>
							<img class="" alt="" src="<?php echo $image; ?>" />
							</div> 
						<?php } ?>
						<div class="md-table-content">
						<div class="cust-block-content">
							<?php while ( have_posts() ) { the_post();

								get_template_part( 'partials/content', '' );
							} ?>
						</div>
						
						<!-- <div class="table-content">
							<div class="ui-uc-xxs-small table-title dgyd"><?php echo $table_of_contents_text; ?></div>
							<div class="glide-spacer s-24"> </div>
							<div class="table-scroll">
								<?php //echo get_the_table_of_contents(); ?>
							</div>
						</div> -->

						<!-- Table Content Shortcode  -->
						<?php echo get_the_table_of_contents(); ?>
					</div>
				</div>

				<div class="cl-left">
					<div class="sidebar-contrnt">
						<div class="read-time">
							<div class="read-content ui-nc-small">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
									fill="none">
									<g clip-path="url(#clip0_3361_8024)">
										<path
											d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
											stroke="#201F22" stroke-width="1.5" stroke-linecap="round"
											stroke-linejoin="round" />
										<path d="M10 5.625V10H14.375" stroke="#201F22" stroke-width="1.5"
											stroke-linecap="round" stroke-linejoin="round" />
									</g>
									<defs>
										<clipPath id="clip0_3361_8024">
											<rect width="20" height="20" fill="white" />
										</clipPath>
									</defs>
								</svg>
								<?php echo do_shortcode('[resourcepostread]'); ?>
								<div class="glide-spacer s-12"> </div>
							</div>
							<div class="progress">
								<progress id="progressbar1" class="progress-bar1" value="0" max="100"></progress>
							</div>
						</div>
						<!-- Table Content Shortcode  -->
						<?php echo get_the_table_of_contents(); ?>

						<!-- <div class='glide-spacer s-48'> </div>	
						<div class="table-content">
							<?php if($table_of_contents_text != ''){ ?>
								<div class="ui-uc-xxs-small table-title dgyd">
									<?php echo $table_of_contents_text; ?>
								</div>
							<?php } ?>
							<div class="glide-spacer s-24"> </div>
							<div class="table-scroll">
								<?php //echo get_the_table_of_contents(); ?>
							</div>
						</div> -->

						<div class="popup-social-icon blk-social">
							<div class="ui-uc-xxs-small social-title">Share article</div>
							<div class="glide-spacer s-16"> </div>
								<?php echo do_shortcode( '[mfw_social_btns]' );?>  
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php 
	if ($databook_tofcta_bg_color == 'white') {
		$cta_bg_color_class = 'bg-white';
	} else {
		$cta_bg_color_class = 'bg-black';
	}

	if ($databook_tofcta_bg_color == 'black') {
		$cta_btn_color_class = 'red-btn';
	} else {
		$cta_btn_color_class = 'blue-btn';
	}

?>

<?php if ($footer_cta_select == 'Yes') { ?>
<section class="wp-block-create-block-glide-section-container container-full dc-container-lightgrey">
	<div class="wrapper">
	<div class="footer-cta <?php echo $cta_fcta_variations_class; ?> <?php echo $cta_bg_color_class; ?>">
	<div class="max-df-container">	
	<?php if ($databook_fcta_headline || $databook_fcta_cta) { ?>
			<div class="graphic-img">
				<div class="vector-one d-flex flex-wrap align-items-center">
					<img class="icon-left" src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/cross-icon.svg';
												?>" title="" width="" height="" />
					<div class="animate-arrow">
						<!-- <svg id="footer-arrow-expand" width="760" height="90" viewBox="0 0 760 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 45L758 45M2 45L46.481 0.999998M2 45L46.481 89M758 45L713.519 0.999998M758 45L713.519 89" stroke="#201F22" stroke-width="2"/>
                        </svg> -->
						<svg class="animate-left-arrow" width="53" height="96" viewBox="0 0 53 96" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M49.4811 4L5.00005 48L49.4811 92" stroke="#201F22" stroke-width="2" />
							<path d="M5.00003 48L53 48" stroke="#201F22" stroke-width="2" />
						</svg>
						<!-- <svg id="footer-arrow-expand" class="animate-line-middle" width="53" height="96" viewBox="0 0 53 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 48L53 48" stroke="#201F22" stroke-width="2"/>
                        </svg> -->
						<div class="expand-border" id="footer-arrow-expand"></div>
						<svg class="animate-right-arrow" width="53" height="96" viewBox="0 0 53 96" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M3.51892 4L47.9999 48L3.51892 92" stroke="#201F22" stroke-width="2" />
							<path d="M48 48L0 48" stroke="#201F22" stroke-width="2" />
						</svg>
					</div>
					<img class="icon-right" src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/rectangle-icon.svg'; ?>" title="" width="" height="" />
				</div>
				<div class="vector-one mobile-vector-one d-flex flex-wrap align-items-center">
					<img class="icon-left" src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/cross-icon-mb.svg'; ?>" title="" width="" height="" />
					<div class="animate-arrow">
						<svg class="animate-right-arrow" width="28" height="46" viewBox="0 0 28 46" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M3.99988 23L28 23" stroke="#201F22" stroke-width="2" />
							<path d="M24.2776 3.13184L3.99984 23.0001L24.2776 42.8684" stroke="#201F22" stroke-width="2" />
						</svg>
						<div class="expand-border" id="footer-arrow-expand-sm"></div>
						<svg class="animate-left-arrow" width="28" height="46" viewBox="0 0 28 46" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M24.0001 23L0 23" stroke="#201F22" stroke-width="2" />
							<path d="M3.72241 3.13184L24.0002 23.0001L3.72241 42.8684" stroke="#201F22" stroke-width="2" />
						</svg>
					</div>
					<img class="icon-right" src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/rectangle-icon-mb.svg'; ?>" title="" width="" height="" />
				</div>
			<?php } ?>
			<div class="block-content">
				<?php if ($databook_fcta_headline) { ?>
					<div class="block-title h-cta"><?php echo $databook_fcta_headline; ?></div>
				<?php } ?>
				<div class="glide-spacer s-48"></div>
				<?php if ($databook_fcta_cta) { ?>
					<?php echo glide_acf_button($databook_fcta_cta, 'button ' . $cta_btn_color_class . '');  ?>
				<?php } ?>
			</div>
			</div>
	</div>
	</div>
	</div>
				</div>
</section>

<?php } ?>
<?php get_footer();
