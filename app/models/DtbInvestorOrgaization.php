<?php


class DtbInvestorOrgaization extends \Phalcon\Mvc\Model
{


    public function initialize(){
        $this->hasOne('user_id','DtbUserBasic','user_id');
        $this->hasOne('user_id','DtbInvestLeaderCases','user_id');
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
    protected $legal_name;

    /**
     *
     * @var string
     */
    protected $legal_identity_card;

    /**
     *
     * @var string
     */
    protected $legal_idc_img1;

    /**
     *
     * @var string
     */
    protected $legal_idc_img2;

    /**
     *
     * @var string
     */
    protected $contact_name;

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
    protected $city_town;

    /**
     *
     * @var string
     */
    protected $address;

    /**
     *
     * @var string
     */
    protected $business_licence;

    /**
     *
     * @var string
     */
    protected $bul_img;

    /**
     *
     * @var string
     */
    protected $company;

    /**
     *
     * @var integer
     */
    protected $gold_fund;

    /**
     *
     * @var string
     */
    protected $singel_invest_range;

    /**
     *
     * @var integer
     */
    protected $is_invest_leader;

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
     * @var string
     */
    protected $available_extra_price;

    /**
     *
     * @var string
     */
    protected $invest_idea;

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
     * Method to set the value of field legal_name
     *
     * @param string $legal_name
     * @return $this
     */
    public function setLegalName($legal_name)
    {
        $this->legal_name = $legal_name;

        return $this;
    }

    /**
     * Method to set the value of field legal_identity_card
     *
     * @param string $legal_identity_card
     * @return $this
     */
    public function setLegalIdentityCard($legal_identity_card)
    {
        $this->legal_identity_card = $legal_identity_card;

        return $this;
    }

    /**
     * Method to set the value of field legal_idc_img1
     *
     * @param string $legal_idc_img1
     * @return $this
     */
    public function setLegalIdcImg1($legal_idc_img1)
    {
        $this->legal_idc_img1 = $legal_idc_img1;

        return $this;
    }

    /**
     * Method to set the value of field legal_idc_img2
     *
     * @param string $legal_idc_img2
     * @return $this
     */
    public function setLegalIdcImg2($legal_idc_img2)
    {
        $this->legal_idc_img2 = $legal_idc_img2;

        return $this;
    }

    /**
     * Method to set the value of field contact_name
     *
     * @param string $contact_name
     * @return $this
     */
    public function setContactName($contact_name)
    {
        $this->contact_name = $contact_name;

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
     * @param string $city_town
     * @return $this
     */
    public function setCityTown($city_town)
    {
        $this->city_town = $city_town;

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
     * Method to set the value of field business licence
     *
     * @param string $business licence
     * @return $this
     */
    public function setBusiness_licence($business_licence)
    {
        $this->business_licence = $business_licence;

        return $this;
    }

    /**
     * Method to set the value of field bul_img
     *
     * @param string $bul_img
     * @return $this
     */
    public function setBulImg($bul_img)
    {
        $this->bul_img = $bul_img;

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
     * Method to set the value of field gold_fund
     *
     * @param integer $gold_fund
     * @return $this
     */
    public function setGoldFund($gold_fund)
    {
        $this->gold_fund = $gold_fund;

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
     * Returns the value of field legal_name
     *
     * @return string
     */
    public function getLegalName()
    {
        return $this->legal_name;
    }

    /**
     * Returns the value of field legal_identity_card
     *
     * @return string
     */
    public function getLegalIdentityCard()
    {
        return $this->legal_identity_card;
    }

    /**
     * Returns the value of field legal_idc_img1
     *
     * @return string
     */
    public function getLegalIdcImg1()
    {
        return $this->legal_idc_img1;
    }

    /**
     * Returns the value of field legal_idc_img2
     *
     * @return string
     */
    public function getLegalIdcImg2()
    {
        return $this->legal_idc_img2;
    }

    /**
     * Returns the value of field contact_name
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->contact_name;
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
     * Returns the value of field city_town
     *
     * @return string
     */
    public function getCityTown()
    {
        return $this->city_town;
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
     * Returns the value of field business licence
     *
     * @return string
     */
    public function getBusiness_licence()
    {
        return $this->business_licence;
    }

    /**
     * Returns the value of field bul_img
     *
     * @return string
     */
    public function getBulImg()
    {
        return $this->bul_img;
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
     * Returns the value of field gold_fund
     *
     * @return integer
     */
    public function getGoldFund()
    {
        return $this->gold_fund;
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
     * Returns the value of field is_invest_leader
     *
     * @return integer
     */
    public function getIsInvestLeader()
    {
        return $this->is_invest_leader;
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
     * Returns the value of field available_extra_price
     *
     * @return string
     */
    public function getAvailableExtraPrice()
    {
        return $this->available_extra_price;
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
        return 'dtb_investor_orgaization';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbInvestorOrgaization[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbInvestorOrgaization
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
