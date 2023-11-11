<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BaseTheme Package
 * @since 1.0.0
 */

// Include header
get_header();

// Global variables
global $option_fields;
global $pID;
global $fields;




?>
<section class="posts-block">
	<div class="wrapper">
		<div class="post-category-row">
			<h1 class="post-title mb-0">
				<?php if (get_post_type() == 'resource') {
					echo "Resources";
				} else {
					the_archive_title();
				} ?>
			</h1>
			<div class="glide-spacer s-48"> </div>
			<div class="category-lists">
				<?php
				$current_cat = get_queried_object();
				$taxonomy = $current_cat->taxonomy;

				// Get the main parent term of the current term
				$main_parent_term = get_term($current_cat->parent, $taxonomy);
				$term_id = $current_cat->term_id;
				$sub_cat_html = "";
				$terms = get_terms([
					'taxonomy' => 'resource_category',
					'hide_empty' => true,
					'parent' => 0,
				]);

				foreach ($terms as $term) {

					?>
					<div class="category-card">
						<a href="<?php echo get_term_link($term->slug, 'resource_category'); ?>"
							class="category-click <?php echo ($current_cat->term_id == $term->term_id || $main_parent_term->term_id == $term->term_id ? "active" : "") ?>">
							<?php echo $term->name ?>
						</a>
					</div>

					<?php
				} 

				?>
				<div class="category-card">
					<a href="/resource/" class="category-click">
						See All Posts
					</a>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="glide-spacer s-72"> </div>

<section class="wp-block-create-block-glide-section-container">
	<div class="wrapper">
		<div class="category-card-block relative">
			<div class="category-head">
				<h2 class="nc-heading-2 mb-0 slide-title">
					<?php the_archive_title(); ?>
				</h2>
				<div class="glide-spacer s-20"> </div>
				<div class="category-lists">

					<?php


					// Get the current term object
					$current_term = get_queried_object();

					// Check if it's a valid term
					if ($current_term) {
						// Get the taxonomy's name
						$taxonomy = $current_term->taxonomy;


						// Get the child terms (sub-taxonomies)
						$child_terms = get_terms(
							array(
								'taxonomy' => $taxonomy,
								'child_of' => $current_term->term_id,
							)
						);

						// Check if there are child terms
						if (!empty($child_terms)) {
							// Get the main parent term of the current term
							$main_parent_term1 = get_term($current_term->term_id, $taxonomy);
							if (!empty($main_parent_term1->parent)) {
								$all_url = $main_parent_term1->parent;
							} else {
								$all_url = $current_term->term_id;
							}
							?>
							<div class="category-card">
								<a href="<?php echo get_term_link($all_url, 'resource_category'); ?>" class="category-click ">
									All
								</a>
							</div>
							<?php

							foreach ($child_terms as $child_term) {
								?>
								<div class="category-card">
									<a href="<?php echo get_term_link($child_term) ?>"
										class="category-click <?php echo $current_cat->term_id == $child_term->term_id ? 'active' : '' ?>  ">
										<?php echo $child_term->name ?>
									</a>
								</div>
							<?php }
						}

						// Get the main parent term of the current term
						$main_parent_term = get_term($current_term->parent, $taxonomy);

						// Check if it's a sub-term (not the main parent term)
						if ($main_parent_term && $main_parent_term->parent == 0) {
							// Get all child terms of the main parent term
							$child_terms = get_term_children($main_parent_term->term_id, $taxonomy);

							if (!empty($child_terms)) {
								//echo '<h3>Sub-Taxonomies of ' . $main_parent_term->name . ':</h3>';
					
								foreach ($child_terms as $child_term_id) {
									$child_term = get_term_by('id', $child_term_id, $taxonomy);
									//echo '<li><a href="' . get_term_link($child_term) . '">' . $child_term->name . '</a></li>';
									?>
									<div class="category-card">
										<a href="<?php echo get_term_link($child_term) ?>"
											class="category-click <?php echo $current_cat->term_id == $child_term->term_id ? 'active' : '' ?>  ">
											<?php echo $child_term->name ?>
										</a>
									</div>
									<?php
								}

							}
						}
					}

					?>

				</div>
			</div>
			<div class="glide-spacer s-48"> </div>
			<div class="product-news-board column-three">
				<?php
				if (have_posts()) {
					while (have_posts()) {
						the_post();
						// Include specific template for the content
						get_template_part('partials/content-archive', get_post_type());
					}
					?>
					<?php
				} else {
					// If no content, include the "No posts found" template.
					get_template_part('partials/content', 'none');
				}
				?>
			</div>
			<?php
			if (function_exists('glide_pagination')) { ?>
				<?php //glide_pagination();  
					custom_post_type_pagination(); ?>
			<?php } ?>
			<div class="glide-spacer s-96"> </div>
		</div>
	</div>
