<?php
/*
 * Plugin name: Copyright
 * 
 *
 */
function dynamic_copyright_year() {
    $current_year = date('Y');
    echo 'Copyright &copy; ' . $current_year;
}
add_action( 'wp_footer', 'dynamic_copyright_year');