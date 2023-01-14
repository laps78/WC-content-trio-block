<?PHP
  /**
 * Plugin Name: Test Plugin
 * Author: John Doe
 * Version: 1.0.0
 */

function loadMyContentTrioBlock() {
  wp_enqueue_script(
    'my-new-block',
    plugin_dir_url(__FILE__) . 'WP-content-trio-block.js',
    array('wp-blocks','wp-editor'),
    true
  );
}

add_action('enqueue_block_editor_assets', 'loadMyContentTrioBlock');
?>