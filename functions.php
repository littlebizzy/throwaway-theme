<?php
// Ref: https://training.ithemes.com/webinar/hardcoding-the-wordpress-setup-process/
// Ref: https://codex.wordpress.org/Option_Reference

// set the options to change
$option = array(
    'admin_email'                   => '', // pulled from ss-config
    'avatar_rating'                 => 'PG',
    'avatar_default'                => 'mystery', // mystery man avatar (default)
    'blogdescription'               => '', // NULL
    'blogname'                      => '', // generated from the domain name in ss-config
    'category_base'                 => '/category',
    'close_comments_for_old_posts'  => '0',
    'close_comments_days_old'       => '90',
    'comment_max_links'             => '2',
    'comment_moderation'            => '1',
    'comment_order'                 => 'asc',
    'comment_registration'          => '0',
    'comment_whitelist'             => '0',
    'comments_notify'               => '1',
    'comments_per_page'             => '50',
    'date_format'                   => 'M j, Y', // M j, Y = Nov 6, 2010
    'default_comment_status'        => 'open',
    'default_comments_page'         => 'newest',
    'default_ping_status'           => 'closed',
    'default_pingback_flag'         => '0',
    'default_role'                  => 'subscriber',
    'embed_autourls'                => '0', // disable automatic (oEmbed) social media embeds
    'embed_size_h'                  => '600',
    'embed_size_w'                  => '', // NULL
    'gmt_offset'                    => '0', // 0 = GMT (UTC)
    'home'                          => '', // pulled from ss-config
    'large_size_h'                  => '1024',
    'large_size_w'                  => '1024',
    'medium_size_h'                 => '300',
    'medium_size_w'                 => '300',
    'moderation_notify'             => '1',
    'page_comments'                 => '0',
    'permalink_structure'           => '/blog/%postname%/',
    'require_name_email'            => '1',
    'show_avatars'                  => '1',
    'show_comments_cookies_opt_in'  => '0',
    'siteurl'                       => '', // pulled from ss-config
    'start_of_week'                 => '1', // 1 = Monday
    'tag_base'                      => '/tag',
    'thread_comments'               => '0',
    'thread_comments_depth'         => '2',
    'thumbnail_crop'                => '1',
    'thumbnail_size_h'              => '150',
    'thumbnail_size_w'              => '150',
    'time_format'                   => 'g:ia', // g:i a = 12:50 am
    'timezone_string'               => '', // NULL (this option might overwrite gmt_offset)
    'uploads_use_yearmonth_folders' => '1',
    'use_smilies'                   => '0'
    'use_trackback'                 => '0',
    'users_can_register'            => '0',
);
 
// update wp_options table
foreach ( $option as $key => $value ) {  
    update_option( $key, $value );
}
 
// flush rewrite rules because we changed the permalink structure
global $wp_rewrite;
$wp_rewrite->flush_rules();
 
// delete the default comment, post and page
wp_delete_comment( 1 );
wp_delete_post( 1, TRUE );
wp_delete_post( 2, TRUE );
 
// we need to include the file below because the activate_plugin() function isn't normally defined in the front-end
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

// activate bundled plugins
// activate_plugin( 'wp-super-cache/wp-cache.php' );
// activate_plugin( 'wordpress-seo/wp-seo.php' );
 
// switch the theme
// switch_theme( 'builder' );
 
?>
