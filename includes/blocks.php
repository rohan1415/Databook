<?php
/**
 * Functions for custom Gutenberg blocks
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package BaseTheme Package
 * @since 1.0.0
 */

/**
 * Register custom Gutenberg blocks
 */
add_action( 'acf/init', 'glide_theme_acf_init' );
function glide_theme_acf_init() {

	if ( function_exists( 'acf_register_block' ) ) {

		// Register a block - Spacer
		acf_register_block(
			array(
				'name'            => 'spacer',
				'title'           => __( 'Theme Spacer', 'databook_td' ),
				'description'     => __( 'A custom spacer block for theme.', 'databook_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M8 0H16V64H8V0Z" fill="#A50A09"/>
				<path d="M8 0H16V64H8V0Z" fill="#A50A09"/>
				<path d="M8 0H16V64H8V0Z" fill="#A50A09"/>
				<path d="M24 56L24 64L-3.49691e-07 64L0 56L24 56Z" fill="#A50A09"/>
				<path d="M24 56L24 64L-3.49691e-07 64L0 56L24 56Z" fill="#A50A09"/>
				<path d="M24 56L24 64L-3.49691e-07 64L0 56L24 56Z" fill="#A50A09"/>
				<path d="M24 0L24 8L-3.49691e-07 8L0 -1.04907e-06L24 0Z" fill="#A50A09"/>
				<path d="M24 0L24 8L-3.49691e-07 8L0 -1.04907e-06L24 0Z" fill="#A50A09"/>
				<path d="M24 0L24 8L-3.49691e-07 8L0 -1.04907e-06L24 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L36 4L36 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L36 4L36 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L36 4L36 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M50 16L50 20L36 20L36 16L50 16Z" fill="#A50A09"/>
				<path d="M50 16L50 20L36 20L36 16L50 16Z" fill="#A50A09"/>
				<path d="M50 16L50 20L36 20L36 16L50 16Z" fill="#A50A09"/>
				<path d="M64 8L64 12L36 12L36 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L36 12L36 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L36 12L36 8L64 8Z" fill="#A50A09"/>
				<path d="M64 44L64 48L36 48L36 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L36 48L36 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L36 48L36 44L64 44Z" fill="#A50A09"/>
				<path d="M50 60L50 64L36 64L36 60L50 60Z" fill="#A50A09"/>
				<path d="M50 60L50 64L36 64L36 60L50 60Z" fill="#A50A09"/>
				<path d="M50 60L50 64L36 64L36 60L50 60Z" fill="#A50A09"/>
				<path d="M64 52L64 56L36 56L36 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L36 56L36 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L36 56L36 52L64 52Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Spacer Block' ),
				'align'           => 'full',
				'supports'        => array(
					'align' => false,
				),
			)
		);

		// Register a block - Button
		acf_register_block(
			array(
				'name'            => 'button',
				'title'           => __( 'Theme Buttons', 'databook_td' ),
				'description'     => __( 'A custom button block with theme styles.', 'databook_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Button' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => esc_url( get_template_directory_uri() ) . '/assets/img/admin/button.webp',
						),
					),
				),
			)
		);

		// Register a block - ACFBlock
		acf_register_block(
			array(
				'name'            => 'acfblock',
				'title'           => __( 'ACFBlock', 'databook_td' ),
				'description'     => __( 'A custom ACFBlock.', 'databook_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'images-alt2',
				'mode'            => 'edit',
				'keywords'        => array( 'ACFBlock' ),
				'align'           => 'wide',
				// calling assets js,css
				'enqueue_assets' => function(){
				wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/scripts/jquery.cycle2.min.js', array('jquery'), '', true );
				},
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
						),
					),
				),
			)
		);

		// Register a block - ACFBlock
		acf_register_block(
			array(
				'name'            => 'image-alongside-text',
				'title'           => __( 'Image Alongside Text', 'databook_td' ),
				'description'     => __( 'A custom image alongside text.', 'databook_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 682.667 682.667" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><defs><clipPath id="a" clipPathUnits="userSpaceOnUse"><path d="M0 512h512V0H0Z" fill="#bc0d05" data-original="#000000" class=""></path></clipPath><clipPath id="b" clipPathUnits="userSpaceOnUse"><path d="M0 512h512V0H0Z" fill="#bc0d05" data-original="#000000" class=""></path></clipPath><clipPath id="c" clipPathUnits="userSpaceOnUse"><path d="M0 512h512V0H0Z" fill="#bc0d05" data-original="#000000" class=""></path></clipPath></defs><g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)"><path d="M284 502h218V284H284ZM10 502h218V284H10Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path><path d="M0 0h-67.753v-218h218V0H80" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(77.753 228)" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g><path d="m0 0 70.844 70.844L177.576-35.889" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="matrix(1.33333 0 0 -1.33333 381.454 252.12)" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path><g clip-path="url(#b)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)"><path d="m0 0 72.267 72.267 34.327-34.327" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(391.753 362.406)" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path><path d="m0 0 70.844 70.844L177.576-35.889" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(12.09 48.91)" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g><path d="m0 0 72.267 72.267 34.327-34.327" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="matrix(1.33333 0 0 -1.33333 157.004 564.792)" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path><path d="M0 0h-115v-40h37.5v-91.593h40V-40H0Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="matrix(1.33333 0 0 -1.33333 600.667 436.271)" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path><g clip-path="url(#c)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)"><path d="M284 10h218v218H284Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g><path d="M0 0h-115v-40h37.5v-91.593h40V-40H0Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="matrix(1.33333 0 0 -1.33333 235.334 70.938)" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path><path d="M0 0v0" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="matrix(1.33333 0 0 -1.33333 157.004 378.667)" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g></svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'image', 'along', 'side', 'text' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/image-alongside-text-full-image.webp',
						),
					),
				),
			)
		);

	
		// Register a block - Featured Text w/ Logos
		acf_register_block(
			array(
				'name'            => 'featured-text-w-logos',
				'title'           => __( 'Featured Text w/ Logos', 'databook_td' ),
				'description'     => __( 'A custom featured text with Logos.', 'databook_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 682.667 682.667" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><defs><clipPath id="a" clipPathUnits="userSpaceOnUse"><path d="M0 512h512V0H0Z" fill="#bc0d05" data-original="#000000" class=""></path></clipPath><clipPath id="b" clipPathUnits="userSpaceOnUse"><path d="M0 512h512V0H0Z" fill="#bc0d05" data-original="#000000" class=""></path></clipPath><clipPath id="c" clipPathUnits="userSpaceOnUse"><path d="M0 512h512V0H0Z" fill="#bc0d05" data-original="#000000" class=""></path></clipPath></defs><g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)"><path d="M284 502h218V284H284ZM10 502h218V284H10Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path><path d="M0 0h-67.753v-218h218V0H80" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(77.753 228)" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g><path d="m0 0 70.844 70.844L177.576-35.889" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="matrix(1.33333 0 0 -1.33333 381.454 252.12)" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path><g clip-path="url(#b)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)"><path d="m0 0 72.267 72.267 34.327-34.327" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(391.753 362.406)" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path><path d="m0 0 70.844 70.844L177.576-35.889" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(12.09 48.91)" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g><path d="m0 0 72.267 72.267 34.327-34.327" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="matrix(1.33333 0 0 -1.33333 157.004 564.792)" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path><path d="M0 0h-115v-40h37.5v-91.593h40V-40H0Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="matrix(1.33333 0 0 -1.33333 600.667 436.271)" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path><g clip-path="url(#c)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)"><path d="M284 10h218v218H284Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g><path d="M0 0h-115v-40h37.5v-91.593h40V-40H0Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="matrix(1.33333 0 0 -1.33333 235.334 70.938)" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path><path d="M0 0v0" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="matrix(1.33333 0 0 -1.33333 157.004 378.667)" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g></svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'featured text with logos'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/featured-text-logos.webp',
						),
					),
				),
			)
		);

		// Register a block - Quote Grid
		acf_register_block(
			array(
				'name'            => 'quote-grid',
				'title'           => __( 'Quote Grid', 'databook_td' ),
				'description'     => __( 'A custom featured for Quote Grid.', 'databook_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M187.628 0H43.707C19.607 0 0 19.607 0 43.707v143.921c0 24.1 19.607 43.707 43.707 43.707h143.921c24.1 0 43.707-19.607 43.707-43.707V43.707c0-24.1-19.607-43.707-43.707-43.707zM468.293 0H324.372c-24.1 0-43.707 19.607-43.707 43.707v143.921c0 24.1 19.607 43.707 43.707 43.707h143.921c24.1 0 43.707-19.607 43.707-43.707V43.707C512 19.607 492.393 0 468.293 0zM187.628 280.665H43.707C19.607 280.665 0 300.272 0 324.372v143.921C0 492.393 19.607 512 43.707 512h143.921c24.1 0 43.707-19.607 43.707-43.707V324.372c0-24.1-19.607-43.707-43.707-43.707zM468.293 280.665H324.372c-24.1 0-43.707 19.607-43.707 43.707v143.921c0 24.1 19.607 43.707 43.707 43.707h143.921c24.1 0 43.707-19.607 43.707-43.707V324.372c0-24.1-19.607-43.707-43.707-43.707z" fill="#bc0d05" data-original="#000000" class=""></path></g></svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Quote grid'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/quote-grid.webp',
						),
					),
				),
			)
		);

		// Register a block - Mid Page CTA
		acf_register_block(
			array(
				'name'            => 'mid-page-cta',
				'title'           => __( 'Mid Page CTA', 'databook_td' ),
				'description'     => __( 'Mid Page CTA.', 'databook_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#bc0d05" d="m405.724 301.558-41.362-101.287a16.465 16.465 0 0 0-.184-.432c-2.798-6.283-9.09-10.34-16.033-10.34h-.02c-6.95.008-13.242 4.08-16.029 10.375-.052.118-.104.237-.152.356l-41.742 101.282c-3.157 7.66.493 16.428 8.152 19.584 7.66 3.158 16.428-.493 19.584-8.152l6.57-15.94h46.951l6.491 15.896c2.374 5.813 7.979 9.333 13.892 9.333 1.889 0 3.809-.359 5.666-1.117 7.669-3.132 11.347-11.888 8.216-19.558zm-68.852-34.554 11.219-27.222 11.117 27.222z" data-original="#e50058"></path><path fill="#bc0d05" d="M203.525 281.446c-6.346-5.322-15.809-4.493-21.132 1.856a26.342 26.342 0 0 1-2.651 2.737c-4.769 4.247-10.897 6.401-18.214 6.401-20.052 0-36.365-16.313-36.365-36.365s16.313-36.365 36.365-36.365c7.289 0 14.316 2.145 20.321 6.202 6.864 4.637 16.188 2.833 20.827-4.032 4.638-6.864 2.833-16.189-4.032-20.827-10.984-7.421-23.818-11.343-37.116-11.343-36.594 0-66.365 29.771-66.365 66.365s29.771 66.365 66.365 66.365c14.686 0 27.884-4.84 38.167-13.998a56.423 56.423 0 0 0 5.686-5.865c5.323-6.347 4.492-15.807-1.856-21.131zM299.61 204.771c0-8.284-6.716-15-15-15h-56.733c-8.284 0-15 6.716-15 15s6.716 15 15 15h13.252V307.5c0 8.284 6.716 15 15 15s15-6.716 15-15v-87.729h13.481c8.284 0 15-6.716 15-15z" data-original="#ff415b" class=""></path><path fill="#bc0d05" d="M0 53.984c0-2.151.854-4.214 2.375-5.734L48.25 2.375a8.108 8.108 0 0 1 11.468 0L98.56 41.217l18.498-25.568a8.11 8.11 0 0 1 14.347 2.457l43.262 146.487a8.108 8.108 0 0 1-10.074 10.074L18.107 131.406a8.11 8.11 0 0 1-2.457-14.347L41.217 98.56 2.375 59.718A8.108 8.108 0 0 1 0 53.984zM0 458.016c0 2.151.854 4.214 2.375 5.734l45.875 45.874a8.108 8.108 0 0 0 11.468 0l38.842-38.842 18.498 25.568a8.11 8.11 0 0 0 14.347-2.457l43.262-146.487a8.108 8.108 0 0 0-10.074-10.074L18.107 380.594a8.11 8.11 0 0 0-2.457 14.347l25.568 18.498-38.843 38.843A8.108 8.108 0 0 0 0 458.016z" data-original="#fff4f4" class=""></path><path fill="#bc0d05" d="M512 53.984a8.106 8.106 0 0 0-2.375-5.734L463.75 2.375a8.108 8.108 0 0 0-11.468 0L413.44 41.217l-18.498-25.568a8.11 8.11 0 0 0-14.347 2.457l-43.262 146.487a8.108 8.108 0 0 0 10.074 10.074l146.487-43.262a8.11 8.11 0 0 0 2.457-14.347L470.783 98.56l38.842-38.842A8.108 8.108 0 0 0 512 53.984zM512 458.016a8.106 8.106 0 0 1-2.375 5.734l-45.875 45.874a8.108 8.108 0 0 1-11.468 0l-38.842-38.842-18.498 25.568a8.11 8.11 0 0 1-14.347-2.457l-43.262-146.487a8.108 8.108 0 0 1 10.074-10.074l146.487 43.262a8.11 8.11 0 0 1 2.457 14.347l-25.568 18.498 38.842 38.842a8.112 8.112 0 0 1 2.375 5.735z" data-original="#f6efea" class=""></path><path fill="#bc0d05" d="M284.61 189.771H256v132.728l.129.001c8.284 0 15-6.716 15-15v-87.729h13.481c8.284 0 15-6.716 15-15s-6.716-15-15-15z" data-original="#e50058"></path></g></svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Mid Page CTA'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/mid-page-CTA.webp',
						),
					),
				),
			)
		);

		// Register a block - Footer CTA
		acf_register_block(
			array(
				'name'            => 'footer-cta',
				'title'           => __( 'Footer CTA', 'databook_td' ),
				'description'     => __( 'Footer CTA.', 'databook_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#bc0d05" d="m405.724 301.558-41.362-101.287a16.465 16.465 0 0 0-.184-.432c-2.798-6.283-9.09-10.34-16.033-10.34h-.02c-6.95.008-13.242 4.08-16.029 10.375-.052.118-.104.237-.152.356l-41.742 101.282c-3.157 7.66.493 16.428 8.152 19.584 7.66 3.158 16.428-.493 19.584-8.152l6.57-15.94h46.951l6.491 15.896c2.374 5.813 7.979 9.333 13.892 9.333 1.889 0 3.809-.359 5.666-1.117 7.669-3.132 11.347-11.888 8.216-19.558zm-68.852-34.554 11.219-27.222 11.117 27.222z" data-original="#e50058"></path><path fill="#bc0d05" d="M203.525 281.446c-6.346-5.322-15.809-4.493-21.132 1.856a26.342 26.342 0 0 1-2.651 2.737c-4.769 4.247-10.897 6.401-18.214 6.401-20.052 0-36.365-16.313-36.365-36.365s16.313-36.365 36.365-36.365c7.289 0 14.316 2.145 20.321 6.202 6.864 4.637 16.188 2.833 20.827-4.032 4.638-6.864 2.833-16.189-4.032-20.827-10.984-7.421-23.818-11.343-37.116-11.343-36.594 0-66.365 29.771-66.365 66.365s29.771 66.365 66.365 66.365c14.686 0 27.884-4.84 38.167-13.998a56.423 56.423 0 0 0 5.686-5.865c5.323-6.347 4.492-15.807-1.856-21.131zM299.61 204.771c0-8.284-6.716-15-15-15h-56.733c-8.284 0-15 6.716-15 15s6.716 15 15 15h13.252V307.5c0 8.284 6.716 15 15 15s15-6.716 15-15v-87.729h13.481c8.284 0 15-6.716 15-15z" data-original="#ff415b" class=""></path><path fill="#bc0d05" d="M0 53.984c0-2.151.854-4.214 2.375-5.734L48.25 2.375a8.108 8.108 0 0 1 11.468 0L98.56 41.217l18.498-25.568a8.11 8.11 0 0 1 14.347 2.457l43.262 146.487a8.108 8.108 0 0 1-10.074 10.074L18.107 131.406a8.11 8.11 0 0 1-2.457-14.347L41.217 98.56 2.375 59.718A8.108 8.108 0 0 1 0 53.984zM0 458.016c0 2.151.854 4.214 2.375 5.734l45.875 45.874a8.108 8.108 0 0 0 11.468 0l38.842-38.842 18.498 25.568a8.11 8.11 0 0 0 14.347-2.457l43.262-146.487a8.108 8.108 0 0 0-10.074-10.074L18.107 380.594a8.11 8.11 0 0 0-2.457 14.347l25.568 18.498-38.843 38.843A8.108 8.108 0 0 0 0 458.016z" data-original="#fff4f4" class=""></path><path fill="#bc0d05" d="M512 53.984a8.106 8.106 0 0 0-2.375-5.734L463.75 2.375a8.108 8.108 0 0 0-11.468 0L413.44 41.217l-18.498-25.568a8.11 8.11 0 0 0-14.347 2.457l-43.262 146.487a8.108 8.108 0 0 0 10.074 10.074l146.487-43.262a8.11 8.11 0 0 0 2.457-14.347L470.783 98.56l38.842-38.842A8.108 8.108 0 0 0 512 53.984zM512 458.016a8.106 8.106 0 0 1-2.375 5.734l-45.875 45.874a8.108 8.108 0 0 1-11.468 0l-38.842-38.842-18.498 25.568a8.11 8.11 0 0 1-14.347-2.457l-43.262-146.487a8.108 8.108 0 0 1 10.074-10.074l146.487 43.262a8.11 8.11 0 0 1 2.457 14.347l-25.568 18.498 38.842 38.842a8.112 8.112 0 0 1 2.375 5.735z" data-original="#f6efea" class=""></path><path fill="#bc0d05" d="M284.61 189.771H256v132.728l.129.001c8.284 0 15-6.716 15-15v-87.729h13.481c8.284 0 15-6.716 15-15s-6.716-15-15-15z" data-original="#e50058"></path></g></svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Footer CTA'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/conversion-hero.webp',
						),
					),
				),
			)
		);

		// Register a block - Quote Slider
		acf_register_block(
			array(
				'name'            => 'quote-slider',
				'title'           => __( 'Quote Slider', 'databook_td' ),
				'description'     => __( 'Quote Slider.', 'databook_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M478 23.5h-21.668C451.898 9.879 439.086 0 424 0H88C72.914 0 60.102 9.879 55.668 23.5H34c-18.746 0-34 15.254-34 34v185c0 18.746 15.254 34 34 34h21.668C60.102 290.121 72.914 300 88 300h121.332c5.523 0 10-4.477 10-10s-4.477-10-10-10H88c-7.719 0-14-6.281-14-14V34c0-7.719 6.281-14 14-14h336c7.719 0 14 6.281 14 14v232c0 7.719-6.281 14-14 14H303.668c-5.523 0-10 4.477-10 10s4.477 10 10 10H424c15.086 0 27.898-9.879 32.332-23.5H478c18.746 0 34-15.254 34-34v-185c0-18.746-15.254-34-34-34zm-458 219v-185c0-7.719 6.281-14 14-14h20v213H34c-7.719 0-14-6.281-14-14zm472 0c0 7.719-6.281 14-14 14h-20v-213h20c7.719 0 14 6.281 14 14zm0 0" fill="#bc0d05" data-original="#000000"></path><path d="M383.492 178.637c1.953 1.953 4.512 2.925 7.07 2.925s5.118-.972 7.07-2.925l21.438-21.438c3.907-3.906 3.907-10.238 0-14.144l-21.437-21.438c-3.906-3.902-10.235-3.902-14.14 0-3.907 3.906-3.907 10.238 0 14.145l14.362 14.363-14.363 14.367c-3.906 3.906-3.906 10.238 0 14.145zM128.508 121.617c-3.906-3.902-10.235-3.902-14.145 0L92.93 143.055c-3.907 3.906-3.907 10.238 0 14.144l21.433 21.438c1.953 1.953 4.516 2.93 7.075 2.93s5.117-.977 7.07-2.93c3.902-3.907 3.902-10.239 0-14.145L114.14 150.13l14.367-14.367c3.906-3.907 3.906-10.239 0-14.145zM131.379 338c-19.852 0-36 16.148-36 36s16.148 36 36 36c19.851 0 36-16.148 36-36s-16.149-36-36-36zm0 52c-8.82 0-16-7.18-16-16s7.18-16 16-16c8.824 0 16 7.18 16 16s-7.176 16-16 16zM256 338c-19.852 0-36 16.148-36 36s16.148 36 36 36 36-16.148 36-36-16.148-36-36-36zm0 52c-8.82 0-16-7.18-16-16s7.18-16 16-16 16 7.18 16 16-7.18 16-16 16zM380.621 338c-19.851 0-36 16.148-36 36s16.149 36 36 36c19.852 0 36-16.148 36-36s-16.148-36-36-36zm0 52c-8.824 0-16-7.18-16-16s7.176-16 16-16c8.82 0 16 7.18 16 16s-7.18 16-16 16zM263.07 297.07c1.86-1.86 2.93-4.441 2.93-7.07s-1.07-5.21-2.93-7.07A10.08 10.08 0 0 0 256 280c-2.64 0-5.21 1.07-7.07 2.93-1.86 1.86-2.93 4.441-2.93 7.07s1.07 5.21 2.93 7.07c1.86 1.86 4.441 2.93 7.07 2.93s5.21-1.07 7.07-2.93zm0 0" fill="#bc0d05" data-original="#000000"></path></g></svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Quote Slider'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/quote-slider-full-width.webp',
						),
					),
				),
			)
		);
		// Register a block - Hero
		acf_register_block(
			array(
				'name'            => 'hero',
				'title'           => __( 'Hero', 'databook_td' ),
				'description'     => __( 'Hero.', 'databook_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g data-name="Layer 6"><path d="M61 2H3a1 1 0 0 0-1 1v58a1 1 0 0 0 1 1h58a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1Zm-1 58H4V4h56Z" fill="#bc0d05" data-original="#000000" class=""></path><path d="M57 6H31a1 1 0 0 0-1 1v22a1 1 0 0 0 1 1h26a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1ZM32.71 28 40 15.04l5.35 9.51.01.02L47.29 28Zm16.87 0-2.23-3.97L50 19.86 55.18 28ZM56 25.57l-5.16-8.11a1 1 0 0 0-1.68 0l-2.92 4.59-5.37-9.54a1.037 1.037 0 0 0-1.74 0L32 25.18V8h24ZM57 32H7a1 1 0 0 0-1 1v24a1 1 0 0 0 1 1h50a1 1 0 0 0 1-1V33a1 1 0 0 0-1-1ZM17.78 56 27 40.92 36.22 56Zm20.78 0-3.12-5.1L39 45.76 46.09 56ZM56 56h-7.48l-8.7-12.57a1 1 0 0 0-1.64 0l-3.88 5.6-6.45-10.55a1.028 1.028 0 0 0-1.7 0L15.44 56H8V34h48Z" fill="#bc0d05" data-original="#000000" class=""></path><path d="M47 16a3 3 0 1 0-3-3 3 3 0 0 0 3 3Zm0-4a1 1 0 1 1-1 1 1 1 0 0 1 1-1ZM34 42a3 3 0 1 0-3-3 3 3 0 0 0 3 3Zm0-4a1 1 0 1 1-1 1 1 1 0 0 1 1-1ZM13 9h14a1 1 0 0 0 0-2H13a1 1 0 0 0 0 2ZM7 13h20a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2ZM7 17h20a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2ZM7 21h20a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2ZM7 25h20a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2ZM7 29h20a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2ZM7 9h2a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2Z" fill="#bc0d05" data-original="#000000" class=""></path></g></g></svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Hero'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/solutions-hero.webp',
						),
					),
				),
			)
		);
		// Register a block - Icon Grid
		acf_register_block(
			array(
				'name'            => 'icon-grid',
				'title'           => __( 'Icon Grid', 'databook_td' ),
				'description'     => __( 'Icon Grid.', 'databook_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M187.628 0H43.707C19.607 0 0 19.607 0 43.707v143.921c0 24.1 19.607 43.707 43.707 43.707h143.921c24.1 0 43.707-19.607 43.707-43.707V43.707c0-24.1-19.607-43.707-43.707-43.707zM468.293 0H324.372c-24.1 0-43.707 19.607-43.707 43.707v143.921c0 24.1 19.607 43.707 43.707 43.707h143.921c24.1 0 43.707-19.607 43.707-43.707V43.707C512 19.607 492.393 0 468.293 0zM187.628 280.665H43.707C19.607 280.665 0 300.272 0 324.372v143.921C0 492.393 19.607 512 43.707 512h143.921c24.1 0 43.707-19.607 43.707-43.707V324.372c0-24.1-19.607-43.707-43.707-43.707zM468.293 280.665H324.372c-24.1 0-43.707 19.607-43.707 43.707v143.921c0 24.1 19.607 43.707 43.707 43.707h143.921c24.1 0 43.707-19.607 43.707-43.707V324.372c0-24.1-19.607-43.707-43.707-43.707z" fill="#bc0d05" data-original="#000000" class=""></path></g></svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Icon Grid'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/icon-grid-description.webp',
						),
					),
				),
			)
		);

		// Register a block - Video
		acf_register_block(
			array(
				'name'            => 'video',
				'title'           => __( 'Video', 'databook_td' ),
				'description'     => __( 'Video.', 'databook_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 682.667 682.667" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><defs><clipPath id="a" clipPathUnits="userSpaceOnUse"><path d="M0 512h512V0H0Z" fill="#bc0d05" data-original="#000000"></path></clipPath></defs><g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)"><path d="M0 0h-161.134c-22.091 0-40-17.909-40-40v-332c0-22.091 17.909-40 40-40h412c22.092 0 40 17.909 40 40v332c0 22.091-17.908 40-40 40H90" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(211.134 462)" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path><path d="M0 0h492" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(10 170)" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path><path d="M0 0c0-11.046-8.954-20-20-20s-20 8.954-20 20 8.954 20 20 20S0 11.046 0 0Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(119.924 110)" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path><path d="M0 0h249.086" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(182.99 110)" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path><path d="m0 0 52.52-30.323c12.347-7.128 12.347-24.949 0-32.078L0-92.723c-12.347-7.129-27.78 1.782-27.78 16.039v60.645C-27.78-1.782-12.347 7.129 0 0Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(242.665 362.362)" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path><path d="M0 0v0" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(256.127 462)" fill="none" stroke="#bc0d05" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g></g></svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Video'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/video-block.webp',
						),
					),
				),
			)
		);

		// Register a block - Text
		acf_register_block(
			array(
				'name'            => 'text',
				'title'           => __( 'Text', 'databook_td' ),
				'description'     => __( 'Text.', 'databook_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M19.5 24h-15A2.503 2.503 0 0 1 2 21.5v-19C2 1.122 3.122 0 4.5 0h15C20.878 0 22 1.122 22 2.5v19c0 1.378-1.122 2.5-2.5 2.5zM4.5 1C3.673 1 3 1.673 3 2.5v19c0 .827.673 1.5 1.5 1.5h15c.827 0 1.5-.673 1.5-1.5v-19c0-.827-.673-1.5-1.5-1.5z" fill="#bc0d05" data-original="#000000"></path><path d="M11.5 10a.5.5 0 0 1-.5-.5V9H6v.5a.5.5 0 0 1-1 0v-1a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5z" fill="#bc0d05" data-original="#000000"></path><path d="M8.5 15a.5.5 0 0 1-.5-.5v-6a.5.5 0 0 1 1 0v6a.5.5 0 0 1-.5.5z" fill="#bc0d05" data-original="#000000"></path><path d="M9.5 15h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 0 1zM18.5 9h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1zM18.5 12h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1zM18.5 15h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1zM18.5 18h-13a.5.5 0 0 1 0-1h13a.5.5 0 0 1 0 1zM18.5 21h-13a.5.5 0 0 1 0-1h13a.5.5 0 0 1 0 1z" fill="#bc0d05" data-original="#000000"></path></g></svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Text'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
						),
					),
				),
			)
		);

		// Register a block - Carousel
		acf_register_block(
			array(
				'name'            => 'carousel',
				'title'           => __( 'Carousel', 'databook_td' ),
				'description'     => __( 'Carousel.', 'databook_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 508 508" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M254 376c-22.056 0-40 17.944-40 40s17.944 40 40 40 40-17.944 40-40-17.944-40-40-40zm0 60c-11.028 0-20-8.972-20-20s8.972-20 20-20 20 8.972 20 20-8.972 20-20 20zm-140-54c-18.748 0-34 15.252-34 34s15.252 34 34 34 34-15.252 34-34-15.252-34-34-34zm0 48c-7.72 0-14-6.28-14-14s6.28-14 14-14 14 6.28 14 14-6.28 14-14 14zm280-48c-18.748 0-34 15.252-34 34s15.252 34 34 34 34-15.252 34-34-15.252-34-34-34zm0 48c-7.72 0-14-6.28-14-14s6.28-14 14-14 14 6.28 14 14-6.28 14-14 14zm-60-230c29.776 0 54-24.224 54-54s-24.224-54-54-54-54 24.224-54 54 24.224 54 54 54zm0-88c18.748 0 34 15.252 34 34s-15.252 34-34 34-34-15.252-34-34 15.252-34 34-34zm164 81.07c5.51 0 10 4.49 10 10s-4.49 10-10 10-10-4.49-10-10 4.49-10 10-10zm-488 20c-5.51 0-10-4.48-10-10 0-5.51 4.49-10 10-10s10 4.49 10 10c0 5.52-4.49 10-10 10zM478 81.642h-50V62c0-5.523-4.477-10-10-10H90c-5.523 0-10 4.477-10 10v20H30C13.431 82 0 95.431 0 112v45.723c0 5.318 4 9.973 9.306 10.334 5.822.397 10.694-4.236 10.694-9.976V112c.01-5.5 4.5-9.99 10-10h50v206H30c-5.5-.01-9.99-4.5-10-10v-49.93c0-5.74-4.872-10.373-10.694-9.976C4 238.455 0 243.11 0 248.428V298c0 16.569 13.431 30 30 30h50v20c0 5.523 4.477 10 10 10h328c5.523 0 10-4.477 10-10v-20.358h50c16.569 0 30-13.431 30-30V248.07c0-5.318-4-9.973-9.306-10.334-5.822-.396-10.694 4.237-10.694 9.976v49.93c-.01 5.5-4.5 9.99-10 10h-50v-206h50c5.5.01 9.99 4.5 10 10v46.081c0 5.74 4.872 10.373 10.694 9.976 5.306-.361 9.306-5.016 9.306-10.334v-45.723c0-16.569-13.431-30-30-30zM408 72v262.172L274.774 209.634c-16.977-15.87-43.573-15.869-60.549 0l-29.901 27.951-73.111-91.388a27.078 27.078 0 0 0-11.214-8.295V72zm-308 92.195 99.601 124.5c8.322 10.402 23.939-2.092 15.617-12.494l-18.362-22.953 31.028-29.004c9.317-8.71 23.916-8.71 33.233 0L382.807 338H100z" fill="#bc0d05" data-original="#000000" class=""></path></g></svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Carousel'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/carousel.webp',
						),
					),
				),
			)
		);

		// Register a block - Stats
		acf_register_block(
			array(
				'name'            => 'stats',
				'title'           => __( 'Stats', 'databook_td' ),
				'description'     => __( 'Stats.', 'databook_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 682.667 682.667" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><defs><clipPath id="b" clipPathUnits="userSpaceOnUse"><path d="M0 512h512V0H0Z" fill="#bc0d05" data-original="#000000" class=""></path></clipPath></defs><mask id="a"><rect width="100%" height="100%" fill="#ffffff" data-original="#ffffff"></rect></mask><g mask="url(#a)"><g clip-path="url(#b)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)"><path d="m0 0-54.883 34.902L-109.766 0v148.815c0 12.836 10.406 23.242 23.242 23.242h63.283C-10.405 172.057 0 161.651 0 148.815Z" style="stroke-width:40;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(129.766 120)" fill="none" stroke="#bc0d05" stroke-width="40" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path><path d="m0 0-54.883 34.902L-109.766 0v198.815c0 12.836 10.406 23.242 23.242 23.242h63.283C-10.405 222.057 0 211.651 0 198.815Z" style="stroke-width:40;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(310.883 70)" fill="none" stroke="#bc0d05" stroke-width="40" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path><path d="M0 0h24.798v-116.018" style="stroke-width:40;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(50.085 492)" fill="none" stroke="#bc0d05" stroke-width="40" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path><path d="M0 0s-56.447-.709-59.121.183c-2.673.89 4.287 5.598 41.296 58.476 6.911 9.875 10.716 18.207 12.334 25.187l.574 4.488c0 16.395-13.291 29.687-29.687 29.687-14.427 0-26.45-10.292-29.129-23.933" style="stroke-width:40;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(287.867 373.98)" fill="none" stroke="#bc0d05" stroke-width="40" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path><path d="M0 0c2.679 13.642 14.703 23.933 29.129 23.933 16.396 0 29.687-13.291 29.687-29.687 0-16.395-13.291-29.686-29.687-29.686" style="stroke-width:40;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(407.988 468.067)" fill="none" stroke="#bc0d05" stroke-width="40" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path><path d="M0 0c16.396 0 29.687-13.292 29.687-29.687 0-16.396-13.291-29.687-29.687-29.687-14.99 0-27.386 11.11-29.4 25.546a29.926 29.926 0 0 0-.287 4.141" style="stroke-width:40;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(437.117 432.627)" fill="none" stroke="#bc0d05" stroke-width="40" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path><path d="M0 0v148.815c0 12.836-10.405 23.242-23.241 23.242h-63.283c-12.836 0-23.242-10.406-23.242-23.242V-100l54.883 34.902L-1-99.364" style="stroke-width:40;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(492 120)" fill="none" stroke="#bc0d05" stroke-width="40" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g></g></g></svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Stats'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/stats-this-shows-2-style-variations.webp',
						),
					),
				),
			)
		);
		
		
		//Solutions Hero block
		acf_register_block(
            array(
                'name'            => 'solutions-hero',
                'title'           => __( 'Solutions Hero', 'databook_td'  ),
                'description'     => __( 'Solutions Hero.', 'databook_td'  ),
                'render_callback' => 'glide_acf_block_callback',
                'category'        => 'glide-blocks',
                'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g data-name="Layer 6"><path d="M61 2H3a1 1 0 0 0-1 1v58a1 1 0 0 0 1 1h58a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1Zm-1 58H4V4h56Z" fill="#bc0d05" data-original="#000000" class=""></path><path d="M57 6H31a1 1 0 0 0-1 1v22a1 1 0 0 0 1 1h26a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1ZM32.71 28 40 15.04l5.35 9.51.01.02L47.29 28Zm16.87 0-2.23-3.97L50 19.86 55.18 28ZM56 25.57l-5.16-8.11a1 1 0 0 0-1.68 0l-2.92 4.59-5.37-9.54a1.037 1.037 0 0 0-1.74 0L32 25.18V8h24ZM57 32H7a1 1 0 0 0-1 1v24a1 1 0 0 0 1 1h50a1 1 0 0 0 1-1V33a1 1 0 0 0-1-1ZM17.78 56 27 40.92 36.22 56Zm20.78 0-3.12-5.1L39 45.76 46.09 56ZM56 56h-7.48l-8.7-12.57a1 1 0 0 0-1.64 0l-3.88 5.6-6.45-10.55a1.028 1.028 0 0 0-1.7 0L15.44 56H8V34h48Z" fill="#bc0d05" data-original="#000000" class=""></path><path d="M47 16a3 3 0 1 0-3-3 3 3 0 0 0 3 3Zm0-4a1 1 0 1 1-1 1 1 1 0 0 1 1-1ZM34 42a3 3 0 1 0-3-3 3 3 0 0 0 3 3Zm0-4a1 1 0 1 1-1 1 1 1 0 0 1 1-1ZM13 9h14a1 1 0 0 0 0-2H13a1 1 0 0 0 0 2ZM7 13h20a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2ZM7 17h20a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2ZM7 21h20a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2ZM7 25h20a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2ZM7 29h20a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2ZM7 9h2a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2Z" fill="#bc0d05" data-original="#000000" class=""></path></g></g></svg>',
                'mode'            => 'edit',
                'keywords'        => array( 'Solutions Hero', 'solutions-hero'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/solutions-hero-preview.webp',
						),
					),
				),
            )
        );

        //Image Grid block
		acf_register_block(
            array(
                'name'            => 'image-grid',
                'title'           => __( 'Image Grid', 'databook_td'  ),
                'description'     => __( 'Image Grid.', 'databook_td'  ),
                'render_callback' => 'glide_acf_block_callback',
                'category'        => 'glide-blocks',
                'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g fill="#000" fill-rule="evenodd" clip-rule="evenodd"><path d="M3 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zm1 11v-1.123L5.933 9.68 8.855 13zm9 0h-1.481l-1.687-1.917L13 7.483zM6.684 7.506 8.5 9.57 13 4.456V4H4v4.85l1.183-1.344a1 1 0 0 1 1.501 0zM3 17a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1V18a1 1 0 0 0-1-1zm1 11v-1.123l1.933-2.197L8.855 28zm9 0h-1.481l-1.687-1.917 3.168-3.6zm-6.316-5.494L8.5 24.57l4.5-5.114V19H4v4.85l1.183-1.344a1 1 0 0 1 1.501 0zM17 3a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1H18a1 1 0 0 1-1-1zm2 8.877V13h4.855l-2.922-3.32zM26.519 13H28V7.483l-3.168 3.6zM23.5 9.57l-1.816-2.064a1 1 0 0 0-1.501 0L19 8.85V4h9v.456zM18 17a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1V18a1 1 0 0 0-1-1zm1 11v-1.123l1.933-2.197L23.855 28zm9 0h-1.481l-1.687-1.917 3.168-3.6zm-6.316-5.494L23.5 24.57l4.5-5.114V19h-9v4.85l1.183-1.344a1 1 0 0 1 1.501 0z" fill="#bc0d05" data-original="#000000" class=""></path></g></g></svg>',
                'mode'            => 'edit',
                'keywords'        => array( 'Image Grid', 'image-grid'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/image-grid.webp',
						),
					),
				),
            )
        );

		//Interactive Embed block
		acf_register_block(
            array(
                'name'            => 'interactive-embed',
                'title'           => __( 'Interactive Embed', 'databook_td'  ),
                'description'     => __( 'Interactive Embed.', 'databook_td'  ),
                'render_callback' => 'glide_acf_block_callback',
                'category'        => 'glide-blocks',
                'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M19.5 24h-15A2.503 2.503 0 0 1 2 21.5v-19C2 1.122 3.122 0 4.5 0h15C20.878 0 22 1.122 22 2.5v19c0 1.378-1.122 2.5-2.5 2.5zM4.5 1C3.673 1 3 1.673 3 2.5v19c0 .827.673 1.5 1.5 1.5h15c.827 0 1.5-.673 1.5-1.5v-19c0-.827-.673-1.5-1.5-1.5z" fill="#bc0d05" data-original="#000000"></path><path d="M11.5 10a.5.5 0 0 1-.5-.5V9H6v.5a.5.5 0 0 1-1 0v-1a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5z" fill="#bc0d05" data-original="#000000"></path><path d="M8.5 15a.5.5 0 0 1-.5-.5v-6a.5.5 0 0 1 1 0v6a.5.5 0 0 1-.5.5z" fill="#bc0d05" data-original="#000000"></path><path d="M9.5 15h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 0 1zM18.5 9h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1zM18.5 12h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1zM18.5 15h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1zM18.5 18h-13a.5.5 0 0 1 0-1h13a.5.5 0 0 1 0 1zM18.5 21h-13a.5.5 0 0 1 0-1h13a.5.5 0 0 1 0 1z" fill="#bc0d05" data-original="#000000"></path></g></svg>',
                'mode'            => 'edit',
                'keywords'        => array( 'Interactive Embed', 'interactive-embed'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/interactive-embed-preview.webp',
						),
					),
				),
            )
        );
		
		//Contact Grid block
		acf_register_block(
            array(
                'name'            => 'contact-grid',
                'title'           => __( 'Contact Grid', 'databook_td'  ),
                'description'     => __( 'Contact Grid.', 'databook_td'  ),
                'render_callback' => 'glide_acf_block_callback',
                'category'        => 'glide-blocks',
                'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M187.628 0H43.707C19.607 0 0 19.607 0 43.707v143.921c0 24.1 19.607 43.707 43.707 43.707h143.921c24.1 0 43.707-19.607 43.707-43.707V43.707c0-24.1-19.607-43.707-43.707-43.707zM468.293 0H324.372c-24.1 0-43.707 19.607-43.707 43.707v143.921c0 24.1 19.607 43.707 43.707 43.707h143.921c24.1 0 43.707-19.607 43.707-43.707V43.707C512 19.607 492.393 0 468.293 0zM187.628 280.665H43.707C19.607 280.665 0 300.272 0 324.372v143.921C0 492.393 19.607 512 43.707 512h143.921c24.1 0 43.707-19.607 43.707-43.707V324.372c0-24.1-19.607-43.707-43.707-43.707zM468.293 280.665H324.372c-24.1 0-43.707 19.607-43.707 43.707v143.921c0 24.1 19.607 43.707 43.707 43.707h143.921c24.1 0 43.707-19.607 43.707-43.707V324.372c0-24.1-19.607-43.707-43.707-43.707z" fill="#bc0d05" data-original="#000000" class=""></path></g></svg>',
                'mode'            => 'edit',
                'keywords'        => array( 'Contact Grid', 'contact-grid'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/locations-preview.webp',
						),
					),
				),
            )
        );
		
		//Logo Grid block
		acf_register_block(
            array(
                'name'            => 'logo-grid',
                'title'           => __( 'Logo Grid', 'databook_td'  ),
                'description'     => __( 'Logo Grid.', 'databook_td'  ),
                'render_callback' => 'glide_acf_block_callback',
                'category'        => 'glide-blocks',
                'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M187.628 0H43.707C19.607 0 0 19.607 0 43.707v143.921c0 24.1 19.607 43.707 43.707 43.707h143.921c24.1 0 43.707-19.607 43.707-43.707V43.707c0-24.1-19.607-43.707-43.707-43.707zM468.293 0H324.372c-24.1 0-43.707 19.607-43.707 43.707v143.921c0 24.1 19.607 43.707 43.707 43.707h143.921c24.1 0 43.707-19.607 43.707-43.707V43.707C512 19.607 492.393 0 468.293 0zM187.628 280.665H43.707C19.607 280.665 0 300.272 0 324.372v143.921C0 492.393 19.607 512 43.707 512h143.921c24.1 0 43.707-19.607 43.707-43.707V324.372c0-24.1-19.607-43.707-43.707-43.707zM468.293 280.665H324.372c-24.1 0-43.707 19.607-43.707 43.707v143.921c0 24.1 19.607 43.707 43.707 43.707h143.921c24.1 0 43.707-19.607 43.707-43.707V324.372c0-24.1-19.607-43.707-43.707-43.707z" fill="#bc0d05" data-original="#000000" class=""></path></g></svg>',
                'mode'            => 'edit',
                'keywords'        => array( 'Logo Grid', 'logo-grid'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/logo-grid.webp',
						),
					),
				),
            )
        );

        //Tile CTAs block
		acf_register_block(
            array(
                'name'            => 'tile-ctas',
                'title'           => __( 'Tile CTAs', 'databook_td'  ),
                'description'     => __( 'Tile CTAs.', 'databook_td'  ),
                'render_callback' => 'glide_acf_block_callback',
                'category'        => 'glide-blocks',
                'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M286 0H15C6.716 0 0 6.716 0 15v46h286zM497 0h-31v61h46V15c0-8.284-6.716-15-15-15zM316 0h45v61h-45zM391 0h45v61h-45zM231 200.541V256h36.973zM281 166h-36.973L281 221.459zM141 166h-36.973L141 221.459zM91 200.541V256h36.973zM421 166h-36.973L421 221.459zM371 200.541V256h36.973z" fill="#bc0d05" data-original="#000000" class=""></path><path d="M0 497c0 8.284 6.716 15 15 15h482c8.284 0 15-6.716 15-15V91H0zm341-346c.035-.1-.163-11.086 10.658-14.356 3.605-1.091 1.697-.644 84.342-.644 8.284 0 15 6.716 15 15v120c-.033.1.214 10.772-10.314 14.243-3.297 1.084-.054.758-84.686.757-8.284 0-15-6.716-15-15zm15 165h80c8.284 0 15 6.716 15 15s-6.716 15-15 15h-80c-8.284 0-15-6.716-15-15s6.716-15 15-15zm0 60h80c8.284 0 15 6.716 15 15s-6.716 15-15 15h-80c-8.284 0-15-6.716-15-15s6.716-15 15-15zm0 60h80c8.284 0 15 6.716 15 15s-6.716 15-15 15h-80c-8.284 0-15-6.716-15-15s6.716-15 15-15zM201 151c.037-.1-.103-11.708 11.408-14.549 2.772-.682-3.856-.451 83.592-.451 8.284 0 15 6.716 15 15l-.001 120.021c-.02 8.318-6.799 14.981-14.985 14.981L216 286.001c-8.284 0-15-6.716-15-15zm15 165h80c8.284 0 15 6.716 15 15s-6.716 15-15 15h-80c-8.284 0-15-6.716-15-15s6.716-15 15-15zm0 60h80c8.284 0 15 6.716 15 15s-6.716 15-15 15h-80c-8.284 0-15-6.716-15-15s6.716-15 15-15zm0 60h80c8.284 0 15 6.716 15 15s-6.716 15-15 15h-80c-8.284 0-15-6.716-15-15s6.716-15 15-15zM61 151c.224-8.853 7.017-14.836 14.696-14.985 2.597-.053 3.803-.093 4.175-.122-10.436-.066 1.491-.118 0 0 7.817.05 28.18.107 76.129.107 8.284 0 15 6.716 15 15l-.001 120.021c-.019 7.63-5.746 14.017-13.292 14.876-1.44.164 5.097.105-81.707.104-8.284 0-15-6.716-15-15zm15 165h80c8.284 0 15 6.716 15 15s-6.716 15-15 15H76c-8.284 0-15-6.716-15-15s6.716-15 15-15zm0 60h80c8.284 0 15 6.716 15 15s-6.716 15-15 15H76c-8.284 0-15-6.716-15-15s6.716-15 15-15zm0 60h80c8.284 0 15 6.716 15 15s-6.716 15-15 15H76c-8.284 0-15-6.716-15-15s6.716-15 15-15z" fill="#bc0d05" data-original="#000000" class=""></path></g></svg>',
                'mode'            => 'edit',
                'keywords'        => array( 'Tile CTAs', 'tile-ctas'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/tile-ctas.webp',
						),
					),
				),
            )
        );

        //Feature Graphic block
		acf_register_block(
            array(
                'name'            => 'feature-graphic',
                'title'           => __( 'Feature Graphic', 'databook_td'  ),
                'description'     => __( 'Feature Graphic.', 'databook_td'  ),
                'render_callback' => 'glide_acf_block_callback',
                'category'        => 'glide-blocks',
                'icon'            => '<svg clip-rule="evenodd" fill-rule="evenodd" height="512" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg"><g fill="rgb(0,0,0)"><path d="m24.341 27.01h-2c-.276 0-.5.224-.5.5s.224.5.5.5h2c.276 0 .5-.224.5-.5s-.224-.5-.5-.5zm-4 0h-2c-.276 0-.5.224-.5.5s.224.5.5.5h2c.276 0 .5-.224.5-.5s-.224-.5-.5-.5zm-3.962-.005c-.357-.027-.693-.18-.948-.435-.103-.103-.19-.221-.259-.347-.131-.243-.435-.334-.677-.202-.243.131-.334.435-.203.677.115.211.259.407.432.579.424.425.986.681 1.58.725.275.021.515-.185.536-.461.021-.275-.186-.515-.461-.536zm10.758-1.138c-.064.264-.2.508-.396.703-.163.163-.36.285-.574.358-.261.09-.4.375-.311.636.09.261.375.4.636.31.356-.122.684-.325.956-.597.326-.326.553-.732.661-1.172.065-.268-.099-.539-.367-.605s-.539.099-.605.367zm-12.145-1.366c0-.635 0-1.319 0-2 0-.276-.224-.5-.5-.5s-.5.224-.5.5v2c0 .276.224.5.5.5s.5-.224.5-.5zm12.188-2.511v2c0 .276.224.5.5.5s.5-.224.5-.5v-2c0-.276-.224-.5-.5-.5s-.5.224-.5.5zm-12.188-1.489v-1.798c0-.051.002-.101.007-.151.028-.275-.172-.521-.446-.548-.275-.028-.521.172-.548.446-.009.084-.013.168-.013.252v1.799c0 .276.224.5.5.5s.5-.224.5-.5zm12.188-2.511v2c0 .276.224.5.5.5s.5-.224.5-.5c0-.691 0-1.368 0-2 0-.276-.224-.5-.5-.5s-.5.224-.5.5zm-10.77-2.912.002-.003c.139-.239.446-.319.684-.18.239.139.319.445.18.684l-.012.019-.005.009c-.375.615-.834 1.172-1.369 1.646-.207.184-.523.165-.706-.042-.183-.206-.164-.523.042-.706.461-.408.856-.889 1.179-1.418zm9.862-.135c.174.074.333.181.469.317.222.223.368.508.419.814.045.272.303.456.575.411.273-.045.457-.303.411-.576-.085-.51-.327-.985-.698-1.356-.227-.227-.492-.405-.781-.529-.254-.109-.548.008-.657.262-.109.253.008.548.262.657zm-7.766-.094.05-.001c.53-.008 1.202-.014 1.938-.018.276-.001.499-.227.497-.503-.001-.276-.226-.498-.502-.497-.741.004-1.416.01-1.949.018-.016 0-.039.001-.063.001-.276.008-.493.239-.485.514.008.276.238.494.514.486zm3.986-.026c.682-.001 1.364-.002 2-.002.275 0 .499-.224.499-.5s-.224-.5-.5-.5c-.636 0-1.318.001-2.001.002-.276.001-.499.225-.499.501.001.276.225.5.501.499z" fill="#bc0d05"/><path d="m10.729 3.99c-4.219 0-7.644 3.426-7.644 7.644 0 4.219 3.425 7.644 7.644 7.644 4.218 0 7.644-3.425 7.644-7.644 0-4.218-3.426-7.644-7.644-7.644zm0 1c3.667 0 6.644 2.977 6.644 6.644s-2.977 6.644-6.644 6.644-6.644-2.977-6.644-6.644 2.977-6.644 6.644-6.644z" fill="#bc0d05"/></g></svg>',
                'mode'            => 'edit',
                'keywords'        => array( 'Feature Graphic', 'feature-graphic'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/tile-ctas.webp',
						),
					),
				),
            )
        );

		 //Single Quote block
		 acf_register_block(
            array(
                'name'            => 'single-quote',
                'title'           => __( 'Single Quote', 'databook_td'  ),
                'description'     => __( 'Single Quote.', 'databook_td'  ),
                'render_callback' => 'glide_acf_block_callback',
                'category'        => 'glide-blocks',
                'icon'            => '<svg id="Layer_1" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m8 6h3v5c0 2.206-1.794 4-4 4v-2c1.103 0 2-.897 2-2h-3v-3c0-1.103.897-2 2-2zm5 2v3h3c0 1.103-.897 2-2 2v2c2.206 0 4-1.794 4-4v-5h-3c-1.103 0-2 .897-2 2zm11-5v17h-6.853l-3.847 3.18c-.361.322-.824.484-1.292.484-.476 0-.955-.168-1.337-.508l-3.749-3.156h-6.922v-17c0-1.654 1.346-3 3-3h18c1.654 0 3 1.346 3 3zm-2 0c0-.552-.448-1-1-1h-18c-.552 0-1 .448-1 1v15h5.653l4.327 3.645 4.448-3.645h5.571v-15z" fill="#bc0d05"/></svg>',
                'mode'            => 'edit',
                'keywords'        => array( 'Single Quote', 'single-quote'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/single-quote.webp',
						),
					),
				),
            )
        );

		// Register a block - Quote Fullwidth Slider
		acf_register_block(
			array(
				'name'            => 'quote-fullwidth-slider',
				'title'           => __( 'Quote Fullwidth Slider', 'databook_td' ),
				'description'     => __( 'Quote Fullwidth Slider.', 'databook_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M478 23.5h-21.668C451.898 9.879 439.086 0 424 0H88C72.914 0 60.102 9.879 55.668 23.5H34c-18.746 0-34 15.254-34 34v185c0 18.746 15.254 34 34 34h21.668C60.102 290.121 72.914 300 88 300h121.332c5.523 0 10-4.477 10-10s-4.477-10-10-10H88c-7.719 0-14-6.281-14-14V34c0-7.719 6.281-14 14-14h336c7.719 0 14 6.281 14 14v232c0 7.719-6.281 14-14 14H303.668c-5.523 0-10 4.477-10 10s4.477 10 10 10H424c15.086 0 27.898-9.879 32.332-23.5H478c18.746 0 34-15.254 34-34v-185c0-18.746-15.254-34-34-34zm-458 219v-185c0-7.719 6.281-14 14-14h20v213H34c-7.719 0-14-6.281-14-14zm472 0c0 7.719-6.281 14-14 14h-20v-213h20c7.719 0 14 6.281 14 14zm0 0" fill="#bc0d05" data-original="#000000"></path><path d="M383.492 178.637c1.953 1.953 4.512 2.925 7.07 2.925s5.118-.972 7.07-2.925l21.438-21.438c3.907-3.906 3.907-10.238 0-14.144l-21.437-21.438c-3.906-3.902-10.235-3.902-14.14 0-3.907 3.906-3.907 10.238 0 14.145l14.362 14.363-14.363 14.367c-3.906 3.906-3.906 10.238 0 14.145zM128.508 121.617c-3.906-3.902-10.235-3.902-14.145 0L92.93 143.055c-3.907 3.906-3.907 10.238 0 14.144l21.433 21.438c1.953 1.953 4.516 2.93 7.075 2.93s5.117-.977 7.07-2.93c3.902-3.907 3.902-10.239 0-14.145L114.14 150.13l14.367-14.367c3.906-3.907 3.906-10.239 0-14.145zM131.379 338c-19.852 0-36 16.148-36 36s16.148 36 36 36c19.851 0 36-16.148 36-36s-16.149-36-36-36zm0 52c-8.82 0-16-7.18-16-16s7.18-16 16-16c8.824 0 16 7.18 16 16s-7.176 16-16 16zM256 338c-19.852 0-36 16.148-36 36s16.148 36 36 36 36-16.148 36-36-16.148-36-36-36zm0 52c-8.82 0-16-7.18-16-16s7.18-16 16-16 16 7.18 16 16-7.18 16-16 16zM380.621 338c-19.851 0-36 16.148-36 36s16.149 36 36 36c19.852 0 36-16.148 36-36s-16.148-36-36-36zm0 52c-8.824 0-16-7.18-16-16s7.176-16 16-16c8.82 0 16 7.18 16 16s-7.18 16-16 16zM263.07 297.07c1.86-1.86 2.93-4.441 2.93-7.07s-1.07-5.21-2.93-7.07A10.08 10.08 0 0 0 256 280c-2.64 0-5.21 1.07-7.07 2.93-1.86 1.86-2.93 4.441-2.93 7.07s1.07 5.21 2.93 7.07c1.86 1.86 4.441 2.93 7.07 2.93s5.21-1.07 7.07-2.93zm0 0" fill="#bc0d05" data-original="#000000"></path></g></svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Quote Fullwidth Slider'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/quote-slider-full-width.webp',
						),
					),
				),
			)
		);

		// Register a block - Conversion
		acf_register_block(
			array(
				'name'            => 'conversion',
				'title'           => __( 'Conversion', 'databook_td' ),
				'description'     => __( 'Conversion.', 'databook_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="512" height="512">
				<g id="Communication">
				  <path d="M53.14648,5.23828H26.72119A5.64018,5.64018,0,0,0,21,10.78027v13.458H10.85352A5.71082,5.71082,0,0,0,5,29.78027v16.916a5.71082,5.71082,0,0,0,5.85352,5.542H11v5.3169a1.20428,1.20428,0,0,0,1.95752.94336l7.85693-6.26026h16.396A5.70721,5.70721,0,0,0,43,46.63086V33.23828h.18555l7.855,6.25879A1.206,1.206,0,0,0,53,38.55518v-5.3169h.14648A5.71082,5.71082,0,0,0,59,27.69629v-16.916A5.71082,5.71082,0,0,0,53.14648,5.23828ZM41,46.63086a3.70611,3.70611,0,0,1-3.78955,3.60742H20.59229a1.3655,1.3655,0,0,0-.85059.29736L13,55.90723V51.56689a1.33929,1.33929,0,0,0-1.34668-1.32861h-.7998A3.71169,3.71169,0,0,1,7,46.69629v-16.916a3.71169,3.71169,0,0,1,3.85352-3.542H21v1.458a5.64018,5.64018,0,0,0,5.72119,5.542H41ZM57,27.69629a3.71169,3.71169,0,0,1-3.85352,3.542h-.7998A1.33929,1.33929,0,0,0,51,32.56689v4.34034l-6.73877-5.36914a1.36754,1.36754,0,0,0-.85352-.29981H26.72119A3.63906,3.63906,0,0,1,23,27.69629v-16.916a3.63906,3.63906,0,0,1,3.72119-3.542H53.14648A3.71169,3.71169,0,0,1,57,10.78027Z" fill="#bc0d05"/>
				  <circle cx="17" cy="38.23829" r="1.5" fill="#bc0d05"/>
				  <circle cx="24" cy="38.23829" r="1.5" fill="#bc0d05"/>
				  <circle cx="31" cy="38.23829" r="1.5" fill="#bc0d05"/>
				  <path d="M38,14.23828H30a1,1,0,0,1,0-2h8a1,1,0,0,1,0,2Z" fill="#bc0d05"/>
				  <path d="M50,20.23828H30a1,1,0,0,1,0-2H50a1,1,0,0,1,0,2Z" fill="#bc0d05"/>
				  <path d="M50,26.23828H46.1875a1,1,0,0,1,0-2H50a1,1,0,0,1,0,2Z" fill="#bc0d05"/>
				  <path d="M42,26.23828H30a1,1,0,0,1,0-2H42a1,1,0,0,1,0,2Z" fill="#bc0d05"/>
				</g>
			  </svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Conversion'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/conversion.webp',
						),
					),
				),
			)
		);

		// Register a block - Form Alongside Text
		acf_register_block(
			array(
				'name'            => 'form-alongside-text',
				'title'           => __( 'form alongside text', 'databook_td' ),
				'description'     => __( 'Form Alongside Text.', 'databook_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30.551px" height="30.551px" viewBox="0 0 30.551 30.551" style="enable-background:new 0 0 30.551 30.551" xml:space="preserve"><g><path d="M3.568,0.738v27.168l18.17,0.039V5.425l-4.7-4.687H3.568z M20.587,26.789L20.587,26.789L4.723,26.755V1.893h11.104v5.213 h4.76V26.789z M20.586,5.952H16.98V2.31l3.605,3.594V5.952z M6.83,9.125h11.958v1.01H6.83V9.125z M6.83,11.072h11.958v1.008H6.83 V11.072z M14.359,6.265H6.807V5.256h7.552V6.265z M14.359,8.213H6.807V7.204h7.552V8.213z M6.784,13.163h12.004v1.009H6.784V13.163 z M6.784,15.11h12.004v1.008H6.784V15.11z M6.784,16.948h7.624v1.01H6.784V16.948z M17.846,28.966h1.151v1.585L0.828,30.514V3.345 h1.864v1.154H1.981v24.862l15.865,0.035V28.966z M29.282,17.536L29.244,1.123l-0.667,0.002L28.573,0l-1.94,0.004l0.004,1.126 l-0.648,0.002V1.131l-1.456,0.003L23.85,1.137l0.605,9.304l0.584-0.002l-0.206-8.036l1.028-0.002l0.035,15.133 c-0.275,0.042-0.489,0.251-0.488,0.515c0,0.264,0.214,0.473,0.492,0.516v0.019l2.134-0.005l1.103-0.002c0,0,0-0.001,0.002,0 l0.146-0.001v-0.027c0.25-0.062,0.438-0.26,0.438-0.506S29.533,17.598,29.282,17.536z M26.475,17.516l-0.039-15.81L28.67,1.7 l0.037,15.81L26.475,17.516z M27.928,2.935l0.014,5.544l-1.073,0.002l-0.013-5.544L27.928,2.935z M26.609,24.965l0.171,0.01 l0.243,0.987h0.277l0.176,1.374h0.354l0.109-1.375l0.309-0.001l0.17-0.897l0.252,0.015l0.615-6.03l-3.385,0.01L26.609,24.965z M28.154,24.471l-1.032-0.056l-0.571-4.788l2.1-0.006L28.154,24.471z" fill="#bc0d05"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Conversion'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/form-with-text.webp',
						),
					),
				),
			)
		);

		// Register a block - Icon List
		acf_register_block(
			array(
				'name'            => 'icon-list',
				'title'           => __( 'Icon List', 'databook_td' ),
				'description'     => __( 'Icon List.', 'databook_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg id="Layer_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
				<path d="m141.255 228h-106.51c-19.159 0-34.745-15.586-34.745-34.745v-106.51c0-19.159 15.586-34.745 34.745-34.745h106.51c19.159 0 34.745 15.586 34.745 34.745v106.51c0 19.159-15.586 34.745-34.745 34.745zm-106.51-144c-1.514 0-2.745 1.231-2.745 2.745v106.51c0 1.514 1.231 2.745 2.745 2.745h106.51c1.514 0 2.745-1.231 2.745-2.745v-106.51c0-1.514-1.231-2.745-2.745-2.745z" fill="#bc0d05"/>
				<path d="m141.255 460h-106.51c-19.159 0-34.745-15.586-34.745-34.745v-106.51c0-19.159 15.586-34.745 34.745-34.745h106.51c19.159 0 34.745 15.586 34.745 34.745v106.51c0 19.159-15.586 34.745-34.745 34.745zm-106.51-144c-1.514 0-2.745 1.231-2.745 2.745v106.51c0 1.514 1.231 2.745 2.745 2.745h106.51c1.514 0 2.745-1.231 2.745-2.745v-106.51c0-1.514-1.231-2.745-2.745-2.745z" fill="#bc0d05"/>
				<path d="m496 132h-256c-8.836 0-16-7.164-16-16s7.164-16 16-16h256c8.836 0 16 7.164 16 16s-7.164 16-16 16z" fill="#bc0d05"/>
				<path d="m408 192h-168c-8.836 0-16-7.164-16-16s7.164-16 16-16h168c8.836 0 16 7.164 16 16s-7.164 16-16 16z" fill="#bc0d05"/>
				<path d="m496 360h-256c-8.836 0-16-7.164-16-16s7.164-16 16-16h256c8.836 0 16 7.164 16 16s-7.164 16-16 16z" fill="#bc0d05"/>
				<path d="m408 424h-168c-8.836 0-16-7.164-16-16s7.164-16 16-16h168c8.836 0 16 7.164 16 16s-7.164 16-16 16z" fill="#bc0d05"/>
			  </svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Conversion'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/icon-list.webp',
						),
					),
				),
			)
		);

		// Register a block - Case Study Listing
		acf_register_block(
			array(
				'name'            => 'casestudy-list',
				'title'           => __( 'Casestudy List', 'databook_td' ),
				'description'     => __( 'Casestudy List.', 'databook_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg enable-background="new 0 0 492 492" viewBox="0 0 492 492" xmlns="http://www.w3.org/2000/svg"><g id="Master_Layer_2"/><g id="Layer_1"><g><g><g><g><path clip-rule="evenodd" d="m405.2 431h-246.5c-8.1 0-14.8-6.6-14.8-14.8v-225.1c0-3.2 2.6-5.8 5.8-5.8s5.8 2.6 5.8 5.8v225.1c0 1.8 1.5 3.3 3.3 3.3h246.5c1.8 0 3.3-1.5 3.3-3.3v-230.4l-79.1-79.1h-111.6c-3.2 0-5.8-2.6-5.8-5.8s2.6-5.8 5.8-5.8h114c1.5 0 3 .6 4.1 1.7l82.4 82.4c1.1 1.1 1.7 2.5 1.7 4.1v232.8c-.1 8.3-6.7 14.9-14.9 14.9z" fill="#bc0d05" fill-rule="evenodd"/></g><g><path clip-rule="evenodd" d="m414.2 189.3h-73.4c-8.1 0-14.8-6.6-14.8-14.8v-73.4c0-3.2 2.6-5.8 5.8-5.8s5.8 2.6 5.8 5.8v73.4c0 1.8 1.5 3.3 3.3 3.3h73.4c3.2 0 5.8 2.6 5.8 5.8-.1 3.1-2.7 5.7-5.9 5.7z" fill="#bc0d05" fill-rule="evenodd"/></g><g><path clip-rule="evenodd" d="m292.3 155.9h-70.3c-3.2 0-5.8-2.6-5.8-5.8s2.6-5.8 5.8-5.8h70.3c3.2 0 5.8 2.6 5.8 5.8-.1 3.2-2.6 5.8-5.8 5.8z" fill="#bc0d05" fill-rule="evenodd"/></g><g><path clip-rule="evenodd" d="m292.3 189.3h-96.9c-3.2 0-5.8-2.6-5.8-5.8s2.6-5.8 5.8-5.8h96.9c3.2 0 5.8 2.6 5.8 5.8s-2.6 5.8-5.8 5.8z" fill="#bc0d05" fill-rule="evenodd"/></g><g><path clip-rule="evenodd" d="m162.9 198.4c-11.8 0-23.4-3.1-33.9-9.1-15.7-9.1-27-23.7-31.7-41.3-4.7-17.5-2.3-35.8 6.8-51.6 9.1-15.7 23.7-27 41.3-31.7 17.5-4.7 35.8-2.3 51.6 6.8 15.7 9.1 27 23.7 31.7 41.3 4.7 17.5 2.3 35.8-6.8 51.6-9.1 15.7-23.7 27-41.3 31.7-5.8 1.5-11.8 2.3-17.7 2.3zm.2-124.4c-4.9 0-9.8.6-14.7 1.9-14.6 3.9-26.7 13.2-34.3 26.3-15.6 27-6.3 61.5 20.6 77.1 13.1 7.5 28.2 9.5 42.8 5.6s26.7-13.2 34.2-26.3 9.5-28.2 5.6-42.8-13.2-26.7-26.3-34.2l2.9-5-2.9 5c-8.4-5.1-18.1-7.6-27.9-7.6z" fill="#bc0d05" fill-rule="evenodd"/></g><g><path clip-rule="evenodd" d="m124.5 203c-1 0-2-.2-2.9-.8-2.8-1.6-3.7-5.1-2.1-7.9l7.5-13c1.6-2.8 5.1-3.7 7.9-2.1s3.7 5.1 2.1 7.9l-7.5 13c-1.1 1.9-3.1 2.9-5 2.9z" fill="#bc0d05" fill-rule="evenodd"/></g><g><path clip-rule="evenodd" d="m95.5 270.4c-3.9 0-7.8-1-11.5-3.1-5.3-3.1-9.1-8-10.7-14s-.8-12.2 2.3-17.5l25.8-44.6c3.3-5.8 10.8-7.8 16.5-4.4l18.9-10.9c5.8 3.3 7.8 10.8 4.4 16.5l-25.8 44.6c-4.2 7.4-11.9 11.6-19.9 11.6zm16.3-73.7c-.2 0-.4.1-.5.3l-25.8 44.6c-1.5 2.6-1.9 5.7-1.1 8.7s2.7 5.5 5.4 7c2.6 1.5 5.7 1.9 8.7 1.1s5.5-2.7 7-5.4l25.8-44.6c.1-.3 0-.6-.2-.8l-19-10.9c-.1 0-.2 0-.3 0z" fill="#bc0d05" fill-rule="evenodd"/></g><g><path clip-rule="evenodd" d="m224.9 142.3c-.2 0-.4 0-.6 0l-61.9-6.2c-1.7-.2-3.2-1.1-4.2-2.4l-35.4-51.1c-1.8-2.6-1.2-6.2 1.4-8s6.2-1.2 8 1.4l33.9 48.9 59.2 5.9c3.2.3 5.5 3.1 5.2 6.3-.1 3-2.7 5.2-5.6 5.2z" fill="#bc0d05" fill-rule="evenodd"/></g><g><path clip-rule="evenodd" d="m131.9 190c-1 0-2-.2-2.9-.8-2.8-1.6-3.7-5.1-2.1-7.9l31.1-53.9c1.6-2.8 5.1-3.7 7.9-2.1s3.7 5.1 2.1 7.9l-31.1 53.9c-1 1.9-3 2.9-5 2.9z" fill="#bc0d05" fill-rule="evenodd"/></g><g><path clip-rule="evenodd" d="m113.3 256.8c-1 0-2-.2-2.9-.8l-29.9-17.3c-2.8-1.6-3.7-5.1-2.1-7.9s5.1-3.7 7.9-2.1l29.9-17.3c-3.2 0-5.8-2.6-5.8-5.8v-104.2c0-3.2 2.6-5.8 5.8-5.8h35.6c3.2 0 5.8 2.6 5.8 5.8v104.3c.1 3.2-2.5 5.7-5.7 5.7z" fill="#bc0d05" fill-rule="evenodd"/></g></g><g><g><path clip-rule="evenodd" d="m187.3 397.4c-3.2 0-5.8-2.6-5.8-5.8v-148.2c0-3.2 2.6-5.8 5.8-5.8s5.8 2.6 5.8 5.8v148.3c0 3.2-2.6 5.7-5.8 5.7z" fill="#bc0d05" fill-rule="evenodd"/></g><g><path clip-rule="evenodd" d="m382 397.4h-194.7c-3.2 0-5.8-2.6-5.8-5.8s2.6-5.8 5.8-5.8h194.7c3.2 0 5.8 2.6 5.8 5.8 0 3.3-2.6 5.8-5.8 5.8z" fill="#bc0d05" fill-rule="evenodd"/></g><g><g><path clip-rule="evenodd" d="m302.5 397.4c-3.2 0-5.8-2.6-5.8-5.8v-131.8h-24.1v131.9c0 3.2-2.6 5.8-5.8 5.8s-5.8-2.6-5.8-5.8v-137.7c0-3.2 2.6-5.8 5.8-5.8h35.6c3.2 0 5.8 2.6 5.8 5.8v137.6c0 3.3-2.5 5.8-5.7 5.8z" fill="#bc0d05" fill-rule="evenodd"/></g></g><g><g><path clip-rule="evenodd" d="m246.7 397.4c-3.2 0-5.8-2.6-5.8-5.8v-98.5h-24.1v98.5c0 3.2-2.6 5.8-5.8 5.8s-5.8-2.6-5.8-5.8v-104.2c0-3.2 2.6-5.8 5.8-5.8h35.6c3.2 0 5.8 2.6 5.8 5.8v104.3c.1 3.2-2.5 5.7-5.7 5.7z" fill="#bc0d05" fill-rule="evenodd"/></g></g><g><path clip-rule="evenodd" d="m358.2 397.4c-3.2 0-5.8-2.6-5.8-5.8v-98.5h-24.1v98.5c0 3.2-2.6 5.8-5.8 5.8s-5.8-2.6-5.8-5.8v-104.2c0-3.2 2.6-5.8 5.8-5.8h35.6c3.2 0 5.8 2.6 5.8 5.8v104.3c.1 3.2-2.5 5.7-5.7 5.7z" fill="#bc0d05" fill-rule="evenodd"/></g></g></g></g></g></svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Conversion'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/case-study.webp',
						),
					),
				),
			)
		);


		// Register a block - FAQ
		acf_register_block(
			array(
				'name'            => 'faq-list',
				'title'           => __( 'FAQ List', 'databook_td' ),
				'description'     => __( 'FAQ List.', 'databook_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
				<g id="_16.Clipboard" data-name="16.Clipboard">
				  <path d="m217.0534 247.2839h-.9634a15.9768 15.9768 0 0 1 -14.6246-22.3773 50.0635 50.0635 0 0 1 11.7662-16.4244q16.3008-15.3278 42.9448-15.327 17.1535 0 29.1976 6.3394a48.8008 48.8008 0 0 1 19.2826 18.2867 47.7487 47.7487 0 0 1 7.2385 25.1138 44.5565 44.5565 0 0 1 -2.3115 14.1417 58.1317 58.1317 0 0 1 -7.2993 14.2637q-2.92 4.2693-13.9906 14.3855-10.584 9.6311-13.2605 13.5931a36.1779 36.1779 0 0 0 -4.5013 10.5454 70.4285 70.4285 0 0 0 -2.01 13.0739 5.6166 5.6166 0 0 1 -5.583 5.2128h-22.2116a5.6045 5.6045 0 0 1 -5.5976-5.486 71.9913 71.9913 0 0 1 5.9612-29.6855q5.9592-13.3492 19.3434-25.0528 12.8937-11.3378 15.572-15.6046a18.424 18.424 0 0 0 2.6765-9.9968q0-7.8-6.5087-13.2274-6.51-5.4225-17.4577-5.425-11.1942 0-18.37 6.61a21.9857 21.9857 0 0 0 -5.4147 7.5659 15.2012 15.2012 0 0 1 -13.8783 9.4749zm35.23 94.7252a20.9314 20.9314 0 0 1 15.1462 6.0955 19.8286 19.8286 0 0 1 6.2654 14.7513 20.1106 20.1106 0 0 1 -6.2045 14.8123 21.19 21.19 0 0 1 -29.8667 0 20.8471 20.8471 0 0 1 14.66-35.6591z" fill="#bc0d05"/>
				  <path d="m396.2441 80.1025h-54.1994a30.9055 30.9055 0 0 1 3.2812 31.73c.1229-.2622.259-.516.3748-.7824h19.6061a26.878 26.878 0 0 1 26.8479 26.8474v305.307a26.883 26.883 0 0 1 -26.8479 26.8575h-218.6136a26.8826 26.8826 0 0 1 -26.8474-26.8575v-305.3068a26.8776 26.8776 0 0 1 26.8474-26.8477h19.6068a30.9191 30.9191 0 0 1 3.683-30.9478h-54.2276a26.8825 26.8825 0 0 0 -26.8475 26.8578v367.1926a26.8779 26.8779 0 0 0 26.8475 26.8474h280.4887a26.8783 26.8783 0 0 0 26.848-26.8474v-367.1926a26.883 26.883 0 0 0 -26.848-26.8575z" fill="#bc0d05"/>
				  <path d="m317.3541 80.105h-15.8931a6.15 6.15 0 0 1 -5.6471-8.5868 43.3477 43.3477 0 1 0 -79.6278 0 6.15 6.15 0 0 1 -5.6471 8.5868h-15.8931a18.6036 18.6036 0 0 0 0 37.2071h122.7082a18.6036 18.6036 0 0 0 0-37.2071z" fill="#bc0d05"/>
				</g>
			  </svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'faq'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/faq-list.webp',
						),
					),
				),
			)
		);

		// Register a block - Content Slides
		acf_register_block(
			array(
				'name'            => 'content-slides',
				'title'           => __( 'Content Slides', 'databook_td' ),
				'description'     => __( 'Content Slides.', 'databook_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 511.969 511.969" style="enable-background:new 0 0 511.969 511.969" xml:space="preserve" width="512" height="512" fill="#bc0d05"> <g><path  d="M84.853,272.553l-56.569-56.569l56.569-56.569 M427.116,272.553l56.569-56.569l-56.569-56.569 M355.984,115.984h-200v200h200V115.984z M155.984,195.984h200 M155.984,395.984h40 M235.984,395.984h40 M315.984,395.984h40" fill="#bc0d05"/></g></svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'content', 'slides'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/content-slides.webp',
						),
					),
				),
			)
		);


		// Register a block - content With Img
		acf_register_block(
			array(
				'name'            => 'content-with-img',
				'title'           => __( 'Content With Image', 'databook_td' ),
				'description'     => __( 'Content With Image.', 'databook_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g data-name="Layer 6"><path d="M61 2H3a1 1 0 0 0-1 1v58a1 1 0 0 0 1 1h58a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1Zm-1 58H4V4h56Z" fill="#bc0d05" data-original="#000000" class=""></path><path d="M57 6H31a1 1 0 0 0-1 1v22a1 1 0 0 0 1 1h26a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1ZM32.71 28 40 15.04l5.35 9.51.01.02L47.29 28Zm16.87 0-2.23-3.97L50 19.86 55.18 28ZM56 25.57l-5.16-8.11a1 1 0 0 0-1.68 0l-2.92 4.59-5.37-9.54a1.037 1.037 0 0 0-1.74 0L32 25.18V8h24ZM57 32H7a1 1 0 0 0-1 1v24a1 1 0 0 0 1 1h50a1 1 0 0 0 1-1V33a1 1 0 0 0-1-1ZM17.78 56 27 40.92 36.22 56Zm20.78 0-3.12-5.1L39 45.76 46.09 56ZM56 56h-7.48l-8.7-12.57a1 1 0 0 0-1.64 0l-3.88 5.6-6.45-10.55a1.028 1.028 0 0 0-1.7 0L15.44 56H8V34h48Z" fill="#bc0d05" data-original="#000000" class=""></path><path d="M47 16a3 3 0 1 0-3-3 3 3 0 0 0 3 3Zm0-4a1 1 0 1 1-1 1 1 1 0 0 1 1-1ZM34 42a3 3 0 1 0-3-3 3 3 0 0 0 3 3Zm0-4a1 1 0 1 1-1 1 1 1 0 0 1 1-1ZM13 9h14a1 1 0 0 0 0-2H13a1 1 0 0 0 0 2ZM7 13h20a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2ZM7 17h20a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2ZM7 21h20a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2ZM7 25h20a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2ZM7 29h20a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2ZM7 9h2a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2Z" fill="#bc0d05" data-original="#000000" class=""></path></g></g></svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'content', 'image'),
				'align'           => 'wide',
				'supports'        => array( 
					'align' => false,
					'anchor' => true,
				 ),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/content-with-image.webp',
						),
					),
				),
			)
		);

		// Register a block - Scrolling Content
		acf_register_block(
			array(
				'name'            => 'scrolling-content',
				'title'           => __( 'Scrolling Content', 'databook_td' ),
				'description'     => __( 'Scrolling Content.', 'databook_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" width="512" height="512"><g><path fill="#bc0d05" d="M372,416H140V96h232V416z M80,136H20v240h60 M432,376h60V136h-60 M200,176h112 M200,256h112 M200,336h112" /></g></svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'scrolling content'),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
					'anchor' => true,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/scrolling-content.webp',
						),
					),
				),
			)
		);

		// Register a block - Image Alongside Collage
		acf_register_block(
			array(
				'name'            => 'image-alongside-collage',
				'title'           => __( 'Image Alongside Collage', 'databook_td' ),
				'description'     => __( 'Image Alongside Collage.', 'databook_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="31.2px" height="31.201px" viewBox="0 0 31.2 31.201" style="enable-background:new 0 0 31.2 31.201" xml:space="preserve"><g><g><path d="M31.2,3.836c0-0.978-0.792-1.77-1.771-1.77H1.771C0.792,2.066,0,2.858,0,3.836v23.527c0,0.979,0.792,1.771,1.771,1.771
				H29.43c0.979,0,1.771-0.793,1.771-1.771V3.836z M29.159,27.094H2.041V4.156h27.117L29.159,27.094L29.159,27.094z" fill="#bc0d05"/><path d="M4.814,24.71h11.698c0.563,0,1.02-0.432,1.02-0.996c0-0.561-0.455-0.995-1.02-0.995H4.814
				c-0.563,0-1.019,0.436-1.019,0.995C3.795,24.28,4.251,24.71,4.814,24.71z" fill="#bc0d05"/><path d="M26.165,22.719h-5.272c-0.562,0-1.02,0.436-1.02,0.995c0,0.564,0.456,0.996,1.02,0.996h5.272
				c0.563,0,1.019-0.432,1.019-0.996C27.184,23.155,26.73,22.719,26.165,22.719z" fill="#bc0d05"/><path d="M4.814,21.311h11.698c0.563,0,1.02-0.435,1.02-0.996s-0.455-0.996-1.02-0.996H4.814c-0.563,0-1.019,0.435-1.019,0.996
				S4.251,21.311,4.814,21.311z" fill="#bc0d05"/><path d="M26.165,19.319h-5.272c-0.562,0-1.02,0.435-1.02,0.996s0.456,0.996,1.02,0.996h5.272c0.563,0,1.019-0.435,1.019-0.996
				S26.73,19.319,26.165,19.319z" fill="#bc0d05"/><path d="M21.969,6.906c-0.137-0.248-0.39-0.411-0.672-0.434c-0.283-0.021-0.558,0.101-0.732,0.324l-4.239,5.479l-3.69-3.576
				c-0.161-0.156-0.377-0.241-0.602-0.237c-0.224,0.004-0.438,0.098-0.593,0.26l-7.542,7.874h23.405L21.969,6.906z" fill="#bc0d05"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'image collage'),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
					'anchor' => true,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/image-alongside-collage.webp',
						),
					),
				),
			)
		);

		// Register a block - Resource Featured Post
