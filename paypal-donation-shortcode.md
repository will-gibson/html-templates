If you are using the PayPal Donate function to accept donations from your website’s visitors, you can use this code snippet to create a shortcode, and thus make donating easier.

First, paste the following in your functions.php file:

```
function donate_shortcode( $atts, $content = null) {
global $post;extract(shortcode_atts(array(
'account' => 'your-paypal-email-address',
'for' => $post->post_title,
'onHover' => '',
), $atts));
if(empty($content)) $content='Make A Donation';
return '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business='.$account.'&item_name=Donation for '.$for.'" title="'.$onHover.'">'.$content.'</a>';
}
add_shortcode('donate', 'donate_shortcode');
```

Then, you can easily use the [donate] shortcode, such as:

```
[donate]My Text Here[/donate]
```
