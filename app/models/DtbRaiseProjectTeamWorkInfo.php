<?php

class DtbRaiseProjectTeamWorkInfo extends \Phalcon\Mvc\Model
{
    public function initialize(){
        $this->belongsTo('tmmember_id','DtbRaiseProjectTeam','tmmember_id');
    }
    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var integer
     */
    protected $tmmember_id;

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
    protected $start_ts;

    /**
     *
     * @var integer
     */
    protected $end_ts;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Method to set the value of field start_ts
     *
     * @param integer $start_ts
     * @return $this
     */
    public function setStartTs($start_ts)
    {
        $this->start_ts = $start_ts;

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
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
     * Returns the value of field start_ts
     *
     * @return integer
     */
    public function getStartTs()
    {
        return $this->start_ts;
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
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dtb_raise_project_team_work_info';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectTeamWorkInfo[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectTeamWorkInfo
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