acf_register_block(
	array(
		'name'            => 'resource-featured-posts',
		'title'           => __( 'Resource Featured Posts', 'databook_td' ),
		'description'     => __( 'A Featured Posts Block for Resources.', 'databook_td' ),
		'render_callback' => 'glide_acf_block_callback',
		'category'        => 'glide-blocks',
		'icon'            => '<svg id="_x31_" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m18.5 24h-16c-1.378 0-2.5-1.121-2.5-2.5v-14c0-1.379 1.122-2.5 2.5-2.5h7c.276 0 .5.224.5.5s-.224.5-.5.5h-7c-.827 0-1.5.673-1.5 1.5v14c0 .827.673 1.5 1.5 1.5h15.793l4.707-4.707v-10.793c0-.827-.673-1.5-1.5-1.5h-7c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h7c1.378 0 2.5 1.121 2.5 2.5v11c0 .133-.053.26-.146.354l-5 5c-.094.093-.221.146-.354.146zm5-5.5h.01z" fill="#bc0d05"/><path d="m18.5 24c-.276 0-.5-.224-.5-.5v-5c0-.276.224-.5.5-.5h5c.276 0 .5.224.5.5s-.224.5-.5.5h-4.5v4.5c0 .276-.224.5-.5.5z" fill="#bc0d05"/><path d="m12 9c-.276 0-.5-.224-.5-.5v-5c0-.276.224-.5.5-.5s.5.224.5.5v5c0 .276-.224.5-.5.5z" fill="#bc0d05"/><path d="m12 4c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2zm0-3c-.551 0-1 .448-1 1s.449 1 1 1 1-.448 1-1-.449-1-1-1z" fill="#bc0d05"/><path d="m19.5 12h-15c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h15c.276 0 .5.224.5.5s-.224.5-.5.5z" fill="#bc0d05"/><path d="m19.5 16h-15c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h15c.276 0 .5.224.5.5s-.224.5-.5.5z" fill="#bc0d05"/><path d="m15.5 20h-11c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h11c.276 0 .5.224.5.5s-.224.5-.5.5z" fill="#bc0d05"/></svg>',
		'mode'            => 'edit',
		'keywords'        => array( 'Resource Featured Posts' ),
		'align'           => 'full',
		'supports'        => array(
			'align' => false,
			'anchor' => true,
		),
		'example'         => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/resource-featured-posts.webp',
				),
			),
		),
	)
);
// Register a block - Image with CTA
acf_register_block(
	array(
		'name'            => 'image-with-cta',
		'title'           => __( 'Image With CTA', 'databook_td' ),
		'description'     => __( 'A Image With CTA for Resources.', 'databook_td' ),
		'render_callback' => 'glide_acf_block_callback',
		'category'        => 'glide-blocks',
		'icon'            => '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="986.8px" height="986.8px" viewBox="0 0 986.8 986.8" style="enable-background:new 0 0 986.8 986.8" xml:space="preserve"><g><path d="M876.3,164.649H587c-22.1,0-40,17.9-40,40c0,22.1,17.9,40,40,40h289.3c22.101,0,40-17.9,40-40
		C916.3,182.55,898.4,164.649,876.3,164.649z" fill="#bc0d05"/><path d="M587,530.849h193.3c22.101,0,40-17.9,40-40c0-22.1-17.899-40-40-40H587c-22.1,0-40,17.9-40,40
		C547,512.949,564.9,530.849,587,530.849z" fill="#bc0d05"/><path d="M946.8,307.75H587c-22.1,0-40,17.9-40,40s17.9,40,40,40h359.8c22.101,0,40-17.9,40-40S968.9,307.75,946.8,307.75z" fill="#bc0d05"/><path d="M946.8,594.05H587c-22.1,0-40,17.898-40,40c0,22.1,17.9,40,40,40h359.8c22.101,0,40-17.9,40-40
		C986.8,611.949,968.9,594.05,946.8,594.05z" fill="#bc0d05"/><path d="M946.8,737.15H587c-22.1,0-40,17.9-40,40s17.9,40,40,40h359.8c22.101,0,40-17.9,40-40S968.9,737.15,946.8,737.15z" fill="#bc0d05"/><path d="M414.4,160.25H60c-33.1,0-60,26.9-60,60V766.55c0,33.1,26.9,60,60,60h354.4c33.1,0,60-26.9,60-60V220.25
		C474.4,187.05,447.601,160.25,414.4,160.25z" fill="#bc0d05"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>',
		'mode'            => 'edit',
		'keywords'        => array( 'Image With CTA' ),
		'align'           => 'full',
		'supports'        => array(
			'align' => false,
			'anchor' => true,
		),
		'example'         => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/image-with-cta.webp',
				),
			),
		),
	)
);


