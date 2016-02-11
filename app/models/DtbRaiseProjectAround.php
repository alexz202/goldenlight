<?php

class DtbRaiseProjectAround extends \Phalcon\Mvc\Model
{
    public function initialize(){
        $this->hasOne('raise_id','DtbRaiseProjectBasic','raise_id');
    }

    /**
     *
     * @var integer
     */
    protected $raise_id;

    /**
     *
     * @var string
     */
    protected $bj_person;

    /**
     *
     * @var string
     */
    protected $invest_leader;

    /**
     *
     * @var string
     */
    protected $monitor_system;

    /**
     *
     * @var string
     */
    protected $friend_link;

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
     * Method to set the value of field bj_person
     *
     * @param string $bj_person
     * @return $this
     */
    public function setBjPerson($bj_person)
    {
        $this->bj_person = $bj_person;

        return $this;
    }

    /**
     * Method to set the value of field invest_leader
     *
     * @param string $invest_leader
     * @return $this
     */
    public function setInvestLeader($invest_leader)
    {
        $this->invest_leader = $invest_leader;

        return $this;
    }

    /**
     * Method to set the value of field monitor_system
     *
     * @param string $monitor_system
     * @return $this
     */
    public function setMonitorSystem($monitor_system)
    {
        $this->monitor_system = $monitor_system;

        return $this;
    }

    /**
     * Method to set the value of field friend_link
     *
     * @param string $friend_link
     * @return $this
     */
    public function setFriendLink($friend_link)
    {
        $this->friend_link = $friend_link;

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
     * Returns the value of field bj_person
     *
     * @return string
     */
    public function getBjPerson()
    {
        return $this->bj_person;
    }

    /**
     * Returns the value of field invest_leader
     *
     * @return string
     */
    public function getInvestLeader()
    {
        return $this->invest_leader;
    }

    /**
     * Returns the value of field monitor_system
     *
     * @return string
     */
    public function getMonitorSystem()
    {
        return $this->monitor_system;
    }

    /**
     * Returns the value of field friend_link
     *
     * @return string
     */
    public function getFriendLink()
    {
        return $this->friend_link;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dtb_raise_project_around';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectAround[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectAround
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
