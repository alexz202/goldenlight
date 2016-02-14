<?php

class DtbRaiseProjectBasic extends \Phalcon\Mvc\Model
{

    public function initialize(){
        $this->belongsTo('user_id','DtbUserBasic','user_id');
        $this->hasOne('raise_id','DtbRaiseProjectIdea','raise_id');
        $this->hasOne('raise_id','DtbRaiseProjectMarket','raise_id');
        $this->hasOne('raise_id','DtbRaiseProjectAround','raise_id');
        $this->hasMany('raise_id','DtbRaiseProjectInvestor','raise_id');
        $this->hasMany('raise_id','DtbRaiseProjectTeam','raise_id');
        $this->hasMany('raise_id','DtbRaiseProjectQa','raise_id');
        $this->hasMany('raise_id','DtbRaiseProjectUpdates','raise_id');
        $this->hasOne('now_wheel_id','DtbRaiseProjectWheel','wheel_id');
    }

    /**
     *
     * @var integer
     */
    protected $raise_id;

    /**
     *
     * @var integer
     */
    protected $user_id;

    /**
     *
     * @var string
     */
    protected $project_name;

    /**
     *
     * @var string
     */
    protected $project_desc;

    /**
     *
     * @var integer
     */
    protected $project_grow_up;

    /**
     *
     * @var string
     */
    protected $company_logo;



    protected $project_type;


    protected $now_wheel;

    protected $last_wheel;

    /**
     *
     * @var double
     */
    protected $valuation;

    /**
     *
     * @var double
     */
    protected $rate_of_return;

    /**
     *
     * @var string
     */
    protected $video_url;

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
    protected $dist;

    /**
     *
     * @var string
     */
    protected $city;

    /**
     *
     * @var string
     */
    protected $post_card;

    /**
     *
     * @var string
     */
    protected $company;

    /**
     *
     * @var string
     */
    protected $webstate;

    /**
     *
     * @var integer
     */
    protected $create_ts;

    /**
     *
     * @var integer
     */
    protected $public_ts;

    /**
     *
     * @var integer
     */
    protected $end_ts;

    /**
     *
     * @var integer
     */
    protected $invested_num;

    /**
     *
     * @var integer
     */
    protected $currency;

    /**
     *
     * @var integer
     */
    protected $next_two_y_total_wage;

    /**
     *
     * @var integer
     */
    protected $next_discount;

    /**
     *
     * @var string
     */
    protected $comment;

    /**
     *
     * @var integer
     */
    protected $status;

    /**
     *
     * @var integer
     */
    protected $result;

    /**
     * Method to set the value of field raise_id
     *
     * @param integer $raise_id
     * @return $this
     */
    public function setRaiseId($raise_id)
    {
        $this->raise_id = $raise_id;

        return $this;
    }

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
     * Method to set the value of field project_name
     *
     * @param string $project_name
     * @return $this
     */
    public function setProjectName($project_name)
    {
        $this->project_name = $project_name;

        return $this;
    }

    /**
     * Method to set the value of field project_desc
     *
     * @param string $project_desc
     * @return $this
     */
    public function setProjectDesc($project_desc)
    {
        $this->project_desc = $project_desc;

        return $this;
    }

    /**
     * Method to set the value of field project_grow_up
     *
     * @param integer $project_grow_up
     * @return $this
     */
    public function setProjectGrowUp($project_grow_up)
    {
        $this->project_grow_up = $project_grow_up;

        return $this;
    }


    public function setProjectType($project_type)
    {
        $this->project_type = $project_type;

        return $this;
    }

    /**
     * Method to set the value of field company_logo
     *
     * @param string $company_logo
     * @return $this
     */
    public function setCompanyLogo($company_logo)
    {
        $this->company_logo = $company_logo;

        return $this;
    }

    public function setNowWheel($now_wheel)
    {
        $this->now_wheel = $now_wheel;

        return $this;
    }

    public function setLastWheel($last_wheel)
    {
        $this->last_wheel = $last_wheel;

        return $this;
    }


    /**
     * Method to set the value of field valuation
     *
     * @param double $valuation
     * @return $this
     */
    public function setValuation($valuation)
    {
        $this->valuation = $valuation;

        return $this;
    }

    /**
     * Method to set the value of field rate_of_return
     *
     * @param double $rate_of_return
     * @return $this
     */
    public function setRateOfReturn($rate_of_return)
    {
        $this->rate_of_return = $rate_of_return;

        return $this;
    }