// Register a block - Resource Categories
acf_register_block(
	array(
		'name'            => 'resource-categories',
		'title'           => __( 'Resource Categories', 'databook_td' ),
		'description'     => __( 'A Block for Resource Categories.', 'databook_td' ),
		'render_callback' => 'glide_acf_block_callback',
		'category'        => 'glide-blocks',
		'icon'            => '<svg id="Layer_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m195.096 59.178h-105.929c-16.542 0-30 13.458-30 30v105.933c0 16.542 13.458 30 30 30h105.93c16.542 0 30-13.458 30-30v-105.933c-.001-16.542-13.459-30-30.001-30zm-105.929 135.932v-105.932h105.93l.003 105.933z" fill="#bc0d05"/><path d="m314.611 225.11h105.93c16.543 0 30-13.458 30-30v-105.932c0-16.542-13.457-30-30-30h-105.93c-16.542 0-30 13.458-30 30v105.933c0 16.541 13.458 29.999 30 29.999zm0-135.932h105.93l.004 105.933h-105.934z" fill="#bc0d05"/><path d="m195.096 284.618h-105.929c-16.542 0-30 13.458-30 30v105.934c0 16.541 13.458 30 30 30h105.93c16.542 0 30-13.459 30-30v-105.934c-.001-16.542-13.459-30-30.001-30zm-105.929 135.933v-105.933h105.93l.003 105.934z" fill="#bc0d05"/><path d="m448.486 427.283-20.829-20.829c8.42-12.473 13.343-27.494 13.343-43.644 0-43.114-35.078-78.191-78.195-78.191-43.116 0-78.193 35.077-78.193 78.191 0 43.121 35.078 78.201 78.193 78.201 16.147 0 31.168-4.923 43.64-13.344l20.829 20.829c6.184 6.184 16.641 5.662 22.197-1.083 4.844-5.883 4.4-14.745-.985-20.13zm-37.495-64.477c0 26.613-21.573 48.188-48.187 48.188s-48.188-21.574-48.188-48.188 21.575-48.188 48.188-48.188 48.187 21.574 48.187 48.188z" fill="#bc0d05"/></g></svg>',
		'mode'            => 'edit',
		'keywords'        => array( 'Resource Categories' ),
		'align'           => 'full',
		'supports'        => array(
			'align' => false,
			'anchor' => true,
		),
		'example'         => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/resource-categories.webp',
				),
			),
		),
	)
);

