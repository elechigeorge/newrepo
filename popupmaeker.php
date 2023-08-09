<?php
/**
 * Plugin Name: Popup Maeker
 * Plugin URI: https://pupupmaeker.com.ng/
 * Description: Create beautiful popups on your store.
 * Version: 1.0.0
 * Author: Popup Maeker Ltd.
 * Author URI: https://pupupmaeker.com.ng/
 * Text Domain: popupmaker
 * WC requires at least: 3.0
 * WC tested up to: 7.7.0
 * Elementor tested up to: 3.12.2
 *
 * @package     PopupMaeker
 * @author      Elechi W. George
 * @copyright   Copyright (c) 2023, Popup Maeker LLC
 */

//  Close backdoor
if (!defined('ABSPATH')) {
    die('Plugin Backdoor, Back-Off!');
}

if(!class_exists('Popup_Maker')) {
    class Popup_Maker {



        public function __construct () {

            define('PLUGIN_PATH', plugin_dir_path(__FILE__));

        }

        public function initialize() {




            register_activation_hook(__FILE__, array($this, 'popup_maeker_plugin_activate'));
        }

        public function popup_maeker_plugin_activate() {
            // Call hooks on plugin activate
        }

        public function popup_maeker_plugin_deactivate() {
            // Call hooks on plugin de-activate
        }

        private function includes() {
    
            // Initialize global options
            PUM_Utils_Options::init();
    
            /** Loads most of our core functions */
            require_once PLUGIN_PATH . 'includes/functions.php';
    
            /** Deprecated functionality */

        }
        
    }
}