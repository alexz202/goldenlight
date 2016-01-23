<?php
/**
 * Created by PhpStorm.
 * User: alexzhu
 * Date: 14-8-15
 * Time: 下午6:39
 */
//use Phalcon\Logger\Adapter;
//use Phalcon\Logger\AdapterInterface;

class Mylog extends Phalcon\Logger\Adapter
{

    protected $_dependencyInjector;
    protected $_usebeanstalk;

    public function __construct($dependencyInjector, $usebeanstalk)
    {
        $this->_dependencyInjector = $dependencyInjector;
        $this->_usebeanstalk = $usebeanstalk;
    }

    /**
     * @param $type
     * @param $message
     * @param array $context
     * action
     */
    public function log($type, $message, array $context = NULL)
    {
        $logger = new Logger();
        if ($this->_usebeanstalk) {
            //check beanstalk connect
            try{
                $this->_dependencyInjector['beanstalk']->connect();
            }catch (Exception $err){
                $this->_usebeanstalk = 0;
            }
        }
        if ($this->_usebeanstalk) {
            //USE BEANSTALK QUEUE
            $logcontext = array(
                'controll' => $context['controll'],
                'action' => $context['action'] . 'manager',
                'username' => $context['username'],
                'deltype' => isset($context['deltype']) ? $context['deltype'] : 0,
                'results' => isset($context['results']) ? $context['results'] : 0,
                'updatetime' => date('Y-m-d H:i:s'),
            );
            $arr = array('username' => $context['username'],
                'msg' => $message,
                'loggerlist' => $logcontext,
            );
            $json_arr = json_encode($arr);
            $this->_dependencyInjector['beanstalk']->putInTube('addLogger', $json_arr, array('delay' => 2));
            return true;
        } else {
            $logger->controll = $context['controll'];
            $logger->action = $context['action'];
            $logger->results = isset($context['results']) ? $context['results'] : 0;
            $logger->username = $context['username'];
            $logger->deltype = isset($context['deltype']) ? $context['deltype'] : 0;
            $logger->updatetime = date('Y-m-d H:i:s');
            $logger->msg = $message;
            if (!$logger->save()) {
                $message = ' add log error:' . $message . '|' . join('|', $context);
                $logger = new \Phalcon\Logger\Adapter\File("../app/logs/error.log");
                $logger->log($message);
                return false;
            } else
                return true;
        }
    }

//    public function setFormatter($formatter = '')
//    {
//    }

    public function setLogLevel($leve = 0)
    {
    }

    public function getLogLevel()
    {
    }

    public function begin()
    {
    }

    public function commit()
    {
    }

    public function rollback()
    {
    }

    public function close()
    {
    }

    public function debug($message, array $context = NULL)
    {
    }

    public function info($message, array $context = NULL)
    {
    }

    public function notice($message, array $context = NULL)
    {
    }

    public function warning($message, array $context = NULL)
    {
    }

    public function error($message, array $context = NULL)
    {
    }

    public function critical($message, array $context = NULL)
    {
    }

    public function alert($message, array $context = NULL)
    {
    }

    public function emergency($message, array $context = NULL)
    {
    }

    public function logInternal($message, $type, $time, $context)
    {
    }

    public function getFormatter()
    {
    }
}