// Register a block - Resource Plus Press Mentions Posts
acf_register_block(
	array(
		'name'            => 'resource-plus-press-mentions-posts',
		'title'           => __( 'Resource Plus Press Mentions Posts', 'databook_td' ),
		'description'     => __( 'A Block for Resource Plus Press Mentions Posts.', 'databook_td' ),
		'render_callback' => 'glide_acf_block_callback',
		'category'        => 'glide-blocks',
		'icon'            => '<svg id="Layer_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m195.096 59.178h-105.929c-16.542 0-30 13.458-30 30v105.933c0 16.542 13.458 30 30 30h105.93c16.542 0 30-13.458 30-30v-105.933c-.001-16.542-13.459-30-30.001-30zm-105.929 135.932v-105.932h105.93l.003 105.933z" fill="#bc0d05"/><path d="m314.611 225.11h105.93c16.543 0 30-13.458 30-30v-105.932c0-16.542-13.457-30-30-30h-105.93c-16.542 0-30 13.458-30 30v105.933c0 16.541 13.458 29.999 30 29.999zm0-135.932h105.93l.004 105.933h-105.934z" fill="#bc0d05"/><path d="m195.096 284.618h-105.929c-16.542 0-30 13.458-30 30v105.934c0 16.541 13.458 30 30 30h105.93c16.542 0 30-13.459 30-30v-105.934c-.001-16.542-13.459-30-30.001-30zm-105.929 135.933v-105.933h105.93l.003 105.934z" fill="#bc0d05"/><path d="m448.486 427.283-20.829-20.829c8.42-12.473 13.343-27.494 13.343-43.644 0-43.114-35.078-78.191-78.195-78.191-43.116 0-78.193 35.077-78.193 78.191 0 43.121 35.078 78.201 78.193 78.201 16.147 0 31.168-4.923 43.64-13.344l20.829 20.829c6.184 6.184 16.641 5.662 22.197-1.083 4.844-5.883 4.4-14.745-.985-20.13zm-37.495-64.477c0 26.613-21.573 48.188-48.187 48.188s-48.188-21.574-48.188-48.188 21.575-48.188 48.188-48.188 48.187 21.574 48.187 48.188z" fill="#bc0d05"/></g></svg>',
		'mode'            => 'edit',
		'keywords'        => array( 'Resource Plus Press Mentions Posts' ),
		'align'           => 'full',
		'supports'        => array(
			'align' => false,
			'anchor' => true,
		),
		'example'         => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/all-resource-categories.webp',
				),
			),
		),
	)
);
// Register a block - All Resource Categories
acf_register_block(
	array(
		'name'            => 'all-resource-categories',
		'title'           => __( 'All Resource Categories', 'databook_td' ),
		'description'     => __( 'A Block for All Resource Categories.', 'databook_td' ),
		'render_callback' => 'glide_acf_block_callback',
		'category'        => 'glide-blocks',
		'icon'            => '<svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g fill="rgb(0,0,0)"><path d="m117.333 234.667c-96.624 0-117.333-20.709-117.333-117.334 0-96.624 20.709-117.333 117.333-117.333 96.625 0 117.333 20.709 117.333 117.333.001 96.625-20.708 117.334-117.333 117.334z" fill="#bc0d05"/><path d="m117.333 512c-96.624 0-117.333-20.71-117.333-117.333 0-96.625 20.709-117.333 117.333-117.333 96.625 0 117.333 20.708 117.333 117.333.001 96.623-20.708 117.333-117.333 117.333z" fill="#bc0d05"/><path d="m277.333 394.667c0 96.623 20.709 117.333 117.334 117.333s117.333-20.71 117.333-117.333c0-96.625-20.708-117.333-117.333-117.333s-117.334 20.708-117.334 117.333z" fill="#bc0d05"/><path d="m416 42.667c0-11.782-9.551-21.333-21.333-21.333s-21.333 9.551-21.333 21.333v53.333h-53.334c-11.782 0-21.333 9.551-21.333 21.333s9.551 21.333 21.333 21.333h53.333v53.334c0 11.782 9.551 21.333 21.333 21.333s21.333-9.551 21.333-21.333v-53.333h53.333c11.782 0 21.333-9.551 21.333-21.333s-9.549-21.334-21.332-21.334h-53.333z" fill="#bc0d05"/></g></svg>',
		'mode'            => 'edit',
		'keywords'        => array( 'All Resource Categories' ),
		'align'           => 'full',
		'supports'        => array(
			'align' => false,
			'anchor' => true,
		),
		'example'         => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/all-resource-categories.webp',
				),
			),
		),
	)
);

