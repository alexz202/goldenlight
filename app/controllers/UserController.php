<?php

class UserController extends ControllerBase
{

    public function indexAction(){

    }

    public function registerAction()
    {
        $ubm=new DtbUserBasic();
        $params=array(
            'nickname'=>'zjy202',
            'password'=>md5('159357123!@#'),
            'mobile'=>'15618952231',
            'email'=>'15618952231@hotmail.com',
        );

        echo 1;
        $res=$ubm->register($user_id,$params);
        var_dump($res);

        exit();

    }

    public function loginAction(){

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
            return $this->dispatcher->forward(array(
                'controller' => 'User',
                'action' => 'index'
            ));
        }

    }

    public function loginoutAction(){
        $this->_removeSession('auth');
        return $this->dispatcher->forward(array("controller"=>'User',"action"=>"index"));
    }


    private function _registerSession($user)
    {
        $this->session->set('auth', array(
            'user_id' => $user->user_id,
            'name' => $user->nickname,
            'account_type' => $user->account_type
        ));
    }



    public function centerAction(){
          //用户中心；

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






}

