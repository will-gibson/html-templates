/*
The WordPress Admin Bar provides handy links to several key functions such as the ability to add new posts and pages, etc.
However, if you find no use for it and wish to remove it, simply paste the following code snippet to your functions.php file:
*/


// Remove the admin bar from the front end
add_filter( 'show_admin_bar', '__return_false' );
