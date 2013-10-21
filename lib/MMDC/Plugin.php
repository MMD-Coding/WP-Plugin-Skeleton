<?php

namespace MMDC;

class Plugin {

    public function __construct() {
        // Set up activation hooks
        register_activation_hook(MMDC_PLUGIN_PATH . 'my_plugin.php', array($this, 'activate'));
        register_deactivation_hook(MMDC_PLUGIN_PATH . 'my_plugin.php', array($this, 'deactivate'));

        // Session init
        add_action('init', array($this, 'sessionStart'), 1);

        // Plugin init
        add_action('init', array($this, 'init'));
    }

    public function activate($network_wide) {
        // create your database or something
    }

    public function deactivate($network_wide) {
        // drop your database or something
    }

    /**
     * Main function.
     *
     * Initializes plugin controllers by setting shortcodes
     */
    public function init() {
        // instatiate controllers
        $this->indexController = new \MMDC\Controller\Index();

        // Go wordpress, go!
        $this->addShortcodes();
    }

    /**
     * Init session
     */
    public function sessionStart() {
        if (!session_id()) {
            session_start();
        }
    }

    /**
     * Defines shortcodes and delegates to controllers
     */
    private function addShortcodes() {
        // set [mmdc_index_index] shortcode as entry point
        add_shortcode('mmdc_index_index', array(&$this->indexController, 'indexAction'));
    }

}