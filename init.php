<?php
/**
 * Plugin name: An Easy Skype Button
 * Plugin URI: https://github.com/octopus-digital-strategy/an-easy-skype-button
 * Description: A really simple plugin to create a Skype button with a short code.
 * Version: 0.1
 * Author: Page-Carbajal
 * Author URI: http://pagecarbajal.com
 * Tags: bare-bones-plugin, wp-express
 */

// No direct access to this file
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Composer implementation
require_once('vendor/autoload.php');

// Instance the Setup
new \AnEasySkypeButton\Setup();


if( !function_exists('anEasySkypeButton') ){

// Courtesy function
    function anEasySkypeButton()
    {
        echo AnEasySkypeButton\Shortcodes::renderSkypeButton();
    }

}