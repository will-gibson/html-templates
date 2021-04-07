By default, WordPress shows author profiles as yoursite.com/author/name. However, you can change it to anything that you like, such as yoursite.com/writer/name

The following code snippet needs to be pasted in the functions.php file. Then, it changes the author permalink structure to “/profile/name”:

```
add_action('init', 'cng_author_base');
function cng_author_base() {
    global $wp_rewrite;
    $author_slug = 'profile'; // change slug name
    $wp_rewrite->author_base = $author_slug;
}
```
