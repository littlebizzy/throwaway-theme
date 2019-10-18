<?php
// Ref: https://training.ithemes.com/webinar/hardcoding-the-wordpress-setup-process/
// Ref: https://codex.wordpress.org/Option_Reference

// set the options to change
$option = array(
    // 'active_plugins'                => '', // NULL
    'admin_email'                   => '@SITE_EMAIL', // pulled from ss-config during SlickStack installation
    // 'advanced_edit'                 => '0',
    // 'auto_core_update_notified'     => '1', // email the admin when WP core updates
    'avatar_default'                => 'mystery', // mystery man avatar (WP Core default) if no avatar exists
    'avatar_rating'                 => 'PG',
    'blacklist_keys'                => '', // NULL
    'blog_charset'                  => 'UTF-8', // should always be UTF-8
    'blog_public'                   => '1', // allow search engines to index the site
    'blogdescription'               => '', // NULL
    'blogname'                      => '@SITE_NAME', // pulled from ss-config during SlickStack installation
    'can_compress_scripts'          => '1', // for WP Admin backend
    'category_base'                 => '/.', // remove category base
    // 'category_children'             => '', // NULL
    'close_comments_days_old'       => '90',
    'close_comments_for_old_posts'  => '0', // keep comments open by default
    'comment_max_links'             => '2', // hold comments for moderation if they contain 2+ links
    'comment_moderation'            => '1', // hold all comments for moderation by default
    'comment_order'                 => 'asc', // show older comments at the top
    'comment_registration'          => '0', // allow guest comments
    'comment_whitelist'             => '0', // previously approved comments not required in order to be whitelisted
    'comments_notify'               => '1', // email the admin about new comments
    'comments_per_page'             => '50',
    // 'cron'                          => '', // NULL = best to not mess with WP Cron settings directly
    // 'current_theme'                 => '', // NULL = do not edit this during installation
    'date_format'                   => 'M j, Y', // M j, Y = Nov 6, 2010
    'default_category'              => '1', // default posts category
    'default_comment_status'        => 'open',
    'default_comments_page'         => 'newest', // show newest comments on 1st page
    'default_email_category'        => '1', // disabled on SlickStack
    'default_link_category'         => '2', // disabled on SlickStack
    'default_ping_status'           => 'closed', // disable pingbacks (disabled on SlickStack)
    'default_pingback_flag'         => '0', // disable pingbacks (disabled on SlickStack)
    'default_post_edit_rows'        => '10',
    // 'default_post_format'           => '', // NULL
    'default_role'                  => 'subscriber',
    'embed_autourls'                => '0', // disable automatic (oEmbed) social media embeds
    'embed_size_h'                  => '600', // embed media height = 600px
    'embed_size_w'                  => '', // NULL
    'enable_app'                    => '0', // disable the Atom protocol
    'enable_xmlrpc'                 => '0', // disable the XML-RPC protocol (REST API is already in WP Core)
    'gmt_offset'                    => '0', // 0 = GMT (UTC)
    'gzipcompression'               => '0', // disable Gzip in WP (PHP) and let the server handle it
    'hack_file'                     => '0', // legacy feature
    'home'                          => 'https://@SITE_DOMAIN', // pulled from ss-config during SlickStack installation
    'html_type'                     => 'text/html',
    'image_default_align'           => 'none', // disable image alignment by default
    'image_default_link_type'       => 'none', // disable image links by default
    'image_default_size'            => 'medium',
    'large_size_h'                  => '1024', // large images height = 1024px
    'large_size_w'                  => '1024', // large images width = 1024px
    'link_manager_enabled'          => '0', // disable janky links menu
    'mailserver_login'              => '', // NULL
    'mailserver_pass'               => '', // NULL
    'mailserver_port'               => '', // NULL
    'mailserver_url'                => '', // NULL
    'medium_large_size_h'           => '768', // medium-large images height = 768px
    'medium_large_size_w'           => '768', // medium-large images width = 768px
    'medium_size_h'                 => '300', // medium images height = 300px
    'medium_size_w'                 => '300', // medium images width = 300px
    'moderation_keys'               => '', // NULL
    'moderation_notify'             => '1', // email the admin when comments need moderation
    'page_comments'                 => '0', // disable paged comments by default
    // 'page_on_front'                 => '', // NULL
    'page_for_posts'                => '0',
    'permalink_structure'           => '/blog/%postname%/',
    'ping_sites'                    => '', // NULL
    'posts_per_page'                => '10',
    'posts_per_rss'                 => '10',
    'require_name_email'            => '1', // comment authors must include their name and email address
    'rss_language'                  => 'en',
    'rss_use_excerpt'               => '1', // encourage RSS subscribers to visit your website
    // 'secret'                        => '', // let WordPress generate the salts
    'show_avatars'                  => '1', // enable comment avatars
    'show_comments_cookies_opt_in'  => '0', // disable the opt-in warning for comment cookies (avoid GDPR bloat)
    /'show_on_front'                 => 'page', // depends on page_on_front
    'sidebars_widgets'              => '', // NULL
    'site_icon'                     => '0', // disabled by default
    'siteurl'                       => 'https://@SITE_DOMAIN', // pulled from ss-config during SlickStack installation
    'start_of_week'                 => '1', // 1 = Monday
    'tag_base'                      => '/tag',
    'thread_comments'               => '1', // enable threaded comments
    'thread_comments_depth'         => '2', // depth of comment threads = 2 levels (similar with Facebook, YouTube, etc)
    'thumbnail_crop'                => '1', // crop image thumbnails to exact dimensions (not proportional)
    'thumbnail_size_h'              => '150', // image thumbnails height = 150px
    'thumbnail_size_w'              => '150', // image thumbnails width = 150px
    'time_format'                   => 'g:ia', // g:i a = 12:50 am
    'timezone_string'               => '', // NULL (this option might overwrite gmt_offset)
    'upload_path'                   => '', // NULL (overruled by wp-config constants when using SlickStack)
    'upload_url_path'               => '', // NULL (overruled by wp-config constants when using SlickStack)
    'uploads_use_yearmonth_folders' => '1',
    'use_balanceTags'               => '0', // disable XHTML corrections
    'use_smilies'                   => '0', // disable emojis
    'use_trackback'                 => '0', // disable trackbacks
    'users_can_register'            => '0', // disable new user (guest) registrations by default
    'WPLANG'                        => '@WP_LANG', // default language
);

// delete these options: links_updated_date_format, links_recently_updated_prepend, links_recently_updated_append, 
// links_recently_updated_time, use_linksupdate
 
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
