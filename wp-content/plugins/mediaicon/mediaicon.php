<?php
/*
Plugin name: WordPress MediaICON
Plugin URI: http://github.com/withmasday
Description: A simple plugin to inital social media icon
Author: @withmasday
Author URI: http://github.com/withmasday
Version: 0.5
*/

add_action('admin_menu', 'wp_media_icon');

function wp_media_icon(){
  $page_title = 'Wordpress MediaIcon';
  $menu_title = 'MediaIcon';
  $capability = 'manage_options';
  $menu_slug  = 'media-icon';
  $function   = 'media_icon';
  $icon_url   = 'dashicons-media-code';
  $position   = 4;

  add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position);

  // add to db with call media_icon_setup function
  add_action('admin_init', 'media_icon_setup');
}

// Create function to register plugin settings in the database
function media_icon_setup() {
  register_setting('media-icon-fields', 'mdi_instagram');
  register_setting('media-icon-fields', 'mdi_facebook');
  register_setting('media-icon-fields', 'mdi_address');
}

// Create WordPress plugin page
function media_icon(){
?>
  <h1>Wordpress MediaICON</h1>
  <form method="post" action="options.php">
    <?php settings_fields( 'media-icon-fields' ); ?>
    <?php do_settings_sections( 'media-icon-fields' ); ?>
    <table class="form-table">
      <tr valign="top">
        <th scope="row">Username Instagram</th>
        <td><input type="text" name="mdi_instagram" value="<?php echo get_option('mdi_instagram'); ?>"/></td>
      </tr>
      <tr valign="top">
        <th scope="row">Username Facebook</th>
        <td><input type="text" name="mdi_facebook" value="<?php echo get_option('mdi_facebook'); ?>"/></td>
      </tr>
      <tr valign="top">
        <th scope="row">Maps Embed</th>
        <td>
          <textarea name="mdi_address" style="width: 300px; height:200px;">
            <?php
              $value = get_option('mdi_address');
              echo htmlspecialchars($value);
            ?>
          </textarea>
        </td>
      </tr>
    </table>
  <?php submit_button(); ?>
  </form>
<?php
}

// get_option('extra_post_info');
?>