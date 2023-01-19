<?php
/**
 * Plugin Name: Test js
 * Plugin URI: https://somedevtips.com/
 * Description: Test JS.
 * Version: 1.0
 * Author: SomeDevTips
 * Author URI: https://somedevtips.com/
 * License: GPL2+
 * Text Domain: test-js
 * Domain Path: /languages/
 */

use Somedevtips\TestJs\Bootstrapper;

defined( 'ABSPATH' ) OR die;

$someDevTipsTestJsAutoloader = __DIR__ . '/vendor/autoload.php';
if (!file_exists($someDevTipsTestJsAutoloader)) {
    return false;
}
require $someDevTipsTestJsAutoloader;

$someDevTipsTestJsBootstrapper = new Bootstrapper(plugin_dir_url( __FILE__ ));
add_action('plugins_loaded', [$someDevTipsTestJsBootstrapper, 'bootstrap'], 0);