// Register a block - about slider
acf_register_block(
	array(
		'name'            => 'about-slider',
		'title'           => __( 'About Slider', 'databook_td' ),
		'description'     => __( 'About Slider.', 'databook_td' ),
		'render_callback' => 'glide_acf_block_callback',
		'category'        => 'glide-blocks',
		'icon'            => '<svg id="bold" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m21.499 15c-.209 0-.419-.065-.599-.2-.442-.331-.532-.958-.2-1.4l1.05-1.4-1.05-1.4c-.332-.442-.242-1.069.2-1.4.441-.333 1.067-.242 1.399.2l1.5 2c.267.355.267.845 0 1.2l-1.5 2c-.195.262-.495.4-.8.4z" fill="#bc0d05"/><path d="m2.501 15c-.305 0-.604-.138-.801-.4l-1.5-2c-.267-.355-.267-.845 0-1.2l1.5-2c.331-.441.958-.532 1.4-.2.442.331.532.958.2 1.4l-1.05 1.4 1.05 1.4c.332.442.242 1.069-.2 1.4-.18.135-.39.2-.599.2z" fill="#bc0d05"/><path d="m16 22h-8c-1.654 0-3-1.346-3-3v-14c0-1.654 1.346-3 3-3h8c1.654 0 3 1.346 3 3v14c0 1.654-1.346 3-3 3zm-8-18c-.552 0-1 .449-1 1v14c0 .551.448 1 1 1h8c.552 0 1-.449 1-1v-14c0-.551-.448-1-1-1z" fill="#bc0d05"/></svg>',
		'mode'            => 'edit',
		'keywords'        => array( 'about' , 'slider'),
		'align'           => 'wide',
		'supports'        => array(
			'align' => false,
			'anchor' => true,
		),
		'example'         => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/about-slider.webp',
				),
			),
		),
	)
);