</section>
<?php if (get_post_type() == "resource") {
	?>
	<?php

	$current_cat = get_queried_object();
	$term_id = $current_cat->term_id;
	$databook_to_select_category = get_field('databook_to_select_category', 'option');

	if (!empty($databook_to_select_category) && in_array($term_id, $databook_to_select_category)) {
		$databook_to_press_mention_title = get_field('databook_to_press_mention_title', 'option');
		$databook_to_select_posts = "Latest Posts";
		$databook_to_select_posts = get_field('databook_to_select_posts', 'option');
		$databook_to_press_mention_title = get_field('databook_to_press_mention_title', 'option');
		$databook_to_press_mentions_cta = get_field('databook_to_press_mentions_cta', 'option');
		$databook_to_press_inquiry_title = get_field('databook_to_press_inquiry_title', 'option');
		$databook_to_press_inquiry_left_title = get_field('databook_to_press_inquiry_left_title', 'option');
		$databook_to_press_inquiry_left_content = get_field('databook_to_press_inquiry_left_content', 'option');
		$databook_to_press_inquiry_left_section_phone = get_field('databook_to_press_inquiry_left_section_phone', 'option');
		$databook_to_press_inquiry_left_section_email = get_field('databook_to_press_inquiry_left_section_email', 'option');
		$databook_to_press_inquiry_right_title = get_field('databook_to_press_inquiry_right_title', 'option');
		$databook_to_press_inquiry_right_content = get_field('databook_to_press_inquiry_right_content', 'option');
		$databook_to_press_inquiry_right_section_cta = get_field('databook_to_press_inquiry_right_section_cta', 'option');

		if (!empty($databook_to_press_mentions_cta)) {
			$press_mentions_link_url = $databook_to_press_mentions_cta['url'];
			$press_mentions_link_title = $databook_to_press_mentions_cta['title'] ? $databook_to_press_mentions_cta['title'] : "View All";
			$press_mentions_link_target = $databook_to_press_mentions_cta['target'] ? $databook_to_press_mentions_cta['target'] : '_self';
		}

		?>
		<!-- <div class="glide-spacer s-96"> </div> -->

		<div class="single-border"></div>

		<div class="glide-spacer s-96"> </div>

		<section class="wp-block-create-block-glide-section-container">
			<div class="wrapper">
				<div class="post-card-slide relative">
					<div class="slider-head btn-with-arrow d-flex flex-wrap align-items-center justify-between">
						<div class="content-left">
							<h2 class="nc-heading-2 mb-0 slide-title">
								<?php echo $databook_to_press_mention_title ?>
							</h2>
						</div>
						<div class="btn-arrow d-flex flex-wrap">
							<div class="press-mentions-custom-arrow arrow-custom d-flex flex-wrap align-items-center">

							</div>
							<div class="btn-right d-flex flex-wrap align-items-center">
								<?php if ($press_mentions_link_title != '') { ?>
									<a class="border-btn-icon" href="<?php echo esc_url($press_mentions_link_url); ?>"
										target="<?php echo esc_attr($press_mentions_link_target); ?>">
										<span>
											<?php echo $press_mentions_link_title; ?>
										</span>
									</a>
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="press-mentions-slide">

						<?php
						if ($databook_to_select_posts == "Latest Posts") {
							$databook_to_no_of_posts = get_field('databook_to_no_of_posts', 'option') ? get_field('databook_to_no_of_posts', 'option') : 4;

							$args = array(
								'post_type' => 'press_mentions',
								'posts_per_page' => $databook_to_no_of_posts,
								'post_status' => 'publish',

							);
							// The Query
							$query = new WP_Query($args);

							// The Loop
							if ($query->have_posts()) {
								while ($query->have_posts()) {
									$query->the_post();
									$pID = $post->ID;
									$cpt_press_mention_link_target = get_field('cpt_press_mention_link_target', $pID);
									$target_link = ($cpt_press_mention_link_target == 'New Window') ? 'target="_blank"' : '';
									$post_title = get_the_title($pID);
									$parmalink = get_the_permalink($pID);
									//$term_list = get_the_terms($pID, 'press_mentions_category');
									$cpt_press_mention_logo = get_field('cpt_press_mention_logo', $pID);
									$cpt_press_mention_category_name = get_field('cpt_press_mention_category_name', $pID);
									$types = '';
									// foreach ($term_list as $term_single) {
									// 	$cat_name .= ucfirst($term_single->name);
									// }
									$alt_text = "";
									if (has_post_thumbnail($pID)):
										$image = wp_get_attachment_image_src(get_post_thumbnail_id($pID), 'thumb_480');
										$image = $image[0];
										$image_id = get_post_thumbnail_id($pID);
										$alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);
									else:
										$image = get_template_directory_uri() . "/assets/img/defaults/databook-black-logo.svg";
									endif;
									?>
									<div>
										<div class="box-grid-block box-grid-logo">
											<a href="<?php echo $parmalink ?>" <?php echo $target_link; ?>>
												<div class="box-grid-img">
													<?php if ($cpt_press_mention_logo != '') { ?>
														<?php echo wp_get_attachment_image($cpt_press_mention_logo, 'thumb_300'); ?>
													<?php } else {
														$image = get_template_directory_uri() . "/assets/img/defaults/databook-black-logo.svg"; ?>
														<img class="" alt="<?php echo $alt_text ?>" src="<?php echo $image; ?>" width="276"
															height="344" />
													<?php } ?>
												</div>
												<div class="grid-content">
													<div class="sub-head ui-nc-xtra-small">
														<?php echo $cpt_press_mention_category_name; ?>
													</div>
													<a href="<?php echo $parmalink ?>" <?php echo $target_link; ?>>
														<h6 class="nc-heading-6 block-title mb-0">
															<?php echo $post_title; ?>
														</h6>
													</a>
												</div>
											</a>
										</div>
									</div>

								<?php }
							}

						} elseif ($databook_to_select_posts == "Manual Select") {
							$databook_to_select_existing_posts = get_field('databook_to_select_existing_posts', 'option');

							?>
							<?php if ($databook_to_select_existing_posts) { ?>
								<?php foreach ($databook_to_select_existing_posts as $key => $feature_post) {
									$pID = $feature_post->ID;
									$cpt_press_mention_link_target = get_field('cpt_press_mention_link_target', $pID);
									$target_link = ($cpt_press_mention_link_target == 'New Window') ? 'target="_blank"' : '';
									$post_title = get_the_title($pID);
									$post_excerpt = get_the_excerpt($pID);
									$post_date = get_the_date('M d Y', $pID);
									$parmalink = get_the_permalink($pID);
									$category_detail = get_the_category($pID); //$post->ID
									$cpt_press_mention_logo = get_field('cpt_press_mention_logo', $pID);
									$cpt_press_mention_category_name = get_field('cpt_press_mention_category_name', $pID);
									$cat_name = "";
									$alt_text = "no-image";
									if (has_post_thumbnail($pID)):
										$image = wp_get_attachment_image_src(get_post_thumbnail_id($pID), 'thumb_699');
										$image = $image[0];
										$image_id = get_post_thumbnail_id($pID);
										$alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);
									else:
										$image = get_template_directory_uri() . "/assets/img/defaults/databook-black-logo.svg";
									endif;
									$term_list = get_the_terms($pID, 'press_mentions_category');
									$types = '';
									foreach ($term_list as $term_single) {
										$cat_name .= ucfirst($term_single->name);
									}

									?>
									<div>
										<div class="box-grid-block box-grid-logo">
											<a href="<?php echo $parmalink ?>" <?php echo $target_link; ?>>
												<div class="box-grid-img">
													<?php if ($cpt_press_mention_logo != '') { ?>
														<?php echo wp_get_attachment_image($cpt_press_mention_logo, 'thumb_300'); ?>
													<?php } else {
														$image = get_template_directory_uri() . "/assets/img/defaults/databook-black-logo.svg"; ?>
														<img class="" alt="<?php echo $alt_text ?>" src="<?php echo $image; ?>" width="276"
															height="344" />
													<?php } ?>
												</div>
												<div class="grid-content">
													<div class="sub-head ui-nc-xtra-small">
														<?php echo $cpt_press_mention_category_name; ?>
													</div>
													<a href="<?php echo $parmalink ?>" <?php echo $target_link; ?>>
														<h6 class="nc-heading-6 block-title mb-0">
															<?php echo $post_title; ?>
														</h6>
													</a>
												</div>
											</a>
										</div>
									</div>
								<?php }
							}
						} ?>

					</div>
					<div class="btn-right btn-md-block d-flex flex-wrap align-items-center">
						<?php if ($press_mentions_link_title != '') { ?>
							<a class="border-btn-icon" href="<?php echo esc_url($press_mentions_link_url); ?>"
								target="<?php echo esc_attr($press_mentions_link_target); ?>">
								<span>
									<?php echo $press_mentions_link_title ?>
								</span>
							</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>


		<div class="glide-spacer s-96"> </div>

		<div class="single-border"></div>

		<div class="glide-spacer s-96"> </div>
		<section class="wp-block-create-block-glide-section-container">
			<div class="wrapper">
				<h2 class="nc-heading-2 mb-0 block-title">
					<?php echo $databook_to_press_inquiry_title ?>
				</h2>
				<div class="glide-spacer s-48"> </div>
				<div class="press-inquiries column-two">
					<div class="cl-left">
						<h6 class="mb-0 press-title">
							<?php echo $databook_to_press_inquiry_left_title ?>
						</h6>
						<div class="glide-spacer s-20"> </div>
						<div class="large-text press-desc">
							<?php echo $databook_to_press_inquiry_left_content ?>
						</div>
						<div class="glide-spacer s-30"> </div>
						<div class="text-arrow-block">
							<div class="">
								<a href="tel:<?php echo $databook_to_press_inquiry_left_section_phone ?>"
									class="ui-uc-medium text-arrow-btn">
									<?php echo $databook_to_press_inquiry_left_section_phone ?>
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/text-arrow.svg" width="16"
										height="16">

								</a>
							</div>
							<div class="">
								<a class="ui-nc-medium text-arrow-btn"
									href="mailto:<?php echo $databook_to_press_inquiry_left_section_email ?>">
									<?php echo $databook_to_press_inquiry_left_section_email ?>
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/text-arrow.svg" width="16"
										height="16">
								</a>
							</div>
						</div>
					</div>
					<div class="cl-right">
						<h6 class="mb-0 press-title">
							<?php echo $databook_to_press_inquiry_right_title ?>
						</h6>
						<div class="glide-spacer s-20"> </div>
						<div class="large-text press-desc">
							<?php echo $databook_to_press_inquiry_right_content ?>
						</div>
						<div class="glide-spacer s-30"> </div>
						<div class="press-btn">
							<?php
							if (!empty($databook_to_press_inquiry_right_section_cta)) {
								$press_inquiry_link_url = $databook_to_press_inquiry_right_section_cta['url'];
								$press_inquiry_link_title = $databook_to_press_inquiry_right_section_cta['title'] ? $databook_to_press_inquiry_right_section_cta['title'] : "View All";
								$press_inquiry_link_target = $databook_to_press_inquiry_right_section_cta['target'] ? $databook_to_press_inquiry_right_section_cta['target'] : '_self';
							}
							?>
							<a href="<?php echo $press_inquiry_link_url ?>" title="<?php echo $press_inquiry_link_title ?>"
								target="<?php echo $press_inquiry_link_target ?>" class="button black-btn small-btn">
								<span class="btn-text">
									<?php echo $press_inquiry_link_title ?>
								</span>
								<span class="btn-user-arrow">
									<img width="14" height="13" decoding="async"
										src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/white-arrow.svg" alt="">
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>


		<div class="glide-spacer s-156"> </div>
	<?php }

} ?>

<?php get_footer(); ?>