<?php
/**
 * Services are globally registered in this file
 *
 * @var \Phalcon\Config $config
 */

use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Url as UrlResolver;
use Phalcon\Mvc\View\Engine\Volt as VoltEngine;
use Phalcon\Mvc\Model\Metadata\Memory as MetaDataAdapter;
use Phalcon\Session\Adapter\Files as SessionAdapter;
//use Phalcon\Http\Cookies;

//use Phalcon\Queue\Beanstalk\Extended as BeanstalkExtended;
use Phalcon\Cache\Backend\RedisEx as RedisExtend;
use Phalcon\Assets\Manager as AssetsManager;

//use Phalcon\Crypt;

/**
 * The FactoryDefault Dependency Injector automatically register the right services providing a full stack framework
 */
$di = new FactoryDefault();

/**
 * The URL component is used to generate all kind of urls in the application
 */
$di->setShared('url', function () use ($config) {
    $url = new UrlResolver();
    $url->setBaseUri($config->application->baseUri);

    return $url;
});

/**
 * Setting up the view component
 */
$di->setShared('view', function () use ($config) {

    $view = new View();

    $view->setViewsDir($config->application->viewsDir);

    $view->registerEngines(array(
        '.volt' => function ($view, $di) use ($config) {

            $volt = new VoltEngine($view, $di);

            $volt->setOptions(array(
                'compiledPath' => $config->application->cacheDir,
                'compiledSeparator' => '_'
            ));

            return $volt;
        },
        '.phtml' => 'Phalcon\Mvc\View\Engine\Php'
    ));

    return $view;
});

/**
 * Database connection is created based in the parameters defined in the configuration file
 */
$di->setShared('db', function () use ($config) {
    $dbConfig = $config->database->toArray();
    $adapter = $dbConfig['adapter'];
    unset($dbConfig['adapter']);

    $class = 'Phalcon\Db\Adapter\Pdo\\' . $adapter;

    return new $class($dbConfig);
});

/**
 * If the configuration specify the use of metadata adapter use it or use memory otherwise
 */
$di->setShared('modelsMetadata', function () {
    return new MetaDataAdapter();
});

/**
 * Start the session the first time some component request the session service
 */
$di->setShared('session', function () {
    $session = new SessionAdapter();
    $session->start();

    return $session;
});

$di->set('cookies', function() {
    $cookies = new Phalcon\Http\Response\Cookies();
    $cookies->useEncryption(false);
    return $cookies;
});

$di->set('crypt', function() {
    $crypt = new Phalcon\Crypt();
    $crypt->setKey('#_+//*(*&eA|;76$');
    return $crypt;
});




$di->set('dispatcher', function () use ($di) {

    //Obtain the standard eventsManager from the DI
    $eventsManager = $di->getShared('eventsManager');

    //Instantiate the Security plugin
    $security = new Security($di);

    //Listen for events produced in the dispatcher using the Security plugin
    $eventsManager->attach('dispatch', $security);

    $dispatcher = new Phalcon\Mvc\Dispatcher();

    //Bind the EventsManager to the Dispatcher
    $dispatcher->setEventsManager($eventsManager);

    return $dispatcher;

});


//$di->set('crypt', function () {
//    $crypt = new Crypt();
//
//    $crypt->setKey('!@#gold-light!@#'); // 使用你自己的key！
//
//    return $crypt;
//});


//
//$di->set('modelsCache', function () {
//    $frontcache = new \Phalcon\Cache\Frontend\Data(array(
//        'lifetime' => 86400
//    ));
//    $cache = new \Phalcon\Cache\Backend\Memcache($frontcache, array(
//        'host' => "localhost",
//        'post' => '11211',
//    ));
//
//    return $cache;
//
//});


////translate
//$di->set('translate', function () use ($config) {
//    $translate = new Gettext(array(
//        'locale' => $config->translate->lang,
//        'file' => $config->translate->file,
//        'directory' => $config->application->langDir,
//    ));
//    return $translate;
//});
//
////beanstalkd
//$di->set('beanstalk',function () use($config){
//    $beanstalk = new BeanstalkExtended(array(
//        'host'   => $config->beanstalkd->host,
//        'prefix' => $config->beanstalkd->prefix,
//    ));
//    return $beanstalk;
//});


//redis
$di->set('redis',function() use($config){
    if($config->redis->isredis){
        $redis=new Redis();
        $redis->connect($config->redis->host,$config->redis->port);
        $frontcache = new \Phalcon\Cache\Frontend\Data(array(
            'lifetime' => 86400
        ));
        $cache = new RedisExtend($frontcache, array(
            'redis'=>$redis
        ));
        return $cache;
    }
    else
        return false;
});


$di->set('config',function() use($config){
    return $config;
});


$di->set('assets',function(){
     return new AssetsManager();
});
