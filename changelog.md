## Changelog

### 1.2.1
* switches theme to `starter` by LittleBizzy
* `wp_cache_flush` now before switch theme function
* removed plugin activation snippets

### 1.2.0
* removed SlickStack-specific placeholders (more universal now)
* removed `home` and `siteurl` options (WordPress Core will auto-guess them)
* removed `WPLANG` option (can set in `wp-config.php`)
* set `blogname` and `blogdescription` options to be NULL by default
* added function to switch active theme to `twentynineteen` toward the end of `functions.php`
* moved `wp_cache_flush` to the end of `functions.php`
* minor code tweaks

### 1.1.0
* added `index.php` to make WordPress recognize the theme
* added `wp_cache_flush` to clear object cache
* added inline credit to iThemes
* minor code tweaks

### 1.0.0
* inspired by iThemes
* do not use this version (incomplete)
