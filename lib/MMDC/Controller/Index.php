<?php

namespace MMDC\Controller;
use MMDC\Helper;

/**
 * Index controller
 *
 */
class Index
{

    /**
     * Template Engine
     *
     * @var \Twig_Environment
     */
    private $twig;


    /**
     * Constructor
     *
     * Loads twig library
     */
    public function __construct()
    {
        // initialize Twig Template Engine
        $this->twig = Helper\TwigHelper::getTwig();

        // add controller specific javascripts
        add_action('wp_enqueue_scripts', array(
                &$this,
                'addJS'));
    }


    /**
     * Adds controller specific JavaScript.
     * Uses WP functions to enqueue scripts or css
     *
     * Action hook @see __construct
     */
    public function addJS()
    {

        // load jquery
        wp_enqueue_script('jquery');
        
        // load your scripts
        //$jsPath = MMDC_TEMPLATE_URL.'js/';
        //wp_enqueue_script('my_script', $jsPath . '/script.js', 'jquery');
    }


    /**
     * Sample action
     *
     * Shortcode hook @see Plugin::init()
     *
     * @return   String   HTML output
     */
    public function indexAction()
    {
        // load some models
        $entry = new \MMDC\Model\Entry();

        // render output
        return $this->twig->render('index_index.twig', compact('entry'));
    }
}