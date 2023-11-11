<?php
/**
 * Ajax related functions
 *
 * @link https://codex.wordpress.org/AJAX#Ajax_in_WordPress
 *
 * @package BaseTheme Package
 * @since 1.0.0
 *
 */


 function databook_teamslider(){
   global $post;
    $memberID = $_POST['memberID'];

    if ( 'publish' === get_post_status( $memberID ) ) {
        $featured_img_url = get_the_post_thumbnail_url($memberID, 'full');
        $designation = get_field('basethemevar_cpt_team_designation', $memberID);
        $single_member_title = get_the_title($memberID);
        $team_text = get_field('basethemevar_cpt_team_text', $memberID);
        $linkedin = get_field('basethemevar_cpt_team_linkedin', $memberID);
        $twitter = get_field('basethemevar_cpt_team_twitter', $memberID);
        $angel = get_field('basethemevar_cpt_team_angel', $memberID);
        $crunchbase = get_field('basethemevar_cpt_team_cb', $memberID);
        $myslug = get_post_field('post_name', $memberID);
        ?>
        <div id="<?php echo esc_html($myslug); ?>" class="popup-block modal full-width-popup">
            <div class="popup-row">
                <div class="cl-left">
                    <img src="<?php echo $featured_img_url; ?>">
                </div>
                <div class="cl-right">
                    <div class="popup-close">
                        <a href="javascript:void(0)" class="box-close">
                            <svg class="desktop-close" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"
                                fill="none">
                                <rect x="4.21094" y="29.6673" width="36" height="2"
                                    transform="rotate(-45 4.21094 29.6673)" fill="white" />
                                <rect x="6.33203" y="4.21141" width="36" height="2"
                                    transform="rotate(45 6.33203 4.21141)" fill="white" />
                            </svg>
                            <svg class="md-close" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"
                                fill="none">
                                <rect width="40" height="40" rx="20" fill="#100F13" fill-opacity="0.2" />
                                <rect x="12.2227" y="26.364" width="20" height="2"
                                    transform="rotate(-45 12.2227 26.364)" fill="white" />
                                <rect x="13.6367" y="12.2218" width="20" height="2"
                                    transform="rotate(45 13.6367 12.2218)" fill="white" />
                            </svg>
                        </a>
                    </div>
                    <h2 class="text-white popup-title heading-3">
                        <?php echo esc_html($single_member_title); ?>
                    </h2>
                    <div class="ui-uc-medium popup-sub">
                        <?php echo $designation; ?>
                    </div>
                    <div class="small-text popup-content">
                        <?php echo $team_text; ?>
                    </div>
                    <div class="popup-social-icon">
                        <ul>
                        <?php if($linkedin){ ?>
                            <li><a href="<?php echo $linkedin ; ?>" target="_blank"><img src="<?php echo  get_template_directory_uri(); ?>/assets/img/admin/linkedin.svg"
                                        width="" height="" alt="" /></a></li>
                            <?php } ?>
                            <?php if($twitter){ ?>
                            <li><a href="<?php echo $twitter ; ?>" target="_blank"><img
                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/admin/x-twitter-white.svg"
                                        width="" height="" alt="" /></a></li>
                            <?php } ?>            
                            <?php if($angel){ ?>
                            <li><a href="<?php echo $angel ; ?>" target="_blank"><img
                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/admin/thumb-icon.svg"
                                        width="" height="" alt="" /></a></li>
                            <?php } ?>        
                            <?php if($crunchbase){ ?>
                            <li><a href="<?php echo $crunchbase ; ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/admin/cb-icon.svg"
                                        width="" height="" alt="" /></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }else{
        ?>
        <div id="" class="popup-block modal full-width-popup">
            <div class="popup-row">
                <div class="cl-left">
                </div>
                <div class="cl-right">
                    <div class="popup-close">
                        <a href="javascript:void(0)" class="box-close">
                            <svg class="desktop-close" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"
                                fill="none">
                                <rect x="4.21094" y="29.6673" width="36" height="2"
                                    transform="rotate(-45 4.21094 29.6673)" fill="white" />
                                <rect x="6.33203" y="4.21141" width="36" height="2"
                                    transform="rotate(45 6.33203 4.21141)" fill="white" />
                            </svg>
                            <svg class="md-close" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"
                                fill="none">
                                <rect width="40" height="40" rx="20" fill="#100F13" fill-opacity="0.2" />
                                <rect x="12.2227" y="26.364" width="20" height="2"
                                    transform="rotate(-45 12.2227 26.364)" fill="white" />
                                <rect x="13.6367" y="12.2218" width="20" height="2"
                                    transform="rotate(45 13.6367 12.2218)" fill="white" />
                            </svg>
                        </a>
                    </div>
                    <div class="small-text popup-content">
                        <p>Something is Wrong!</p>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
   die();
 }

 add_action('wp_ajax_teamslider', 'databook_teamslider');
 add_action('wp_ajax_nopriv_teamslider', 'databook_teamslider');