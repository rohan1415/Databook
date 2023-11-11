<?php
/**
 * The template for displaying Press Mention Post archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BaseTheme Package
 * @since 1.0.0
 */

// Include header
get_header(); ?>

<section class="posts-block">
	<div class="wrapper">
		<div class="post-category-row">
			<h1 class="post-title mb-0"> Press Mention</h1>
			<div class="glide-spacer s-96"> </div>
		</div>
	</div>
</section>

<section class="wp-block-create-block-glide-section-container">
<div class="wrapper">
    <div class="column-four press-mention-block">
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
</section>

<?php get_footer(); ?>