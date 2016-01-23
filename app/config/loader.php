<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
    array(
        $config->application->controllersDir,
        $config->application->modelsDir
    )



);

$loader->registerNamespaces(array(
    //"Beanstalk" => 'vendor/beanstalk/',
    'Phalcon' => '/var/www/html/goldenlight/incubator/Phalcon/',
));

$loader->register();