    /**
     * Method to set the value of field video_url
     *
     * @param string $video_url
     * @return $this
     */
    public function setVideoUrl($video_url)
    {
        $this->video_url = $video_url;

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
     * Method to set the value of field dist
     *
     * @param string $dist
     * @return $this
     */
    public function setDist($dist)
    {
        $this->dist = $dist;

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
     * Method to set the value of field post_card
     *
     * @param string $post_card
     * @return $this
     */
    public function setPostCard($post_card)
    {
        $this->post_card = $post_card;

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
     * Method to set the value of field webstate
     *
     * @param string $webstate
     * @return $this
     */
    public function setWebstate($webstate)
    {
        $this->webstate = $webstate;

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
     * Method to set the value of field public_ts
     *
     * @param integer $public_ts
     * @return $this
     */
    public function setPublicTs($public_ts)
    {
        $this->public_ts = $public_ts;

        return $this;
    }

    /**
     * Method to set the value of field end_ts
     *
     * @param integer $end_ts
     * @return $this
     */
    public function setEndTs($end_ts)
    {
        $this->end_ts = $end_ts;

        return $this;
    }

    /**
     * Method to set the value of field invested_num
     *
     * @param integer $invested_num
     * @return $this
     */
    public function setInvestedNum($invested_num)
    {
        $this->invested_num = $invested_num;

        return $this;
    }

    /**
     * Method to set the value of field currency
     *
     * @param integer $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Method to set the value of field next_two_y_total_wage
     *
     * @param integer $next_two_y_total_wage
     * @return $this
     */
    public function setNextTwoYTotalWage($next_two_y_total_wage)
    {
        $this->next_two_y_total_wage = $next_two_y_total_wage;

        return $this;
    }

    /**
     * Method to set the value of field next_discount
     *
     * @param integer $next_discount
     * @return $this
     */
    public function setNextDiscount($next_discount)
    {
        $this->next_discount = $next_discount;

        return $this;
    }

    /**
     * Method to set the value of field comment
     *
     * @param string $comment
     * @return $this
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Method to set the value of field status
     *
     * @param integer $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

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
     * Returns the value of field raise_id
     *
     * @return integer
     */
    public function getRaiseId()
    {
        return $this->raise_id;
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


    public function getProjectType()
    {
        return $this->project_type;
    }

    /**
     * Returns the value of field project_name
     *
     * @return string
     */
    public function getProjectName()
    {
        return $this->project_name;
    }


    public function getNowWheel()
    {
        return $this->now_wheel;
    }


    public function getLastWheel()
    {
        return $this->last_wheel;
    }

    /**
     * Returns the value of field project_desc
     *
     * @return string
     */
    public function getProjectDesc()
    {
        return $this->project_desc;
    }

    /**
     * Returns the value of field project_grow_up
     *
     * @return integer
     */
    public function getProjectGrowUp()
    {
        return $this->project_grow_up;
    }

    /**
     * Returns the value of field company_logo
     *
     * @return string
     */
    public function getCompanyLogo()
    {
        return $this->company_logo;
    }

    /**
     * Returns the value of field valuation
     *
     * @return double
     */
    public function getValuation()
    {
        return $this->valuation;
    }

    /**
     * Returns the value of field rate_of_return
     *
     * @return double
     */
    public function getRateOfReturn()
    {
        return $this->rate_of_return;
    }

    /**
     * Returns the value of field video_url
     *
     * @return string
     */
    public function getVideoUrl()
    {
        return $this->video_url;
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
     * Returns the value of field dist
     *
     * @return string
     */
    public function getDist()
    {
        return $this->dist;
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
     * Returns the value of field post_card
     *
     * @return string
     */
    public function getPostCard()
    {
        return $this->post_card;
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
     * Returns the value of field webstate
     *
     * @return string
     */
    public function getWebstate()
    {
        return $this->webstate;
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
     * Returns the value of field public_ts
     *
     * @return integer
     */
    public function getPublicTs()
    {
        return $this->public_ts;
    }

    /**
     * Returns the value of field end_ts
     *
     * @return integer
     */
    public function getEndTs()
    {
        return $this->end_ts;
    }

    /**
     * Returns the value of field invested_num
     *
     * @return integer
     */
    public function getInvestedNum()
    {
        return $this->invested_num;
    }

    /**
     * Returns the value of field currency
     *
     * @return integer
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Returns the value of field next_two_y_total_wage
     *
     * @return integer
     */
    public function getNextTwoYTotalWage()
    {
        return $this->next_two_y_total_wage;
    }

    /**
     * Returns the value of field next_discount
     *
     * @return integer
     */
    public function getNextDiscount()
    {
        return $this->next_discount;
    }

    /**
     * Returns the value of field comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Returns the value of field status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
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
        return 'dtb_raise_project_basic';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectBasic[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectBasic
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    public  function getAllSuccessTotal(){
        $sql="select sum(rate_of_return) as all_rate_of_return,count(DISTINCT(raise_id)) as all_project_count,count(DISTINCT(user_id)) as all_raise_user_count from DtbRaiseProjectBasic where status=1 ";
        //var_dump($this->getDI());
        $query=new Phalcon\Mvc\Model\Query($sql,$this->getDI());
        return  $res=$query->execute();
    }

    public function getSuccessProject($limit){
       $sql="select DtbRaiseProjectBasic.company,DtbRaiseProjectBasic.company_logo,DtbRaiseProjectBasic.project_name,DtbRaiseProjectWheel.already_money,DtbRaiseProjectWheel.wheel_invested_num from DtbRaiseProjectBasic,DtbRaiseProjectWheel where DtbRaiseProjectWheel.status=1  and DtbRaiseProjectBasic.now_wheel_id=DtbRaiseProjectWheel.wheel_id order by DtbRaiseProjectWheel.end_ts,DtbRaiseProjectWheel.already_money desc  limit $limit";
        //var_dump($this->getDI());
        $query=new Phalcon\Mvc\Model\Query($sql,$this->getDI());
        return $res=$query->execute();
    }

}
