If you wish to show post thumbnail images in your blog’s RSS feed, the following code snippet for WordPress can be useful.

Place it in your functions.php file:

```
// Put post thumbnails into rss feed
function wpfme_feed_post_thumbnail($content) {
global $post;
if(has_post_thumbnail($post->ID)) {
$content = '' . $content;
}
return $content;
}
add_filter('the_excerpt_rss', 'wpfme_feed_post_thumbnail');
add_filter('the_content_feed', 'wpfme_feed_post_thumbnail');
```