// Register a block - Checklist
acf_register_block(
	array(
		'name'            => 'checklist',
		'title'           => __( 'Checklist', 'databook_td' ),
		'description'     => __( 'Checklist.', 'databook_td' ),
		'render_callback' => 'glide_acf_block_callback',
		'category'        => 'glide-blocks',
		'icon'            => '<svg enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g id="_x30_7_Checklist"><g><path d="m139.346 145.564c38.464 0 69.757-31.251 69.757-69.662 0-38.464-31.293-69.757-69.757-69.757s-69.758 31.293-69.758 69.757c0 38.411 31.293 69.662 69.758 69.662zm0-123.803c29.852 0 54.141 24.289 54.141 54.141 0 29.802-24.289 54.046-54.141 54.046s-54.141-24.244-54.141-54.046c-.001-29.852 24.289-54.141 54.141-54.141z" fill="#bc0d05"/><path d="m125.678 96.173c1.464 1.464 3.45 2.287 5.52 2.287s4.056-.823 5.52-2.287l29.593-29.593c3.05-3.05 3.05-7.991 0-11.041s-7.991-3.05-11.041 0l-24.072 24.068-7.774-7.774c-3.05-3.05-7.991-3.05-11.041 0-3.05 3.046-3.05 7.991 0 11.041z" fill="#bc0d05"/><path d="m250.277 58.151h184.326c4.312 0 7.808-3.496 7.808-7.808s-3.496-7.808-7.808-7.808h-184.326c-4.312 0-7.808 3.496-7.808 7.808s3.497 7.808 7.808 7.808z" fill="#bc0d05"/><path d="m250.277 109.174h119.994c4.312 0 7.808-3.496 7.808-7.808s-3.496-7.808-7.808-7.808h-119.994c-4.312 0-7.808 3.496-7.808 7.808 0 4.311 3.497 7.808 7.808 7.808z" fill="#bc0d05"/><path d="m139.346 325.711c38.464 0 69.757-31.251 69.757-69.666 0-38.464-31.293-69.757-69.757-69.757s-69.757 31.293-69.757 69.757c-.001 38.415 31.292 69.666 69.757 69.666zm0-123.806c29.852 0 54.141 24.289 54.141 54.141 0 29.802-24.289 54.05-54.141 54.05s-54.141-24.247-54.141-54.05c-.001-29.852 24.289-54.141 54.141-54.141z" fill="#bc0d05"/><path d="m125.678 276.317c1.525 1.525 3.523 2.288 5.52 2.288 1.998 0 3.995-.763 5.52-2.288l29.593-29.593c3.05-3.05 3.05-7.991 0-11.041s-7.991-3.05-11.041 0l-24.072 24.072-7.774-7.774c-3.05-3.05-7.991-3.05-11.041 0s-3.05 7.991 0 11.041z" fill="#bc0d05"/><path d="m250.277 238.295h184.326c4.312 0 7.808-3.496 7.808-7.808s-3.496-7.808-7.808-7.808h-184.326c-4.312 0-7.808 3.496-7.808 7.808s3.497 7.808 7.808 7.808z" fill="#bc0d05"/><path d="m250.277 289.321h119.994c4.312 0 7.808-3.496 7.808-7.808s-3.496-7.808-7.808-7.808h-119.994c-4.312 0-7.808 3.496-7.808 7.808s3.497 7.808 7.808 7.808z" fill="#bc0d05"/><path d="m139.346 505.855c38.464 0 69.757-31.251 69.757-69.662 0-38.464-31.293-69.757-69.757-69.757s-69.757 31.293-69.757 69.757c-.001 38.411 31.292 69.662 69.757 69.662zm0-123.803c29.852 0 54.141 24.289 54.141 54.141 0 29.802-24.289 54.046-54.141 54.046s-54.141-24.244-54.141-54.046c-.001-29.851 24.289-54.141 54.141-54.141z" fill="#bc0d05"/><path d="m125.678 456.461c1.525 1.525 3.523 2.288 5.52 2.288 1.998 0 3.995-.763 5.52-2.288l29.593-29.592c3.05-3.05 3.05-7.991 0-11.041s-7.991-3.05-11.041 0l-24.072 24.072-7.774-7.774c-3.05-3.05-7.991-3.05-11.041 0s-3.05 7.991 0 11.041z" fill="#bc0d05"/><path d="m250.277 418.442h184.326c4.312 0 7.808-3.496 7.808-7.808s-3.496-7.808-7.808-7.808h-184.326c-4.312 0-7.808 3.496-7.808 7.808s3.497 7.808 7.808 7.808z" fill="#bc0d05"/><path d="m250.277 469.465h119.994c4.312 0 7.808-3.496 7.808-7.808s-3.496-7.808-7.808-7.808h-119.994c-4.312 0-7.808 3.496-7.808 7.808s3.497 7.808 7.808 7.808z" fill="#bc0d05"/></g></g></svg>',
		'mode'            => 'edit',
		'keywords'        => array( 'checklist'),
		'align'           => 'wide',
		'supports'        => array(
			'align' => false,
			'anchor' => true,
		),
		'example'         => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/checklist.webp',
				),
			),
		),
	)
);

