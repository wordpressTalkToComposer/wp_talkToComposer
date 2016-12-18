<?php
/**
 * @license   http://www.opensource.org/licenses/mit-license.php MIT-License
 * @since     06.11.2015
 * @link      http://github.com/WordpressTalkToComposer/wp_talktocomposer
 * Plugin Name: Talk to Composer
 * Plugin URI: https://github.com/WordpressTalkToComposer/wp_talkToComposer
 * Description: Register your currently active plugins with composer
 * Version: 1.1.2
 * Author: Andreas Heigl <a.heigl@wdv.de>
 * Author URI: http://andreas.heigl.org
 */
require_once 'src/TalkToComposer.php';
$talkToComposer = new Org_Heigl\Wordpress\Plugins\TalkToComposer();

add_action('activated_plugin', [$talkToComposer, 'activatePlugin'], 10, 2);
add_action('activate_plugin', [$talkToComposer, 'activateSelf'], 10, 2);
add_action('deactivated_plugin', [$talkToComposer, 'deactivatePlugin'], 10, 2);
add_action('switch_theme', [$talkToComposer, 'switchTheme'], 10, 2);
