<?php


use Phalcon\Mvc\Model\Validator\Email as Email;
use Phalcon\Mvc\Model\Query;


class DtbUserBasic extends \Phalcon\Mvc\Model
{


    public function initialize(){
        $this->hasOne('invite_code','DtbInviteCode','invite_code');
    }

    /**
     *
     * @var string
     */
    public $user_id;

    /**
     *
     * @var integer
     */
    protected $account_type;

    /**
     *
     * @var string
     */
    protected $mobile;

    /**
     *
     * @var string
     */
    protected $email;

    /**
     *
     * @var string
     */
    protected $password;

    /**
     *
     * @var string
     */
    protected $nickname;

    /**
     *
     * @var string
     */
    protected $avatar_url;

    /**
     *
     * @var string
     */
    protected $update_ts;

    /**
     *
     * @var integer
     */
    protected $create_ts;

    /**
     *
     * @var string
     */
    protected $country;

    /**
     *
     * @var string
     */
    protected $birthday;

    /**
     *
     * @var string
     */
    protected $address1;

    /**
     *
     * @var string
     */
    protected $address2;

    /**
     *
     * @var string
     */
    protected $postcode;


    /**
     *
     * @var string
     */
    protected $city;

    /**
     *
     * @var integer
     */
    protected $invite_code;

    /**
     *
     * @var string
     */
    protected $sate;

    /**
     * Method to set the value of field user_id
     *
     * @param string $user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Method to set the value of field account_type
     *
     * @param integer $account_type
     * @return $this
     */
    public function setAccountType($account_type)
    {
        $this->account_type = $account_type;

        return $this;
    }

    /**
     * Method to set the value of field mobile
     *
     * @param string $mobile
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Method to set the value of field email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Method to set the value of field password
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Method to set the value of field nickname
     *
     * @param string $nickname
     * @return $this
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Method to set the value of field avatar_url
     *
     * @param string $avatar_url
     * @return $this
     */
    public function setAvatarUrl($avatar_url)
    {
        $this->avatar_url = $avatar_url;

        return $this;
    }

    /**
     * Method to set the value of field update_ts
     *
     * @param string $update_ts
     * @return $this
     */
    public function setUpdateTs($update_ts)
    {
        $this->update_ts = $update_ts;

        return $this;
    }

    /**
     * Method to set the value of field create_ts
     *
     * @param integer $create_ts
     * @return $this
     */
    public function setCreateTs($create_ts)
    {
        $this->create_ts = $create_ts;

        return $this;
    }

    /**
     * Method to set the value of field country
     *
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Method to set the value of field birthday
     *
     * @param string $birthday
     * @return $this
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Method to set the value of field address1
     *
     * @param string $address1
     * @return $this
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Method to set the value of field address2
     *
     * @param string $address2
     * @return $this
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Method to set the value of field postcode
     *
     * @param string $postcode
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Method to set the value of field city
     *
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Method to set the value of field invite_code
     *
     * @param integer $invite_code
     * @return $this
     */
    public function setInviteCode($invite_code)
    {
        $this->invite_code = $invite_code;

        return $this;
    }

    /**
     * Method to set the value of field sate
     *
     * @param string $sate
     * @return $this
     */
    public function setSate($sate)
    {
        $this->sate = $sate;

        return $this;
    }

    /**
     * Returns the value of field user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Returns the value of field account_type
     *
     * @return integer
     */
    public function getAccountType()
    {
        return $this->account_type;
    }

    /**
     * Returns the value of field mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Returns the value of field email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Returns the value of field password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Returns the value of field nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Returns the value of field avatar_url
     *
     * @return string
     */
    public function getAvatarUrl()
    {
        return $this->avatar_url;
    }

    /**
     * Returns the value of field update_ts
     *
     * @return string
     */
    public function getUpdateTs()
    {
        return $this->update_ts;
    }

    /**
     * Returns the value of field create_ts
     *
     * @return integer
     */
    public function getCreateTs()
    {
        return $this->create_ts;
    }

