<?php

class UserController extends ControllerBase
{

    private $user_role = ['Common', 'Person', 'Company'];

    public function initialize()
    {
        parent::initialize();
    }

    public function loginAction()
    {
            if ($this->_isLogin()) {
                return  $this->response->redirect('/user/center');
                return $this->dispatcher->forward(array(
                    'controller' => 'user',
                    'action' => 'center'
                ));
            }
    }
    public function loginSubmitAction(){
        if ($this->request->isPost()) {

           // $type = $this->request->getPost('type');


            //Taking the variables sent by POST
//            $mobile = $this->request->getPost('mobile');
//            $email = $this->request->getPost('email');
            $account_id = $this->request->getPost('account_id');
            $password = $this->request->getPost('password');
            $img_verity=$this->request->getPost('img_verity');
            //$res=$this->checkVerity($img_verity);
//            if(!$res){
//                $this->flash->error('验证码错误');
//                return $this->dispatcher->forward(array(
//                    'controller' => 'user',
//                    'action' => 'login'
//                ));
//            }

            $mobile = $account_id;
            $email = $account_id;
            $ubm = new DtbUserBasic();
            $user = $ubm->login(0, $mobile, $email, $password);
            if ($user) {
                $this->_registerSession($user);
                $this->_registerCookie($user);
                //$this->cookies->set('role','Common',time()+86400,'/');
                $this->flash->success('Welcome ' . $user->getNickname());
               return  $this->response->redirect('/user/center');
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
            die('xxx');
        }
    }



    public function loginoutAction()
    {
        $this->_removeSession('auth');
        $this->_removeCookie();
        return  $this->response->redirect('/user/login');
        //return $this->dispatcher->forward(array("controller" => 'User', "action" => "login"));
    }


    public function registerAction()
    {
            if ($this->_isLogin()) {
                return $this->dispatcher->forward(array(
                    'controller' => 'user',
                    'action' => 'center'
                ));
            }

    }

    public function registerSubmitAction(){
        if ($this->request->isPost()) {
            $type = $this->request->getPost('type');

            $params = array();
            $ubm = new DtbUserBasic();
            $check_value = true;

            $password = $this->request->getPost('password');
            $nickname = $this->request->getPost('nickname');
            $img_verity=$this->request->getPost('img_verity');

           $res= $this->checkVerity($img_verity);
            if(!$res){
                $this->flash->error('验证码错误！！');
                return $this->dispatcher->forward(array(
                    'controller' => 'user',
                    'action' => 'register'
                ));
            }


            if ($type == 1) {
                //mobile
                $mobile = $this->request->getPost('mobile');
                $mobile_code = $this->request->getPost('mobile_code');

                if (!$this->_checkRegisterConditon($type,$mobile,'',$password,$mobile_code,$nickname)) {
                    echo "<a href='/user/register'>返回</a>";
                    $response = new Phalcon\Http\Response();
                    $this->response->redirect("/user/register");
                }

                $params = array(
                    'nickname' => $nickname,
                    'password' => md5($password),
                    'mobile' => $mobile,
                    'email'=>$mobile.'@test.com',
                    'reg_form'=>1,
                );

            } else {
                $email = $this->request->getPost('email');


                if (!$this->_checkRegisterConditon($type,'',$email,$password,'',$nickname)) {
                    echo "<a href='/user/register'>返回</a>";
                    $response = new Phalcon\Http\Response();
                    $response->redirect("/user/register");
                }

                //email

                $params = array(
                    'nickname' => $nickname,
                    'password' => md5($password),
                    'email' => $email,
                    'mobile' => '0',
                    'reg_form'=>2,
                );
            }

            $res = $ubm->register($user_id, $params,$type);
            if($res){
                $this->flash->success('注册成功，请登陆！');
                return $this->dispatcher->forward(array(
                    'controller' => 'user',
                    'action' => 'applyInvest'
                ));
            }

        }
    }


    /*
     * 申请成为投资人页面
     */
    public function applyInvestAction()
    {
        if (isset($_GET['user_id'])) {
            $user_id = trim($_GET['user_id']);
            $ubm = new DtbUserBasic();

           $user_data=$ubm->get($user_id);
            if(!$user_data|| $user_data->getAccountType()>0){
                die('value is invaild');
            }
            $this->view->user_id=$user_id;


        } else {
            die('value is invaild');
        }

    }

    /*
     * 申请个人投资人
     */
    public function applyPersonAction(){

        if (isset($_GET['user_id'])) {
            $user_id = trim($_GET['user_id']);
            $ubm = new DtbUserBasic();

            $user_data=$ubm->get($user_id);
            if(!$user_data|| $user_data->getAccountType()>0){
                die('value is invaild');
            }
            $this->view->user_id=$user_id;
            $this->view->tag_leader_show='<p>1.至少投资过一个项目，且金额大于20万以上;</p><p>2.至少有一次成功退出经历;</p>';

        } else {
            die('value is invaild');
        }
    }

    public function applyPersonSubmitAction(){
        if ($this->request->isPost()) {

            //图片上传
            $img_list=array();
            $project_log=array();
            list($img_list,$project_log) = $this->_upload_img();

            $user_id = $this->request->getPost('user_id');
            $params = array();
            $ubm = new DtbUserBasic();
            $uipm= new DtbInvestorPerson();
            $ilm= new DtbInvestLeaderCases();

            $user_data=$ubm->get($user_id);
            if(!$user_data|| $user_data->getAccountType()>0){
                die('value is invaild');
            }

            $real_name = $this->request->getPost('real_name');
            $identity_card = $this->request->getPost('identity_card');
            $prov = $this->request->getPost('prov');
            $city = $this->request->getPost('city');
            $dist = $this->request->getPost('dist');
            $address = $this->request->getPost('address');
           // $idc_img1 = $this->request->getPost('idc_img1');
            //$idc_img2 = $this->request->getPost('idc_img2');
            $idc_img1=isset($img_list['idc_img1'])?$img_list['idc_img1']:'';
            $idc_img2=isset($img_list['idc_img2'])?$img_list['idc_img2']:'';

            $income_y = $this->request->getPost('income_y');
            $company = $this->request->getPost('company');
            $position = $this->request->getPost('position');
            $person_fund = $this->request->getPost('person_fund');
            $singel_invest_range_start = $this->request->getPost('singel_invest_range_start');
            $singel_invest_range_end = $this->request->getPost('singel_invest_range_end');
            $invest_exp = $this->request->getPost('invest_exp');
            $attention_direct = $this->request->getPost('attention_direct');

            $invest_idea = $this->request->getPost('invest_idea');
            $available_extra_price = $this->request->getPost('available_extra_price');

            #案列
            $project_logo = $this->request->getPost('project_logo');
            $project_name = $this->request->getPost('project_name');
            $web_url = $this->request->getPost('web_url');
            $project_desc = $this->request->getPost('project_desc');




            $invest_person_info=$uipm->getDataByUserId($user_id);
            if($invest_person_info){
                die('用户已存在');
            }else{
                $params=array(
                   'real_name'=>$real_name,
                    'identity_card'=>$identity_card,
                    'idc_img1'=>$idc_img1,
                    'idc_img2'=>$idc_img2,
                    'country'=>'china',
                    'province'=>$prov,
                    'city'=>$city,
                    'dist'=>$dist,
                    'address'=>$address,

                    'income_y'=>$income_y,
                    'company'=>$company,
                    'position'=>$position,
                    'person_fund'=>$person_fund,
                    'singel_invest_range'=>json_encode(array($singel_invest_range_start,$singel_invest_range_end)),

                    'person_fund'=>$person_fund,
                    'invesrt_exp'=>json_encode($invest_exp),
                    'attention_direct'=>$attention_direct,
                    'invest_idea'=>$invest_idea,
                    'available_extra_price'=>$available_extra_price,

                );


                $res=$uipm->applyPerson($user_id,$params);
                if($res){

                    if($this->request->getPost('check_leader')==1){
                        //申请领头人
                        $project_name_list=$this->request->getPost('project_name');
                        $web_url_list=$this->request->getPost('web_url');
                        $project_desc_list=$this->request->getPost('project_desc');
                        $this->_add_leader_cases($user_id,$project_name_list,$web_url_list,$project_desc_list,$project_log);
                    }

                    $this->flash->success('认证成功');
                    return  $this->response->redirect('/user/center');
                    return $this->dispatcher->forward(array(
                        'controller' => 'user',
                        'action' => 'center'
                    ));
                }


            }




            $check_value = true;
        }
    }

    /*
     * 申请企业投资人
     */


    public function imgVerityAction(){
        $verity=new Verify();
        $verity->entry(1);

    }

    private function checkVerity($img_verity){
        $verity=new Verify();
       return $res=$verity->check($img_verity);
    }

    public function applyCompanyAction(){
        if (isset($_GET['user_id'])) {
            $user_id = trim($_GET['user_id']);
            $ubm = new DtbUserBasic();

            $user_data=$ubm->get($user_id);
            if(!$user_data|| $user_data->getAccountType()>0){
                die('value is invaild');
            }
            $this->view->user_id=$user_id;
            $this->view->tag_leader_show='<p>1.至少投资过一个项目，且金额大于20万以上;</p><p>2.至少有一次成功退出经历;</p>';

        } else {
            die('value is invaild');
        }
    }


    public function applyCompanySubmitAction(){
        if ($this->request->isPost()) {
            $user_id = $this->request->getPost('user_id');

            //图片上传
            $img_list=array();
            $project_log=array();
            list($img_list,$project_log) = $this->_upload_img();


            $params = array();
            $ubm = new DtbUserBasic();
            $uiom = new DtbInvestorOrgaization();
            $ilm = new DtbInvestLeaderCases();

            $user_data = $ubm->get($user_id);
            if (!$user_data || $user_data->getAccountType() > 0) {
                die('value is invaild');
            }

            $legal_name = $this->request->getPost('legal_name');
            $legal_identity_card = $this->request->getPost('legal_identity_card');

//            $legal_idc_img1 = $this->request->getPost('legal_idc_img1');
//            $legal_idc_img2 = $this->request->getPost('legal_idc_img2');
            $legal_idc_img1=isset($img_list['legal_idc_img1'])?$img_list['legal_idc_img1']:'';
            $legal_idc_img2=isset($img_list['legal_idc_img2'])?$img_list['legal_idc_img2']:'';


            $contact_name = $this->request->getPost('contact_name');
            $prov = $this->request->getPost('prov');
            $city = $this->request->getPost('city');
            $dist = $this->request->getPost('dist');
            $address = $this->request->getPost('address');

            $business_licence = $this->request->getPost('business_licence');
           // $bul_img = $this->request->getPost('bul_img');
            $bul_img=isset($img_list['bul_img'])?$img_list['bul_img']:'';

            $company = $this->request->getPost('company');

            $gold_fund = $this->request->getPost('gold_fund');

            $singel_invest_range_start = $this->request->getPost('singel_invest_range_start');
            $singel_invest_range_end = $this->request->getPost('singel_invest_range_end');

            $attention_direct = $this->request->getPost('attention_direct');

            $invest_idea = $this->request->getPost('invest_idea');
            $available_extra_price = $this->request->getPost('available_extra_price');

            #案列
            $project_logo = $this->request->getPost('project_logo');
            $project_name = $this->request->getPost('project_name');
            $web_url = $this->request->getPost('web_url');
            $project_desc = $this->request->getPost('project_desc');

            $invest_company_info = $uiom->getDataByUserId($user_id);
            if ($invest_company_info) {
                die('用户已存在');
            } else {
                $params = array(
                    'legal_name' => $legal_name,
                    'legal_identity_card' => $legal_identity_card,
                    'legal_idc_img1' => $legal_idc_img1,
                    'legal_idc_img2' => $legal_idc_img1,
                    'contact_name'=>$contact_name,

                    'country' => 'china',
                    'province' => $prov,
                    'city' => $city,
                    'dist' => $dist,
                    'address' => $address,
                    'business_licence'=>$business_licence,
                    'bul_img'=>$bul_img,
                    'gold_fund' => $gold_fund,
                    'company' => $company,
                    'singel_invest_range' => json_encode(array($singel_invest_range_start, $singel_invest_range_end)),

                    'attention_direct' => $attention_direct,
                    'invest_idea' => $invest_idea,
                    'available_extra_price' => $available_extra_price,

                );

                $res = $uiom->applyCompany($user_id, $params);
                if ($res) {

                    if($this->request->getPost('check_leader')==1){
                        //申请领头人
                        $project_name_list=$this->request->getPost('project_name');
                        $web_url_list=$this->request->getPost('web_url');
                        $project_desc_list=$this->request->getPost('project_desc');
                        $this->_add_leader_cases($user_id,$project_name_list,$web_url_list,$project_desc_list,$project_log);
                    }


                    $this->flash->success('认证成功');
                    return  $this->response->redirect('/user/center');
                    return $this->dispatcher->forward(array(
                        'controller' => 'user',
                        'action' => 'center'
                    ));
                }
            }
        }
        $check_value = true;
    }

    /*
     * 问题测试页面
     */

    public function applyTestAction(){




    }


    private function _add_leader_cases($user_id,$project_name_list,$web_url_list,$project_desc_list,$project_logo){
        $dtb_leader_cases=new DtbInvestLeaderCases();
        if(count($project_name_list)>0){
            $i=0;
            foreach($project_name_list as $v) {
                if(!empty($v)){
                    $dtb_leader_cases->user_id=$user_id;
                    $dtb_leader_cases->project_name=$v;
                    $dtb_leader_cases->web_url=$web_url_list[$i];
                    $dtb_leader_cases->project_desc=isset($project_desc_list[$i])?$project_desc_list[$i]:'';
                    $dtb_leader_cases->project_logo=isset($project_logo[$i])?$project_logo[$i]:'';
                   if($dtb_leader_cases->create()==false){
                       return false;
                   }

                }
                $i++;
            }
            return true;
        }

    }

    private function _upload_img(){
        $img_list=array();
        $project_logo=array();
        //图片上传
        if ($this->request->hasFiles()) {
            $i=0;
            // Print the real file names and sizes
            foreach ($this->request->getUploadedFiles() as $file) {
                $o_name= $file->getName();
                if($file->getKey()=='project_logo'){
                    if(empty($o_name))
                        //特殊处理
                        $project_logo[$i]='';
                    else{
                        $ext = pathinfo($file->getName(), PATHINFO_EXTENSION);
                        // Print file details
                        $file_name = sha1(time() . mt_rand(111111, 999999)) . "." . $ext;
                        $img_list[$file->getKey()]=$file_name;
                        $project_logo[$i]=$file_name;
                        //  $file->moveTo('files/' . $file_name);
                    }
                    $i++;

                }else{
                    if(!empty($o_name)){
                        $ext = pathinfo($file->getName(), PATHINFO_EXTENSION);
                        // Print file details
                        $file_name = sha1(time() . mt_rand(111111, 999999)) . "." . $ext;
                        $img_list[$file->getKey()]=$file_name;
                        // Move the file into the application
                        // $file->moveTo('files/' . $file->getName());
                        //  $file->moveTo('files/' . $file_name);

                    }
                }
            }
        }
        return array($img_list,$project_logo);
    }


    public function centerAction()
    {
        //用户中心；
        echo "hello,to center";
    }


    public function changePasswordAction()
    {
        if ($this->request->isPost()) {
            $user_id = $this->request->getPost('user_id');
            $old_password = $this->request->getPost('old_password');
            $new_password = $this->request->getPost('new_password');
            if (trim($old_password) == trim($new_password))
                $this->flash->error('新旧密码不能相同');
            $user_basic = new DtbUserBasic();
            $result = $user_basic->changePassword($user_id, md5($new_password));
            if ($result) {
                $this->flash->success('修改成功');
                return $this->dispatcher->forward(array(
                    'controller' => 'User',
                    'action' => 'center'
                ));
            } else
                $this->flash->error('修改失败');
        }
    }

    public function changeAvatarAction()
    {
        $this->__initStatic();
        if ($this->request->isPost()) {
            $user_id = $this->request->getPost('user_id');
            $avatar_url = $this->request->getPost('avatar_url');
            $user_basic = new DtbUserBasic();
            $result = $user_basic->changeAvatar($user_id, $avatar_url);
            if ($result) {
                $this->flash->success('修改成功');
                return $this->dispatcher->forward(array(
                    'controller' => 'User',
                    'action' => 'center'
                ));
            } else
                $this->flash->error('修改失败');
        }

    }

    private function _removeSession($key)
    {
        $this->session->remove($key);
    }

    private function _destroySession()
    {
        $this->session->destroy();

    }

    private function _removeCookie()
    {
        $this->cookies->get('auth')->delete();
        $this->cookies->get('user_id')->delete();
        $this->cookies->get('role')->delete();
        $this->cookies->get('account_type')->delete();
        $this->cookies->get('nickname')->delete();
    }

    //检测创建账号和绑定账号时的共有参数
    private function _checkRegisterConditon($type, $mobile, $email, $password, $mobile_code, $nickname = null)
    {
        $ubm = new DtbUserBasic();
        $check_value = true;
        if ($type == 1) {
            if (!$ubm->checkMobile($mobile)) {
                $this->flash->error('手机号码不合法');
              return   $check_value = false;
            }


//        $mm = new MobileModel();
//        $code_data = $mm->getDataByMobile($mobile, 'code, expire_ts');

//        if(!$code_data || $code_data['code'] != $code){
//            $this->_return('MSG_CODE_ERROR');
//        }
//        $now = time();
//        if($now > $code_data['expire_ts']){
//            $this->_return('MSG_CODE_EXPIRED');
//        }
            $user_data = $ubm->getDataByMobile($mobile, 'user_id');
            if ($user_data) {
                $this->flash->error('手机已存在');
                return   $check_value = false;
            }
        } else {
            if (!$ubm->checkEmail($email)) {
                $this->flash->error('邮箱不合法');
                return  $check_value = false;
            }
            $user_data = $ubm->getDataByEmail($email, 'user_id');
            if ($user_data ) {
                $this->flash->error('邮箱已存在');
                return  $check_value = false;
            }

        }

        if ($nickname !== null) {
            if (!$ubm->checkNickName($nickname)) {
                $this->flash->error('昵称不合法');
                return $check_value = false;
            }

//            if(switchBlockWord($nickname) != $nickname){
//                //$this->_return('NICKNAME_HAS_BLOCK_WORD');
//            }
            $user_data = $ubm->getDataByNickname($nickname, 'user_id');
            if ($user_data) {
                $this->flash->error('昵称已存在');
                return  $check_value = false;
            }
        }


        if (strlen($password) < 6) {
            $this->flash->error('密码要大于6位');
            return   $check_value = false;
        }

        return $check_value;
    }

    private function _registerSession($user)
    {
        $auth_arr = $this->_combineAuth($user);
        $this->session->set('auth', $auth_arr);
    }

    private function _combineAuth($user)
    {
        return $auth_arr = array(
            'user_id' => $user->user_id,
            'name' => $user->nickname,
            'account_type' => $user->account_type,
            'role' => $this->user_role[$user->account_type],
        );
    }

    private function _registerCookie($user)
    {
        //$auth_arr=$this->_combineAuth($user);
        //return setcookie('auth',$auth_arr,time()+2*86400);
        $this->_setCookie('auth', $user->user_id);
        $this->_setCookie('user_id', $user->user_id);
        $this->_setCookie('role', $this->user_role[$user->account_type]);
        $this->_setCookie('account_type', $user->account_type);
        $this->_setCookie('nickname', $user->nickname);
        return true;
    }


}

