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
                $nickname = $this->_getCookie('nickname');
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

    function _getBusTypeList(){
        $type_info= DtbBustype::find();
        $type_list=array();
        foreach ( $type_info as $v) {
            if($v->pid==0){
                $type_list[$v->type_id]['name']=$v->name;
            }else{
                $type_list[$v->pid]['children'][]=array('type_id'=>$v->type_id,'name'=>$v->name);
            }
        }
        return $type_list;
    }

     function getTypePid($type_list,$project_type){
        $pid=0;
        foreach($type_list as $k=>$v){
            foreach ( $v['children'] as $type_info) {
                if($type_info['type_id']==$project_type){
                    $pid=$k;
                }
            }
        }
        return $pid;
    }




    protected function getUserProject(){
        $user_id=$this->_getCookie('user_id');
        $dtb_raise_project_basic=DtbRaiseProjectBasic::findFirst(
            array(
                "conditions" => "user_id = :user_id:  ",
                "bind"       => array("user_id" => $user_id),
                "order"=>'raise_id desc'
            ));

        return $dtb_raise_project_basic;
    }

    function _split_page($current,$total,$split=5){
        $data=array('start'=>0,'end'=>0,'now_split'=>0,'total_split'=>0);
        if($total<1)
            return $data;
        $total_split=ceil($total/$split);
        $now_split=ceil($current/$split);
        $start=intval(($now_split-1)*$split+1);
        if($now_split==$total_split){
            $end=$total;
        }else{
            $end=$now_split*$split;
        }

        $data=array('start'=>$start,'end'=>$end,'now_split'=>$now_split,'total_split'=>$total_split);
        return $data;
    }

}
