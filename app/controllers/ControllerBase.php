<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{

    public function __initStatic(){
          $this->assets->addCss('/js/uploadify/uploadify.css');

          $this->assets
              ->addJs('/js/jquery/jquery-2.1.4.min.js',false,false)
              ->addJs('/js/uploadify/jquery.uploadify.min.js',false,false);

    }

    public function initialize(){
        if($this->config->application->user_login_form_cookies){
            $auth=$this->_getCookie('auth');
            if (!$auth) {
                $this->view->setVar('isLogin',0);
            } else {
                $nickname = $this->_getCookie('name');
                $account_type = $this->_getCookie('account_type');
                $user_id= $this->_getCookie('user_id');
                $this->view->setVar('isLogin',1);
                $this->view->setVar('nickname',$nickname);
                $this->view->setVar('account_type',$account_type);
                $this->view->setVar('user_id',$user_id);
            }
        }else{
            $auth = $this->session->get('auth');
            if (!$auth) {
                $this->view->setVar('isLogin',0);
            } else {
                $role =$auth['role'];
                $nickname = $auth['nickname'];
                $account_type =$auth['account_type'];
                $user_id= $auth['user_id'];
                $this->view->setVar('isLogin',1);
                $this->view->setVar('nickname',$nickname);
                $this->view->setVar('account_type',$account_type);
                $this->view->setVar('user_id',$user_id);
            }
        }
    }

    public function _isLogin(){
        if($this->config->application->user_login_form_cookies){
            $auth=$this->_getCookie('auth');
            if (!$auth) {
                return false;
            } else {
                return true;
            }
        }else{
            $auth = $this->session->get('auth');
            $auth=$this->_getCookie('auth');
            if (!$auth) {
                return false;
            } else {
                return true;
            }
        }
    }

    public function _setCookie($key,$value){
        $this->cookies->set($key,$value, time()+$this->config->application->cookie_remember_timeout);
    }

    public function _getCookie($key){
        if($this->cookies->has($key)){
            // 获取cookie
            $rememberMe = $this->cookies->get($key);

            // 获取cookie的值
            return   $value = $rememberMe->getValue();
        }
        else
            return false;
    }

}
