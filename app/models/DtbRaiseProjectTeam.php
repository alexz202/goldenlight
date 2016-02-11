<?php

class DtbRaiseProjectTeam extends \Phalcon\Mvc\Model
{
    public function initialize(){
        $this->belongsTo('raise_id','DtbRaiseProjectBasic','raise_id');
        $this->hasMany('tmmember_id','DtbRaiseProjectTeamCertificate','tmmember_id');
        $this->hasMany('tmmember_id','DtbRaiseProjectTeamEducation','tmmember_id');
        $this->hasMany('tmmember_id','DtbRaiseProjectTeamWorkInfo','tmmember_id');

    }

    /**
     *
     * @var integer
     */
    protected $tmmember_id;

    /**
     *
     * @var integer
     */
    protected $raise_id;

    /**
     *
     * @var string
     */
    protected $user_name;

    /**
     *
     * @var string
     */
    protected $avatar;

    /**
     *
     * @var string
     */
    protected $position;

    /**
     *
     * @var integer
     */
    protected $commitment;

    /**
     *
     * @var double
     */
    protected $ownership;

    /**
     *
     * @var string
     */
    protected $nationality;

    /**
     *
     * @var string
     */
    protected $role;

    /**
     *
     * @var string
     */
    protected $birthday;

    /**
     *
     * @var string
     */
    protected $country;

    /**
     *
     * @var string
     */
    protected $city;

    /**
     *
     * @var string
     */
    protected $address;

    /**
     *
     * @var integer
     */
    protected $update_ts;

    /**
     * Method to set the value of field tmmember_id
     *
     * @param integer $tmmember_id
     * @return $this
     */
    public function setTmmemberId($tmmember_id)
    {
        $this->tmmember_id = $tmmember_id;

        return $this;
    }

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
     * Method to set the value of field user_name
     *
     * @param string $user_name
     * @return $this
     */
    public function setUserName($user_name)
    {
        $this->user_name = $user_name;

        return $this;
    }

    /**
     * Method to set the value of field avatar
     *
     * @param string $avatar
     * @return $this
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

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
     * Method to set the value of field commitment
     *
     * @param integer $commitment
     * @return $this
     */
    public function setCommitment($commitment)
    {
        $this->commitment = $commitment;

        return $this;
    }

    /**
     * Method to set the value of field ownership
     *
     * @param double $ownership
     * @return $this
     */
    public function setOwnership($ownership)
    {
        $this->ownership = $ownership;

        return $this;
    }

    /**
     * Method to set the value of field nationality
     *
     * @param string $nationality
     * @return $this
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Method to set the value of field role
     *
     * @param string $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->role = $role;

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
     * Returns the value of field tmmember_id
     *
     * @return integer
     */
    public function getTmmemberId()
    {
        return $this->tmmember_id;
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
     * Returns the value of field user_name
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * Returns the value of field avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
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
     * Returns the value of field commitment
     *
     * @return integer
     */
    public function getCommitment()
    {
        return $this->commitment;
    }

    /**
     * Returns the value of field ownership
     *
     * @return double
     */
    public function getOwnership()
    {
        return $this->ownership;
    }

    /**
     * Returns the value of field nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Returns the value of field role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
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
     * Returns the value of field country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
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
     * Returns the value of field address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
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
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dtb_raise_project_team';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectTeam[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectTeam
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
