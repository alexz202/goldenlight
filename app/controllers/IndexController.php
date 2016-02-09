<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        var_dump($this->config->application->cookie_remember_timeout);
        die();

//        $ubm=new DtbUserBasic();
//        $params=array(
//            'nickname'=>'zjy202',
//            'password'=>md5('159357123!@#'),
//            'mobile'=>'15618952231',
//            'email'=>'15618952231@hotmail.com',
//        );
//
//        echo 1;
//        $res=$ubm->register($user_id,$params);
//        var_dump($res);
//
//        exit();

    }

    public function testAction(){
        var_dump($this->di['log']);
    }

}

