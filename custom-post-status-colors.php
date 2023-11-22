<?php
/**
 * Plugin Name: Custom Post Status Colors
 * Plugin URI: https://askfredo.com
 * Description: Customize row background colors based on post status in the WordPress backend.
 * Version: 1.0
 * Author: Alfredo Villa
 * Author URI: https://askfredo.com
 */

// Add action to apply custom styles in admin
add_action('admin_head', 'custom_post_status_colors');

// Function to apply custom styles
function custom_post_status_colors() {
    ?>
    <style>
        tr.status-draft .check-column { background-color: #FFA07A; } /* Red for Draft */
        tr.status-pending .check-column { background-color: #FFFACD; } /* Yellow for Awaiting Reviewe */
        tr.status-publish .check-column { background-color: #98FB98; } /* Green for Published */
    </style>
    <?php
}