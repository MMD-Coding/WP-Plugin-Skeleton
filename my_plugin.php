<?php

/*
  Plugin Name: <YOUR PLUGIN NAME>
  Description: <YOUR PLUGIN DESCRIPTION>
  Author: <YOUR NAME> <email@example.com>
  Version: 0.1
 */

// composer autoloader
require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';

// settings

define('MMDC_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('MMDC_PLUGIN_URL', plugin_dir_url(__FILE__));

define('MMDC_TEMPLATE_PATH', MMDC_PLUGIN_PATH . 'templates/');
define('MMDC_TEMPLATE_URL', MMDC_PLUGIN_URL . 'templates/');


new \MMDC\Plugin();