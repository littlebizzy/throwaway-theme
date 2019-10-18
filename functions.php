<?php
// Ref: https://training.ithemes.com/webinar/hardcoding-the-wordpress-setup-process/
// Ref: https://codex.wordpress.org/Option_Reference

// set the options to change
$option = array(
    // 'active_plugins'                => '', // NULL
    'admin_email'                   => '', // pulled from ss-config
    'advanced_edit'                 => '0',
    'avatar_rating'                 => 'PG',
    'avatar_default'                => 'mystery', // mystery man avatar (default)
    'blacklist_keys'                => '', // NULL
    'blog_charset'                  => 'UTF-8',
    'blog_public'                   => '1',
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
    'default_category'              => '1',
    'default_comment_status'        => 'open',
    'default_comments_page'         => 'newest',
    // 'default_email_category'     => '1', // pointless for SlickStack
    // 'default_link_category'      => '2', // pointless for SlickStack
    'default_ping_status'           => 'closed',
    'default_pingback_flag'         => '0',
    'default_post_edit_rows'        => '10',
    'default_role'                  => 'subscriber',
    'embed_autourls'                => '0', // disable automatic (oEmbed) social media embeds
    'embed_size_h'                  => '600',
    'embed_size_w'                  => '', // NULL
    'enable_app'                    => '0', // disable the Atom protocol
    'enable_xmlrpc'                 => '0', // disable the XML-RPC protocol (REST API is already in WP Core)
    'gmt_offset'                    => '0', // 0 = GMT (UTC)
    'gzipcompression'               => '0',
    'hack_file'                     => '0', // legacy feature
    'home'                          => '', // pulled from ss-config
    'html_type'                     => 'text/html',
    'image_default_align'           => 'none', // disable image alignment by default
    'image_default_link_type'       => 'none', // disable image links by default
    'image_default_size'            => 'medium',
    'large_size_h'                  => '1024',
    'large_size_w'                  => '1024',
    'mailserver_login'              => '', // NULL
    'mailserver_pass'               => '', // NULL
    'mailserver_port'               => '', // NULL
    'mailserver_url'                => '', // NULL
    'medium_size_h'                 => '300',
    'medium_size_w'                 => '300',
    'moderation_notify'             => '1',
    'page_comments'                 => '0',
    'permalink_structure'           => '/blog/%postname%/',
    'ping_sites'                    => '', // NULL
    'posts_per_page'                => '10',
    'posts_per_rss'                 => '10',
    'recently_edited'               => '', // NULL
    'require_name_email'            => '1',
    'rss_language'                  => 'en',
    'rss_use_excerpt'               => '1', // encourage RSS subscribers to visit your website
    // 'secret'                     => '', // let WordPress generate the salts
    'show_avatars'                  => '1',
    'show_comments_cookies_opt_in'  => '0',
    // 'show_on_front'              => 'page',
    'sidebars_widgets'              => '', // NULL
    'siteurl'                       => '', // pulled from ss-config
    'start_of_week'                 => '1', // 1 = Monday
    'sticky_posts'                  => '', // NULL
    'stylesheet'                    => 'default',
    'tag_base'                      => '/tag',
    'template'                      => 'default',
    'thread_comments'               => '0',
    'thread_comments_depth'         => '2',
    'thumbnail_crop'                => '1',
    'thumbnail_size_h'              => '150',
    'thumbnail_size_w'              => '150',
    'time_format'                   => 'g:ia', // g:i a = 12:50 am
    'timezone_string'               => '', // NULL (this option might overwrite gmt_offset)
    // 'upload_path'                => '', // NULL
    // 'upload_url_path'            => '', // NULL
    'uploads_use_yearmonth_folders' => '1',
    'use_balanceTags'               => '0', // disable XHTML corrections
    // 'use_linksupdate'            => '0',
    'use_smilies'                   => '0', // disable emojis
    'use_trackback'                 => '0', // disable trackbacks
    'users_can_register'            => '0', // disable new user registrations by default (can be changed)
    'widget_categories'             => '', // NULL
    'widget_text'                   => '', // NULL
    'widget_rss'                    => '', // NULL
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
