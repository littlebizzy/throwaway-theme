<?php
// Ref: https://training.ithemes.com/webinar/hardcoding-the-wordpress-setup-process/
// Ref: https://codex.wordpress.org/Option_Reference

// set the options to change
$option = array(
    'admin_email'                   => '',
    'avatar_rating'                 => 'PG',
    'avatar_default'                => 'mystery',
    'blogdescription'               => '',
    'blogname'                      => '',
    'category_base'                 => '/category',
    'close_comments_for_old_posts'  => '0',
    'close_comments_days_old'       => '90',
    'comment_max_links'             => '2',
    'comment_moderation'            => '1',
    'comments_notify'               => '1',
    'comment_order'                 => 'asc',
    'comment_registration'          => '0',
    'comment_whitelist'             => '0',
    'comments_per_page'             => '50',
    'date_format'                   => 'M j, Y',
    'default_comments_page'         => 'newest',
    'default_comment_status'        => 'open',
    'default_ping_status'           => 'closed',
    'default_pingback_flag'         => '0',
    'default_role'                  => 'subscriber',
    'gmt_offset'                    => 'GMT',
    'home'                          => '',
    'moderation_notify'             => '1',
    'page_comments'                 => '0',
    'permalink_structure'           => '/blog/%postname%/',
    'require_name_email'            => '1',
    'show_avatars'                  => '1',
    'show_comments_cookies_opt_in'  => '0',
    'siteurl'                       => '',
    'start_of_week'                 => '1',
    'tag_base'                      => '/tag',
    'thread_comments'               => '0',
    'thread_comments_depth'         => '2',
    'time_format'                   => 'g:ia',
    'timezone_string'               => '',
    'uploads_use_yearmonth_folders' => '1',
    'use_smilies'                   => ''
    'use_trackback'                 => '',
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
