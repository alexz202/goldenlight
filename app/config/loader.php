<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */

$loader->registerDirs(
    array(
        $config->application->controllersDir,
        $config->application->modelsDir,
        $config->application->viewsDir,
        $config->application->libraryDir,
        $config->application->pluginsDir,
         $config->application->langDir,
        $config->application->vendorDir,
    )



);

$loader->registerNamespaces(array(
    //"Beanstalk" => 'vendor/beanstalk/',
    'Phalcon' => '/var/www/html/goldenlight/incubator/Phalcon/',
));

$loader->register();