// Register a block - Image Gallery
acf_register_block(
	array(
		'name'            => 'image-gallery',
		'title'           => __( 'Image Gallery', 'databook_td' ),
		'description'     => __( 'Image Gallery.', 'databook_td' ),
		'render_callback' => 'glide_acf_block_callback',
		'category'        => 'glide-blocks',
		'icon'            => '<svg height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg"><g id="_34-Add-image" data-name="34-Add-image"><path d="m29 24h-3v-3a1 1 0 0 0 -2 0v3h-3a1 1 0 0 0 0 2h3v3a1 1 0 0 0 2 0v-3h3a1 1 0 0 0 0-2z" fill="#bc0d05"/><path d="m17 24h-12a1 1 0 0 1 -1-1v-2.59l4-4 2.29 2.3a1 1 0 0 0 1.42 0l5.29-5.3 4.29 4.3a1 1 0 0 0 1.42-1.42l-5-5a1 1 0 0 0 -1.42 0l-5.29 5.3-2.29-2.3a1 1 0 0 0 -1.42 0l-3.29 3.3v-12.59a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v12a1 1 0 0 0 2 0v-12a3 3 0 0 0 -3-3h-18a3 3 0 0 0 -3 3v18a3 3 0 0 0 3 3h12a1 1 0 0 0 0-2z" fill="#bc0d05" /><path d="m8 9a3 3 0 1 0 3-3 3 3 0 0 0 -3 3zm4 0a1 1 0 1 1 -1-1 1 1 0 0 1 1 1z" fill="#bc0d05"/></g></svg>',
		'mode'            => 'edit',
		'keywords'        => array( 'Image Gallery'),
		'align'           => 'wide',
		'supports'        => array(
			'align' => false,
			'anchor' => true,
		),
		'example'         => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/image-gallery.webp',
				),
			),
		),
	)
);

// Register a block - Text Columns
acf_register_block(
	array(
		'name'            => 'text-columns',
		'title'           => __( 'Text Columns', 'databook_td' ),
		'description'     => __( 'Text Columns.', 'databook_td' ),
		'render_callback' => 'glide_acf_block_callback',
		'category'        => 'glide-blocks',
		'icon'            => '<svg id="Layer_1" height="512" viewBox="0 0 90 90" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m5.203 15.006h35.771v6.804h-35.771z" fill="#bc0d05"/><path d="m5.203 68.198h35.771v6.807h-35.771z" fill="#bc0d05"/><path d="m5.203 50.464h35.771v6.807h-35.771z" fill="#bc0d05" /><path d="m5.203 32.733h35.771v6.808h-35.771z" fill="#bc0d05"/><path d="m48.975 15.006h35.775v6.804h-35.775z" fill="#bc0d05" /><path d="m48.975 68.198h35.775v6.807h-35.775z" fill="#bc0d05"/><path d="m48.975 50.464h35.775v6.807h-35.775z" fill="#bc0d05"/><path d="m48.975 32.733h35.775v6.808h-35.775z" fill="#bc0d05"/></svg>',
		'mode'            => 'edit',
		'keywords'        => array( 'Text Columns'),
		'align'           => 'wide',
		'supports'        => array(
			'align' => false,
			'anchor' => true,
		),
		'example'         => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/text-columns.webp',
				),
			),
		),
	)
);


