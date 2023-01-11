<?php
/**
 * This code will make a new plugin. When activated the function will be called, a new page will be made and then it will be assigned to the custom template that i have just made using PHP.
 * Plugin Name: Custom Page Template
 * Description: Creates a new page with a custom template.
 */

/**
 * INSTRUCTIONS ON HOW TO USE THIS CODE:
 * Firstly, you will need to create a new folder in the 'wp-content/plugins'. 
 * Secondly, save the code above as a new file inside of that folder and name it similar to the function name
 * Thirdly, its important to log in as an admin. Go to plugins and activate it.
 * 
 * When its done the new page should appear.
 */

function custom_page_template() {
    // Here you create a new page
    $page = array(
        'post_type' => 'page',
        'post_title' => 'Custom Page',
        'post_content' => '',
        'post_status' => 'publish',
        'post_author' => 1
    );
    $page_id = wp_insert_post($page);

    // Here you make the custom template on the new page.
    update_post_meta($page_id, '_wp_page_template', 'custom-template.php');
}
register_activation_hook( __FILE__, 'custom_page_template' );
