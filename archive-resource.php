<?php
/**
 * The template for displaying Resource Post archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BaseTheme Package
 * @since 1.0.0
 */

// Include header
get_header();

$post_id = get_the_id();
$footer_cta_title = get_field('footer_cta_title', 'option');
$footer_cta_link = get_field('footer_cta_link', 'option');

?>


<section class="posts-block">
	<div class="wrapper">
		<div class="post-category-row">
			<h1 class="post-title mb-0">Resource</h1>
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
					<a href="/resource/" class="category-click see-all-post">
						See All Posts
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="glide-spacer s-96"> </div>
<section class="wp-block-create-block-glide-section-container">
	<div class="wrapper">
		<div class="column-three post-card-slide press-mention-block">
			<?php
			if (have_posts()) {
				while (have_posts()) {
					the_post(); ?>
					<div class="box-grid-block">
						<div class="box-grid-img">
							<a href="<?php the_permalink(); ?>" <?php echo $target_link; ?>>
								<?php if (has_post_thumbnail()) { ?>
									<?php the_post_thumbnail(
										'thumb_600',
										array(
											'alt' => get_the_title(),
											'title' => get_the_title(),
										)
									); ?>
								<?php } else { ?> <img
										src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/admin/defaults/default-image.webp"
										class="" alt="<?php get_the_title(); ?>" title="<?php get_the_title(); ?>">
								<?php } ?>
							</a>
						</div>

						<div class="grid-content">
							<div class="post-cat">
								<div class="resource-arch-cat">

								<?php
									$terms = get_the_terms(get_the_ID(), 'resource_category');
									echo $terms[0]->name;

									?>
								</div>
							</div>
							<h5 class="nc-heading-5 block-title mb-0">
								<a class="blog-title" href="<?php the_permalink(); ?>" <?php echo $target_link; ?>>
									<?php the_title(); ?>
								</a>
							</h5>
						</div>
					</div>
				<?php }
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

	</div>
</section>

<div class="glide-spacer s-156"> </div>

<?php if ($footer_cta_title || $footer_cta_link) { ?>
	<div class="footer-cta footer-cta variation-one bg-black">
		<div class="wrapper">
			<div class="graphic-img">
				<div class="vector-one d-flex flex-wrap align-items-center">
					<img class="icon-left" src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/cross-icon.svg';
					?>" title="" width="" height="" />
					<div class="animate-arrow">

						<svg class="animate-left-arrow" width="53" height="96" viewBox="0 0 53 96" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path d="M49.4811 4L5.00005 48L49.4811 92" stroke="#201F22" stroke-width="2" />
							<path d="M5.00003 48L53 48" stroke="#201F22" stroke-width="2" />
						</svg>

						<div class="expand-border" id="footer-arrow-expand"></div>
						<svg class="animate-right-arrow" width="53" height="96" viewBox="0 0 53 96" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path d="M3.51892 4L47.9999 48L3.51892 92" stroke="#201F22" stroke-width="2" />
							<path d="M48 48L0 48" stroke="#201F22" stroke-width="2" />
						</svg>
					</div>
					<img class="icon-right"
						src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/rectangle-icon.svg'; ?>"
						title="" width="" height="" />
				</div>
				<div class="vector-one mobile-vector-one d-flex flex-wrap align-items-center">
					<img class="icon-left"
						src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/cross-icon-mb.svg'; ?>"
						title="" width="" height="" />
					<div class="animate-arrow">
						<svg class="animate-right-arrow" width="28" height="46" viewBox="0 0 28 46" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path d="M3.99988 23L28 23" stroke="#201F22" stroke-width="2" />
							<path d="M24.2776 3.13184L3.99984 23.0001L24.2776 42.8684" stroke="#201F22" stroke-width="2" />
						</svg>
						<div class="expand-border" id="footer-arrow-expand-sm"></div>
						<svg class="animate-left-arrow" width="28" height="46" viewBox="0 0 28 46" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path d="M24.0001 23L0 23" stroke="#201F22" stroke-width="2" />
							<path d="M3.72241 3.13184L24.0002 23.0001L3.72241 42.8684" stroke="#201F22" stroke-width="2" />
						</svg>
					</div>
					<img class="icon-right"
						src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/rectangle-icon-mb.svg'; ?>"
						title="" width="" height="" />
				</div>

				<div class="block-content">
					<?php if ($footer_cta_title) { ?>
						<div class="block-title h-cta">
							<?php echo $footer_cta_title; ?>
						</div>
					<?php } ?>
					<div class="glide-spacer s-48"></div>
					<?php if ($footer_cta_link) { ?>
						<?php echo glide_acf_button($footer_cta_link, 'button red-btn'); ?>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="glide-spacer s-128"></div>
	</div>
<?php } ?>

<?php get_footer(); ?>