    /**
     * Returns the value of field country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Returns the value of field birthday
     *
     * @return string
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Returns the value of field address1
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Returns the value of field address2
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Returns the value of field postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Returns the value of field city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Returns the value of field invite_code
     *
     * @return integer
     */
    public function getInviteCode()
    {
        return $this->invite_code;
    }

    /**
     * Returns the value of field sate
     *
     * @return string
     */
    public function getSate()
    {
        return $this->sate;
    }

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $this->validate(
            new Email(
                array(
                    'field'    => 'email',
                    'required' => true,
                )
            )
        );

        if ($this->validationHasFailed() == true) {
            return false;
        }

        return true;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dtb_user_basic';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbUserBasic[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbUserBasic
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }



    public function gets($user_ids){
        $sql="select * from DtbUserBasic where user_id in array_values($user_ids) ";
        //var_dump($this->getDI());
        $query=new Phalcon\Mvc\Model\Query($sql,$this->getDI());
       return  $res=$query->execute();
    }


    public function get($user_id){
        return self::findFirst(array(
             'user_id=:user_id:',
             'bind'=>array('user_id'=>$user_id),
        ));
    }


    public function login($type=0,$mobile,$email,$password){
        if($type==1){
            return self::findFirst(array(
                'mobile=:mobile: and password=:password:',
                'bind'=>array('mobile'=>$mobile,
                    'password'=>md5($password)
                    ),
            ));
        }elseif($type==2){
            return self::findFirst(array(
                'email=:email: and password=:password:',
                'bind'=>array('email'=>$email,
                    'password'=>md5($password)
                ),
            ));
        }
        else{
            return self::findFirst(array(
                'email=:email: or mobile=:mobile: and password=:password:',
                'bind'=>array('email'=>$email,
                    'mobile'=>$mobile,
                    'password'=>md5($password)
                ),
            ));
        }
    }



    public function register(&$user_id,$params){
        $flag=false;
        try{
            $this->di['db']->begin();
            $ubm=new DtbUserBasic();
            $invite_code=$this->getOneinvitecode();
            $ubm->account_type=0;
            $ubm->mobile=$params['mobile'];
            $ubm->nickname=$params['nickname'];
            $ubm->email=$params['email'];
            $ubm->password=$params['password'];
            $ubm->avatar_url="default_avatar.png";
            $ubm->create_ts=time();
            $ubm->invite_code=$invite_code;

            $sql="update DtbInviteCode set is_use=1 where invite_code=$invite_code and is_use=0";
            $query=new Phalcon\Mvc\Model\Query($sql,$this->getDI());
            $res=$query->execute();

            //update invite_code status
            if($ubm->save()==false){
                foreach($ubm->getMessages() as $message){
                    echo $message;
                }
                $this->di['db']->rollback();
                return $flag;
            }elseif(!$res){
                $this->di['db']->rollback();
                return $flag;
            }
            else{
                $action_type=$this->di['log_config']->log_user->register;
                $log_ts=time();
                $sql="insert into DtbLogUser (user_id,action_type,log_ts) values('{$ubm->user_id}','{$action_type}','{$log_ts}' )";
                $query=new Phalcon\Mvc\Model\Query($sql,$this->getDI());
                $res1=$query->execute();
                if(!$res1){
                    $this->di['db']->rollback();
                }else{
                    $flag=true;
                    $this->di['db']->commit();
                }
                return $flag;
            }

        }catch (Exception $ex){
            $this->di['db']->rollback();
            return $flag;
        }

    }

    public function changePassword($user_id,$password){
        $user_basic=DtbUserBasic::findFirstByuser_id($user_id);
        if(!$user_basic)
            return false;
        $user_basic->password=$password;
        if($user_basic->save()==false)
            return false;
        else
            return true;

    }


    public function changeAvatar($user_id,$avatar_url){
        $user_basic=DtbUserBasic::findFirstByuser_id($user_id);
        if(!$user_basic)
            return false;
        $user_basic->avatar_url=$avatar_url;
        if($user_basic->save()==false)
            return false;
        else
            return true;

    }


    private function getOneinvitecode(){
        $invitCode=new DtbInviteCode();
     return  $invitCode->getOneInviteCode();
    }



    function getMobileCode(){
        $mobile = $this->get_valid_param('mobile', 'strval');
        $action = $this->get_valid_param('action', 'intval');
        $um = new UserModel();

        if(!$this->checkMobile($mobile)){
            $this->_return('MSG_MOBILE_FORMAT_ERROR');
        }
        /*
         *  判断绑定账号
         */
        if($action==4||$action==1){
            $user_data = $um->getDataByMobile($mobile, 'user_id');
            if($user_data !== null){
                $this->_return('MOBILE_EXISTED_ERROR');
            }
        }
        if($action==3||$action==2){
            $user_data = $um->getDataByMobile($mobile, 'user_id');
            if($user_data == null){
                $this->_return('MOBILE_NOT_EXISTED');
            }
        }


        $mm = new MobileModel();
        $code_data = $mm->getDataByMobile($mobile, 'update_ts,today_times');

        $flag = 1;
        $now = time();

        $param = array('expire_ts'=>$now+600, 'update_ts'=>$now);
        $where = array();
        if(!$code_data){
            $param['mobile'] = $mobile;
            $param['today_times'] = 1;
        }else{
            $where = array('mobile'=>$mobile);
            if($this->isSameDay($code_data['update_ts'])){
                if($code_data['today_times'] >= C('max_msg_code_per_day')){
                    $this->_return('MSG_MAX_TIMES_PER_DAY');
                }else{
                    $param['today_times'] = $code_data['today_times'] + 1;
                }
            }else{
                $param['today_times'] = 1;
            }
        }
        $code = $this->generateMobileCode();
        $param['code'] = $code;
        $log_param = array('mobile'=>$mobile, 'action_type'=>$action, 'res_code'=>-1, 'res_fee'=>-1, 'res_sid'=>-1, 'log_ts'=>$now);
        try{
            $res = json_decode(send_sms_new(sprintf(C('send_msg_code_content'), $code), $mobile),true);
            if(isset($res['code'])){
                $log_param['res_code'] = $res['code'];
                $log_param['res_fee'] = $res['result']['fee'];
                $log_param['res_sid'] = $res['result']['sid'];
            }
        }catch(\Exception $e){
        }
        if($log_param['res_code'] === 0){ //发送成功
            $res = $mm->saveMsgInfo($log_param,$param,$where);
        }else{
            $res = $mm->saveMsgInfo($log_param);
        }

        if(!$res){
            $this->_return('MSG_MYSQL_ERROR');
        }
        if($log_param['res_code'] == -1){
            $this->_return('MSG_SEND_ERROR');
        }

        $this->_return('MSG_SUCCESS');
    }

    private function isSameDay($ts){
        return date('Y-m-d') == date('Y-m-d', $ts);
    }

    private function generateMobileCode(){
        srand((double)microtime()*1000000);
        return rand(100000,999999);
    }

    private function checkMobile($mobile){
        $mobile_preg = '/(^13\d|^14[57]|^15[012356789]|^18[012356789]|^17[0236789])\d{8}/';
        //$mobile_preg = '/^1[3,8]{1}[\d]{9}$|^14[5,7]{1}\d{8}$|^15[012356789]{1}\d{8}$|^17[0,6,7,8]{1}\d{8}$/';
        //$mobile_preg =  "/^(1(([357][0-9])|(47)|[8][012356789]))\d{8}$/";
        return preg_match($mobile_preg, $mobile);
    }

    private function checkNickName($nickname){
        //$ruler='/^[\p{Han}\w]{4,15}$/u';
        $ruler='/^[\x{4e00}-\x{9fa5}\w]{2,15}+$/u';
        return preg_match($ruler, $nickname);
    }

}