// Register a block - Select Single Quote
acf_register_block(
	array(
		'name'            => 'select-single-quote',
		'title'           => __( 'Select Single Quote', 'databook_td' ),
		'description'     => __( 'Select Single Quote.', 'databook_td' ),
		'render_callback' => 'glide_acf_block_callback',
		'category'        => 'glide-blocks',
		'icon'            => '<svg id="Layer_1" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><g id="Layer_1-2" data-name="Layer_1"><g id="_260987600" data-name=" 260987600"><g id="_260988104" data-name=" 260988104"><path d="m302.84 205.87c12.9-20.41 17.27-41.8 18.69-55.85a6.5 6.5 0 0 0 -9.66-6.31 46 46 0 1 1 -22.57-86.19c29.43 0 43.81 26.16 47.46 50.64 4.88 32.74-6.04 71.84-33.92 97.71z" fill="#bc0d05"/></g><g id="_260987792" data-name=" 260987792"><path d="m444.48 205.87c12.89-20.41 17.26-41.8 18.68-55.85a6.5 6.5 0 0 0 -6.46-7.15 6.54 6.54 0 0 0 -3.2.84 46 46 0 1 1 -22.56-86.19c29.43 0 43.81 26.16 47.46 50.64 4.87 32.74-6.05 71.84-33.92 97.71z" fill="#bc0d05"/></g><g id="_260987864" data-name=" 260987864"><path d="m268.74 408.44a46.1 46.1 0 0 1 -46.05 46c-29.42 0-43.81-26.16-47.45-50.64-4.88-32.74 6-71.85 33.91-97.71-12.89 20.41-17.26 41.8-18.68 55.85a6.5 6.5 0 0 0 9.66 6.31 46.06 46.06 0 0 1 68.61 40.15z" fill="#bc0d05"/></g><g id="_260987504" data-name=" 260987504"><path d="m127.11 408.44a46.1 46.1 0 0 1 -46 46c-29.43 0-43.81-26.16-47.46-50.64-4.87-32.74 6-71.85 33.92-97.71-12.94 20.45-17.31 41.84-18.73 55.91a6.5 6.5 0 0 0 9.66 6.31 46.06 46.06 0 0 1 68.61 40.15z" fill="#bc0d05"/></g></g></g></svg>',
		'mode'            => 'edit',
		'keywords'        => array( 'Quote'),
		'align'           => 'wide',
		'supports'        => array(
			'align' => false,
			'anchor' => true,
		),
		'example'         => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/select-single-quote.webp',
				),
			),
		),
	)
);

// Register a block - Newsletter
acf_register_block(
	array(
		'name'            => 'newsletter',
		'title'           => __( 'Newsletter', 'databook_td' ),
		'description'     => __( 'Newsletter.', 'databook_td' ),
		'render_callback' => 'glide_acf_block_callback',
		'category'        => 'glide-blocks',
		'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="512" height="512">
		<g id="news_paper" data-name="news paper" fill="#bc0d05">
			<path d="M53,53H47a1,1,0,0,1-1-1V11a1,1,0,0,1,1-1h9a1,1,0,0,1,0,2,2,2,0,0,0-2,2V52A1,1,0,0,1,53,53Zm-5-2h4V14a4,4,0,0,1,.54-2H48Z" fill="#bc0d05"/>
			<path d="M53,60a7,7,0,0,1-7-7V52a1,1,0,0,1,1-1h5V14a4,4,0,1,1,8,0V53A7,7,0,0,1,53,60Zm-5-7a5,5,0,0,0,10,0V14a2,2,0,0,0-2-2,2,2,0,0,0-2,2V52a1,1,0,0,1-1,1Z" fill="#bc0d05"/>
			<path d="M53,60H11a7,7,0,0,1-7-7V5A1,1,0,0,1,5,4H47a1,1,0,0,1,1,1V53a5,5,0,0,0,5,5,1,1,0,0,1,0,2ZM6,6V53a5,5,0,0,0,5,5H48.11A7,7,0,0,1,46,53V6Z" fill="#bc0d05"/>
			<path d="M41,33H11a1,1,0,0,1-1-1V11a1,1,0,0,1,1-1H41a1,1,0,0,1,1,1V32A1,1,0,0,1,41,33ZM12,31H40V12H12Z" fill="#bc0d05"/>
			<path d="M41,55H28a1,1,0,0,1-1-1V36a1,1,0,0,1,1-1H41a1,1,0,0,1,1,1V54A1,1,0,0,1,41,55ZM29,53H40V37H29Z" fill="#bc0d05"/>
			<path d="M23,39H11a1,1,0,0,1,0-2H23a1,1,0,0,1,0,2Z"/><path d="M23,44H11a1,1,0,0,1,0-2H23a1,1,0,0,1,0,2Z" fill="#bc0d05"/>
			<path d="M23,49H11a1,1,0,0,1,0-2H23a1,1,0,0,1,0,2Z"/><path d="M23,54H11a1,1,0,0,1,0-2H23a1,1,0,0,1,0,2Z" fill="#bc0d05"/>
			<path d="M23,25H20a4,4,0,0,1,0-8h3a1,1,0,0,1,1,1v6A1,1,0,0,1,23,25Zm-3-6a2,2,0,0,0,0,4h2V19Z" fill="#bc0d05"/>
			<path d="M29,28a1,1,0,0,1-.45-.11l-6-3A1,1,0,0,1,22,24V18a1,1,0,0,1,.55-.89l6-3A1,1,0,0,1,30,15V27a1,1,0,0,1-.47.85A1,1,0,0,1,29,28Zm-5-4.62,4,2V16.62l-4,2Z" fill="#bc0d05"/>
			<path d="M35,22H33a1,1,0,0,1,0-2h2a1,1,0,0,1,0,2Z" fill="#bc0d05"/>
			<path d="M33,18a1,1,0,0,1-.89-.55,1,1,0,0,1,.44-1.34l2-1a1,1,0,0,1,.9,1.78l-2,1A.93.93,0,0,1,33,18Z" fill="#bc0d05"/>
			<path d="M35,27a.93.93,0,0,1-.45-.11l-2-1a1,1,0,1,1,.9-1.78l2,1a1,1,0,0,1,.44,1.34A1,1,0,0,1,35,27Z" fill="#bc0d05"/>
			<path d="M20,29a1,1,0,0,1-1-1V24a1,1,0,0,1,2,0v4A1,1,0,0,1,20,29Z" fill="#bc0d05"/>
			</g>
		</svg>',
		'mode'            => 'edit',
		'keywords'        => array( 'Newsletter' , 'slider'),
		'align'           => 'wide',
		'supports'        => array(
			'align' => false,
		),
		'example'         => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/newsletter.webp',
				),
			),
		),
	)
);
// Register a block - Heading dividers
acf_register_block(
	array(
		'name'            => 'heading-dividers',
		'title'           => __( 'Heading dividers', 'databook_td' ),
		'description'     => __( 'Heading dividers.', 'databook_td' ),
		'render_callback' => 'glide_acf_block_callback',
		'category'        => 'glide-blocks',
		'icon'            => '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="992px" height="992px" viewBox="0 0 992 992"  ><g><path d="M275.5,0H60C26.9,0,0,26.9,0,60v158h275.5V0z" fill="#bc0d05" /><path d="M932,0H734v218h258V60C992,26.9,965.1,0,932,0z" fill="#bc0d05" />		<path d="M60,992h872c33.1,0,60-26.9,60-60V298H0v634C0,965.1,26.9,992,60,992z" fill="#bc0d05"/><rect x="355.5" width="298.5" height="218"  fill="#bc0d05"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>',
		'mode'            => 'edit',
		'keywords'        => array( 'Quote'),
		'align'           => 'wide',
		'supports'        => array(
			'align' => false,
			'anchor' => true,
		),
		'example'         => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/heading-dividers.webp',
				),
			),
		),
	)
);

// Register a block - person-highlight
acf_register_block(
	array(
		'name'            => 'person-highlight',
		'title'           => __( 'Person Highlight', 'databook_td' ),
		'description'     => __( 'Person Highlight.', 'databook_td' ),
		'render_callback' => 'glide_acf_block_callback',
		'category'        => 'glide-blocks',
		'icon'            => '<svg id="Layer_1" height="512" viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><circle cx="22" cy="20" r="7" fill="#bc0d05"/><rect height="12" rx="1" width="12" x="36" y="35" fill="#bc0d05"/><path d="m16 47h12a1 1 0 0 0 .86-1.51l-6-10a1 1 0 0 0 -1.72 0l-6 10a1 1 0 0 0 .86 1.51z" fill="#bc0d05"/><path d="m38.55 21.79-1.21 3.92a1 1 0 0 0 1.56 1.08l3.1-2.36 3.1 2.36a1 1 0 0 0 1.56-1.08l-1.21-3.92 3.16-2.41a1 1 0 0 0 -.61-1.8h-3.85l-1.15-3.87a1 1 0 0 0 -1.92 0l-1.19 3.87h-3.89a1 1 0 0 0 -.61 1.8z" fill="#bc0d05"/><path d="m53 45.52v-35.52a1 1 0 0 0 -1-1h-40a1 1 0 0 0 -1 1v35.52l-9.62 7.7a1 1 0 0 0 -.32 1.11 1 1 0 0 0 .94.67h60a1 1 0 0 0 .94-.67 1 1 0 0 0 -.32-1.11zm-22 3.48h-18v-18h18zm0-20h-18v-18h18zm20 20h-18v-18h18zm0-20h-18v-18h18z" fill="#bc0d05"/></svg>',
		'mode'            => 'edit',
		'keywords'        => array( 'Quote'),
		'align'           => 'wide',
		'supports'        => array(
			'align' => false,
			'anchor' => true,
		),
		'example'         => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/person-highlight.webp',
				),
			),
		),
	)
);


// Register a block - Text With Form
acf_register_block(
	array(
		'name'            => 'text-with-form',
		'title'           => __( 'Text With Form', 'databook_td' ),
		'description'     => __( 'Text With Form.', 'databook_td' ),
		'render_callback' => 'glide_acf_block_callback',
		'category'        => 'glide-blocks',
		'icon'            => '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 492.014 492.014" style="enable-background:new 0 0 492.014 492.014" xml:space="preserve"><g id="XMLID_144_"><path id="XMLID_151_" d="M339.277,459.566H34.922V32.446h304.354v105.873l32.446-32.447V16.223C371.723,7.264,364.458,0,355.5,0
		H18.699C9.739,0,2.473,7.264,2.473,16.223v459.568c0,8.959,7.265,16.223,16.226,16.223H355.5c8.958,0,16.223-7.264,16.223-16.223
		V297.268l-32.446,32.447V459.566z" fill="#bc0d05"/><path id="XMLID_150_" d="M291.446,71.359H82.751c-6.843,0-12.396,5.553-12.396,12.398c0,6.844,5.553,12.397,12.396,12.397h208.694
		c6.845,0,12.397-5.553,12.397-12.397C303.843,76.912,298.29,71.359,291.446,71.359z" fill="#bc0d05"/><path id="XMLID_149_" d="M303.843,149.876c0-6.844-5.553-12.398-12.397-12.398H82.751c-6.843,0-12.396,5.554-12.396,12.398
		c0,6.845,5.553,12.398,12.396,12.398h208.694C298.29,162.274,303.843,156.722,303.843,149.876z" fill="#bc0d05"/><path id="XMLID_148_" d="M274.004,203.6H82.751c-6.843,0-12.396,5.554-12.396,12.398c0,6.845,5.553,12.397,12.396,12.397h166.457
		L274.004,203.6z" fill="#bc0d05"/><path id="XMLID_147_" d="M204.655,285.79c1.678-5.618,4.076-11.001,6.997-16.07h-128.9c-6.843,0-12.396,5.553-12.396,12.398
		c0,6.844,5.553,12.398,12.396,12.398h119.304L204.655,285.79z"/><path id="XMLID_146_" d="M82.751,335.842c-6.843,0-12.396,5.553-12.396,12.398c0,6.843,5.553,12.397,12.396,12.397h108.9
		c-3.213-7.796-4.044-16.409-1.775-24.795H82.751z" fill="#bc0d05"/><path id="XMLID_145_" d="M479.403,93.903c-6.496-6.499-15.304-10.146-24.48-10.146c-9.176,0-17.982,3.647-24.471,10.138
		L247.036,277.316c-5.005,5.003-8.676,11.162-10.703,17.942l-14.616,48.994c-0.622,2.074-0.057,4.318,1.477,5.852
		c1.122,1.123,2.624,1.727,4.164,1.727c0.558,0,1.13-0.08,1.688-0.249l48.991-14.618c6.782-2.026,12.941-5.699,17.943-10.702
		l183.422-183.414c6.489-6.49,10.138-15.295,10.138-24.472C489.54,109.197,485.892,100.392,479.403,93.903z" fill="#bc0d05"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>',
		'mode'            => 'edit',
		'keywords'        => array( 'Text With Form' , 'Form'),
		'align'           => 'wide',
		'supports'        => array(
			'align' => false,
		),
		'example'         => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/text-with-form.webp',
				),
			),
		),
	)
);

// Register a block - Form Alongside Static Text
acf_register_block(
	array(
		'name'            => 'form-alongside-static-text',
		'title'           => __( 'form alongside static text', 'databook_td' ),
		'description'     => __( 'Form Alongside Static Text.', 'databook_td' ),
		'render_callback' => 'glide_acf_block_callback',
		'category'        => 'glide-blocks',
		'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g data-name="Layer 6"><path d="M61 2H3a1 1 0 0 0-1 1v58a1 1 0 0 0 1 1h58a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1Zm-1 58H4V4h56Z" fill="#bc0d05" data-original="#000000" class=""></path><path d="M57 6H31a1 1 0 0 0-1 1v22a1 1 0 0 0 1 1h26a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1ZM32.71 28 40 15.04l5.35 9.51.01.02L47.29 28Zm16.87 0-2.23-3.97L50 19.86 55.18 28ZM56 25.57l-5.16-8.11a1 1 0 0 0-1.68 0l-2.92 4.59-5.37-9.54a1.037 1.037 0 0 0-1.74 0L32 25.18V8h24ZM57 32H7a1 1 0 0 0-1 1v24a1 1 0 0 0 1 1h50a1 1 0 0 0 1-1V33a1 1 0 0 0-1-1ZM17.78 56 27 40.92 36.22 56Zm20.78 0-3.12-5.1L39 45.76 46.09 56ZM56 56h-7.48l-8.7-12.57a1 1 0 0 0-1.64 0l-3.88 5.6-6.45-10.55a1.028 1.028 0 0 0-1.7 0L15.44 56H8V34h48Z" fill="#bc0d05" data-original="#000000" class=""></path><path d="M47 16a3 3 0 1 0-3-3 3 3 0 0 0 3 3Zm0-4a1 1 0 1 1-1 1 1 1 0 0 1 1-1ZM34 42a3 3 0 1 0-3-3 3 3 0 0 0 3 3Zm0-4a1 1 0 1 1-1 1 1 1 0 0 1 1-1ZM13 9h14a1 1 0 0 0 0-2H13a1 1 0 0 0 0 2ZM7 13h20a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2ZM7 17h20a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2ZM7 21h20a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2ZM7 25h20a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2ZM7 29h20a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2ZM7 9h2a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2Z" fill="#bc0d05" data-original="#000000" class=""></path></g></g></svg>',
		'mode'            => 'edit',
		'keywords'        => array( 'Conversion'),
		'align'           => 'wide',
		'supports'        => array( 
			'align' => false,
			'anchor' => true,
		 ),
		'example'         => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/form-with-text.webp',
				),
			),
		),
	)
);
		
	}
}
 