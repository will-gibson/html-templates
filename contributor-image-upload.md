Allows contributor accounts to upload images to their articles, without granting them any additional privileges or rights. Paste it in the functions.php file of your theme.

```
if ( current_user_can('contributor') && !current_user_can('upload_files') )
     add_action('admin_init', 'allow_contributor_uploads');      
     function allow_contributor_uploads() {
          $contributor = get_role('contributor');
          $contributor->add_cap('upload_files');
     }
```
