<?php
/*
Plugin Name: Azaronline Blog
Plugin URI: http://azaronline.com/
Description: Show Last posts of <a target=_blank" href="http://azaronline.com/">Azaronline</a> in your dashboard.
Author: Alireza Nejati
Version: 1.1
Tags: Blog, Azaronline, Azaronline Blog, wordpress, rss
Author URI: http://azaronline.com/
License: GPL
*/
// Add Azaronline Blog //
function wp_admin_dashboard_add_news_Blog_widget() {
global $wp_meta_boxes;
wp_add_dashboard_widget( 'dashboard_Azaronline_Blog', __("Azaronline Blog", "Azaronline"), 'dashboard_Azaronline_Blog_output' );
}
add_action('wp_dashboard_setup', 'wp_admin_dashboard_add_news_Blog_widget');
function dashboard_Azaronline_Blog_output() {
echo '<div class="AzaronlineBlog">';
wp_widget_rss_output(array(
'url' => 'https://azaronline.com/feed/posts',
'title' => __('Show Last posts of Azaronline in your dashboard', 'Azaronline'),
'items' => 4,
'show_summary' => 1,
'show_author' => 1,
'show_date' => 1
));
echo "</div>";
}
// End //
?>