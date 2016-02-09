<?php

class UserController extends ControllerBase
{

    private  $user_role=['Common','Person','Company'];

    public function loginAction(){
        if ($this->request->isPost()) {
            $type=$this->request->getPost('type');

            //Taking the variables sent by POST
//            $mobile = $this->request->getPost('mobile');
//            $email = $this->request->getPost('email');
            $account_id=$this->request->getPost('account_id');
            $password = $this->request->getPost('password');
            $mobile=$account_id;
            $email=$account_id;
            $ubm = new DtbUserBasic();
            $user = $ubm->login(0, $mobile, $email, $password);
            if ($user) {
                $this->_registerSession($user);
                $this->_registerCookie($user);
                //$this->cookies->set('role','Common',time()+86400,'/');
                $this->flash->success('Welcome ' . $user->getNickname());
                return $this->dispatcher->forward(array(
                    'controller' => 'user',
                    'action' => 'center'
                ));
            } else {
                $this->flash->error('Wrong user/password');
                return $this->dispatcher->forward(array(
                    'controller' => 'user',
                    'action' => 'login'
                ));
            }
        }else{
//            $_COOKIE['tt']=1;
//            setcookie('tt','1',time()+86400);
           // exit();
        //default show
        }
    }

    public function registerAction()
    {
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

    public function registerSubmitAction(){

    }

    public function loginSubmitAction(){

        if ($this->request->isPost()) {
            $type=$this->request->getPost('type');

            //Taking the variables sent by POST
            $mobile = $this->request->getPost('mobile');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $ubm = new DtbUserBasic();
            $user = $ubm->login($type, $mobile, $email, $password);
            if ($user) {
                $this->_registerSession($user);
                $this->flash->success('Welcome ' . $user->getNickname());
                return $this->dispatcher->forward(array(
                    'controller' => 'User',
                    'action' => 'center'
                ));
            } else {
                $this->flash->error('Wrong user/password');
            }
//            return $this->dispatcher->forward(array(
//                'controller' => 'User',
//                'action' => 'index'
//            ));
        }else{

        }

    }

    public function loginoutAction(){
        $this->_removeSession('auth');
        return $this->dispatcher->forward(array("controller"=>'User',"action"=>"index"));
    }


    private function _registerSession($user)
    {
        $auth_arr=$this->_combineAuth($user);
        $this->session->set('auth',$auth_arr );
    }

    private function _combineAuth($user){
        return $auth_arr=array(
            'user_id' => $user->user_id,
            'name' => $user->nickname,
            'account_type' => $user->account_type,
            'role'=>$this->user_role[$user->account_type],
        );
    }

    private function _registerCookie($user){
        //$auth_arr=$this->_combineAuth($user);
        //return setcookie('auth',$auth_arr,time()+2*86400);
        $this->_setCookie('auth',$user->user_id);
        $this->_setCookie('user_id',$user->user_id);
        $this->_setCookie('role',$user->role);
        $this->_setCookie('account_type',$user->account_type);
        $this->_setCookie('name',$user->name);
        return true;
    }



    public function centerAction(){
          //用户中心；
          echo "hello,to center";
    }


    public function changePasswordAction(){
        if ($this->request->isPost()) {
            $user_id=$this->request->getPost('user_id');
            $old_password=$this->request->getPost('old_password');
            $new_password=$this->request->getPost('new_password');
            if(trim($old_password)==trim($new_password))
                $this->flash->error('新旧密码不能相同');
            $user_basic = new DtbUserBasic();
           $result= $user_basic->changePassword($user_id, md5($new_password));
            if($result){
                $this->flash->success('修改成功');
                return $this->dispatcher->forward(array(
                    'controller' => 'User',
                    'action' => 'center'
                ));
            }
            else
                $this->flash->error('修改失败');
        }
    }

    public function changeAvatarAction(){
        $this->__initStatic();
        if ($this->request->isPost()) {
            $user_id=$this->request->getPost('user_id');
            $avatar_url=$this->request->getPost('avatar_url');
            $user_basic = new DtbUserBasic();
            $result= $user_basic->changeAvatar($user_id, $avatar_url);
            if($result){
                $this->flash->success('修改成功');
                return $this->dispatcher->forward(array(
                    'controller' => 'User',
                    'action' => 'center'
                ));
            }
            else
                $this->flash->error('修改失败');
        }

    }

    private function _removeSession($key){
        $this->session->remove($key);
    }
    private function _destroySession(){
        $this->session->destroy();

    }

    private function _removeCookie($key){
        $this->cookies->get($key)->delete();
    }

    private function _setCookie($key,$value){
        $this->cookies->set($key,$value, time()+$this->config->application->cookie_remember_timeout);
    }

    private function _getCookie($key){
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

