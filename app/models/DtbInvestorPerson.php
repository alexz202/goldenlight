<?php


class DtbInvestorPerson extends \Phalcon\Mvc\Model
{




    public function initialize(){
        $this->hasOne('user_id','DtbUserBasic','user_id');
    }


    /**
     *
     * @var integer
     */
    public $user_id;

    /**
     *
     * @var string
     */
    protected $real_name;

    /**
     *
     * @var string
     */
    protected $identity_card;

    /**
     *
     * @var string
     */
    protected $idc_img1;

    /**
     *
     * @var string
     */
    protected $idc_img2;

    /**
     *
     * @var string
     */
    protected $country;

    /**
     *
     * @var string
     */
    protected $province;

    /**
     *
     * @var string
     */
    protected $city;
    /**
     *
     * @var string
     */
    protected $dist;

    /**
     *
     * @var string
     */
    protected $address;

    /**
     *
     * @var integer
     */
    protected $income_y;

    /**
     *
     * @var string
     */
    protected $company;

    /**
     *
     * @var string
     */
    protected $position;

    /**
     *
     * @var integer
     */
    protected $person_fund;

    /**
     *
     * @var string
     */
    protected $singel_invest_range;

    /**
     *
     * @var string
     */
    protected $invest_exp;

    /**
     *
     * @var string
     */
    protected $attention_direct;

    /**
     *
     * @var integer
     */
    protected $update_ts;

    /**
     *
     * @var integer
     */
    protected $create_ts;

    /**
     *
     * @var integer
     */
    protected $is_invest_leader;

    /**
     *
     * @var string
     */
    protected $invest_idea;

    /**
     *
     * @var string
     */
    protected $available_extra_price;

    /**
     *
     * @var integer
     */
    protected $result;

    /**
     * Method to set the value of field user_id
     *
     * @param integer $user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Method to set the value of field real_name
     *
     * @param string $real_name
     * @return $this
     */
    public function setRealName($real_name)
    {
        $this->real_name = $real_name;

        return $this;
    }

    /**
     * Method to set the value of field identity_card
     *
     * @param string $identity_card
     * @return $this
     */
    public function setIdentityCard($identity_card)
    {
        $this->identity_card = $identity_card;

        return $this;
    }

    /**
     * Method to set the value of field idc_img1
     *
     * @param string $idc_img1
     * @return $this
     */
    public function setIdcImg1($idc_img1)
    {
        $this->idc_img1 = $idc_img1;

        return $this;
    }

