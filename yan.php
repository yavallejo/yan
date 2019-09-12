<?php
/**
 * Plugin Name:       Yan
 * Plugin URI:        https://aprendiendoando.com/plugins/yan
 * Description:       Yan Plugin Demo
 * Version:           1.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Yan Arlex Vallejo 
 * Author URI:        https://aprendiendoando.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/aprendiendoando/yan',
	__FILE__,
	'yan'
);

$myUpdateChecker->getVcsApi()->enableReleaseAssets();


