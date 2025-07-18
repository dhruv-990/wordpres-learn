<?php
/*
Plugin Name: My First Plugin
Description: Displays a message in the footer.
Version: 1.0
Author: Dhruv Dwivedi
*/

function show_footer_message() {
    echo "<p style='text-align:center;'>Learning WordPress with rtCamp!</p>";
}
add_action('wp_footer', 'show_footer_message');
?>