    /**
     * Method to set the value of field idc_img2
     *
     * @param string $idc_img2
     * @return $this
     */
    public function setIdcImg2($idc_img2)
    {
        $this->idc_img2 = $idc_img2;

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
     * Method to set the value of field province
     *
     * @param string $province
     * @return $this
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Method to set the value of field city_town
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
     * Method to set the value of field city_town
     *
     * @param string $city
     * @return $this
     */
    public function setDist($dist)
    {
        $this->dist = $dist;

        return $this;
    }

    /**
     * Method to set the value of field address
     *
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Method to set the value of field income_y
     *
     * @param integer $income_y
     * @return $this
     */
    public function setIncomeY($income_y)
    {
        $this->income_y = $income_y;

        return $this;
    }

    /**
     * Method to set the value of field company
     *
     * @param string $company
     * @return $this
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Method to set the value of field position
     *
     * @param string $position
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Method to set the value of field person_fund
     *
     * @param integer $person_fund
     * @return $this
     */
    public function setPersonFund($person_fund)
    {
        $this->person_fund = $person_fund;

        return $this;
    }

    /**
     * Method to set the value of field singel_invest_range
     *
     * @param string $singel_invest_range
     * @return $this
     */
    public function setSingelInvestRange($singel_invest_range)
    {
        $this->singel_invest_range = $singel_invest_range;

        return $this;
    }

    /**
     * Method to set the value of field invest_exp
     *
     * @param string $invest_exp
     * @return $this
     */
    public function setInvestExp($invest_exp)
    {
        $this->invest_exp = $invest_exp;

        return $this;
    }

    /**
     * Method to set the value of field attention_direct
     *
     * @param string $attention_direct
     * @return $this
     */
    public function setAttentionDirect($attention_direct)
    {
        $this->attention_direct = $attention_direct;

        return $this;
    }

    /**
     * Method to set the value of field update_ts
     *
     * @param integer $update_ts
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
     * Method to set the value of field is_invest_leader
     *
     * @param integer $is_invest_leader
     * @return $this
     */
    public function setIsInvestLeader($is_invest_leader)
    {
        $this->is_invest_leader = $is_invest_leader;

        return $this;
    }

    /**
     * Method to set the value of field invest_idea
     *
     * @param string $invest_idea
     * @return $this
     */
    public function setInvestIdea($invest_idea)
    {
        $this->invest_idea = $invest_idea;

        return $this;
    }

    /**
     * Method to set the value of field available_extra_price
     *
     * @param string $available_extra_price
     * @return $this
     */
    public function setAvailableExtraPrice($available_extra_price)
    {
        $this->available_extra_price = $available_extra_price;

        return $this;
    }

    /**
     * Method to set the value of field result
     *
     * @param integer $result
     * @return $this
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Returns the value of field user_id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Returns the value of field real_name
     *
     * @return string
     */
    public function getRealName()
    {
        return $this->real_name;
    }

    /**
     * Returns the value of field identity_card
     *
     * @return string
     */
    public function getIdentityCard()
    {
        return $this->identity_card;
    }

    /**
     * Returns the value of field idc_img1
     *
     * @return string
     */
    public function getIdcImg1()
    {
        return $this->idc_img1;
    }

    /**
     * Returns the value of field idc_img2
     *
     * @return string
     */
    public function getIdcImg2()
    {
        return $this->idc_img2;
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
     * Returns the value of field province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
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
     * Returns the value of field city
     *
     * @return string
     */
    public function getDist()
    {
        return $this->dist;
    }

    /**
     * Returns the value of field address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Returns the value of field income_y
     *
     * @return integer
     */
    public function getIncomeY()
    {
        return $this->income_y;
    }

    /**
     * Returns the value of field company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Returns the value of field position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Returns the value of field person_fund
     *
     * @return integer
     */
    public function getPersonFund()
    {
        return $this->person_fund;
    }

    /**
     * Returns the value of field singel_invest_range
     *
     * @return string
     */
    public function getSingelInvestRange()
    {
        return $this->singel_invest_range;
    }

    /**
     * Returns the value of field invest_exp
     *
     * @return string
     */
    public function getInvestExp()
    {
        return $this->invest_exp;
    }

    /**
     * Returns the value of field attention_direct
     *
     * @return string
     */
    public function getAttentionDirect()
    {
        return $this->attention_direct;
    }

    /**
     * Returns the value of field update_ts
     *
     * @return integer
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
     * Returns the value of field is_invest_leader
     *
     * @return integer
     */
    public function getIsInvestLeader()
    {
        return $this->is_invest_leader;
    }

    /**
     * Returns the value of field invest_idea
     *
     * @return string
     */
    public function getInvestIdea()
    {
        return $this->invest_idea;
    }

    /**
     * Returns the value of field available_extra_price
     *
     * @return string
     */
    public function getAvailableExtraPrice()
    {
        return $this->available_extra_price;
    }

    /**
     * Returns the value of field result
     *
     * @return integer
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dtb_investor_person';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbInvestorPerson[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbInvestorPerson
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }


    public function applyPerson($user_id,$params){
        $flag=false;
        try{
            $this->di['db']->begin();
            $invest_person=new DtbInvestorPerson();
            $invest_person->user_id=$user_id;
            $invest_person->address=$params['address'];
            $invest_person->real_name=$params['real_name'];
            $invest_person->identity_card=isset($params['identity_card'])?$params['identity_card']:null;
            $invest_person->idc_img1=isset($params['idc_img1'])?$params['idc_img1']:null;
            $invest_person->idc_img2=isset($params['idc_img2'])?$params['idc_img2']:null;
            $invest_person->province=$params['province'];
            $invest_person->city=$params['city'];
            $invest_person->dist=$params['dist'];
            $invest_person->income_y=isset($params['income_y'])?$params['income_y']:0;
            $invest_person->company=$params['company'];
            $invest_person->position=$params['position'];
            $invest_person->person_fund=isset($params['person_fund'])?$params['person_fund']:0;
            $invest_person->available_extra_price=isset($params['available_extra_price'])?$params['available_extra_price']:0;
            $invest_person->singel_invest_range=isset($params['singel_invest_range'])?$params['singel_invest_range']:0;
            $invest_person->invest_exp=$params['invest_exp'];
            $invest_person->attention_direct=$params['attention_direct'];
            $invest_person->invest_idea=$params['invest_idea'];
            $invest_person->available_extra_price=$params['available_extra_price'];
            $invest_person->create_ts=time();
            $invest_person->update_ts=time();
            $invest_person->country=$params['country'];
            $invest_person->result=0;


            if(!$invest_person->create()){
                foreach($invest_person->getMessages() as $message){
                    echo $message;
                }
                $this->di['db']->rollback();
                return $flag;
            }else{
                $action_type=$this->di['config']->log_user->applyperson;
                $log_ts=time();
                $sql="insert into DtbLogUser (user_id,action_type,log_ts) values('{$user_id}','{$action_type}','{$log_ts}' )";
                $query=new Phalcon\Mvc\Model\Query($sql,$this->getDI());
                $res1=$query->execute();

                $sql="update  DtbUserBasic set account_type=2 where user_id={$user_id} and account_type=0";
                $query=new Phalcon\Mvc\Model\Query($sql,$this->getDI());
                $res2=$query->execute();

                if(!$res1){
                    $this->di['db']->rollback();
                }
                else if(!$res2){
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

    public function getDataByUserId($user_id){
        return self::findFirst(array(
            'user_id=:user_id:',
            'bind'=>array('user_id'=>$user_id),
        ));
    }

}
