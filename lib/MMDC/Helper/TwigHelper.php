<?php

namespace MMDC\Helper;

/**
 * TwigHelper is a singleton helper for 
 * Twig template engine
 * 
 */
class TwigHelper
{

    /**
     * Singleton instance
     * 
     * @var Twig_Environment 
     */
    private static $instance;


    /**
     * Sorry no constructor for you...
     */
    private function __construct()
    {
        
    }


    /**
     * Get me my damn SINGLETON!
     * 
     * @return Twig_Environment
     */
    public static function getTwig()
    {
        if (!isset(self::$instance)) {

            // initialize Twig Template Engine
            $loader = new \Twig_Loader_Filesystem(MMDC_TEMPLATE_PATH);
            $twig = new \Twig_Environment($loader, array(
                    //'cache' => MMDC_TEMPLATE_PATH . 'cache',
                    'cache' => false,
            ));

            self::$instance = $twig;
        }

        return self::$instance;
    }
}