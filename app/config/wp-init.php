<?php
// Initialize the instance of WordPress

// Use a static front page
$home = get_page_by_title('Welcome to CiviCRM with WordPress');
update_option('page_on_front', $home->ID);
update_option('show_on_front', 'page');
