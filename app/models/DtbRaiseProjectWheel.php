<?php

class DtbRaiseProjectWheel extends \Phalcon\Mvc\Model
{
    public function initialize(){
        $this->hasOne('wheel_id','DtbRaiseProjectBasic','now_wheel_id');
    }
    /**
     *
     * @var integer
     */
    protected $wheel_id;

    /**
     *
     * @var integer
     */
    protected $raise_id;

    /**
     *
     * @var string
     */
    protected $wheel_desc;

    /**
     *
     * @var integer
     */
    protected $wheel_step;

    /**
     *
     * @var double
     */
    protected $aim_money;

    /**
     *
     * @var double
     */
    protected $already_money;

    /**
     *
     * @var double
     */
    protected $aim_equity_offered;

    /**
     *
     * @var double
     */
    protected $already_equity_offered;

    /**
     *
     * @var integer
     */
    protected $end_ts;

    /**
     *
     * @var integer
     */
    protected $create_ts;

    /**
     *
     * @var integer
     */
    protected $result;

    /**
     *
     * @var integer
     */
    protected $status;

    /**
     *
     * @var integer
     */
    protected $wheel_invested_num;

    /**
     * Method to set the value of field wheel_id
     *
     * @param integer $wheel_id
     * @return $this
     */
    public function setWheelId($wheel_id)
    {
        $this->wheel_id = $wheel_id;

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
     * Method to set the value of field wheel_desc
     *
     * @param string $wheel_desc
     * @return $this
     */
    public function setWheelDesc($wheel_desc)
    {
        $this->wheel_desc = $wheel_desc;

        return $this;
    }

    /**
     * Method to set the value of field wheel_step
     *
     * @param integer $wheel_step
     * @return $this
     */
    public function setWheelStep($wheel_step)
    {
        $this->wheel_step = $wheel_step;

        return $this;
    }

    /**
     * Method to set the value of field aim_money
     *
     * @param double $aim_money
     * @return $this
     */
    public function setAimMoney($aim_money)
    {
        $this->aim_money = $aim_money;

        return $this;
    }

    /**
     * Method to set the value of field already_money
     *
     * @param double $already_money
     * @return $this
     */
    public function setAlreadyMoney($already_money)
    {
        $this->already_money = $already_money;

        return $this;
    }

    /**
     * Method to set the value of field aim_equity_offered
     *
     * @param double $aim_equity_offered
     * @return $this
     */
    public function setAimEquityOffered($aim_equity_offered)
    {
        $this->aim_equity_offered = $aim_equity_offered;

        return $this;
    }

    /**
     * Method to set the value of field already_equity_offered
     *
     * @param double $already_equity_offered
     * @return $this
     */
    public function setAlreadyEquityOffered($already_equity_offered)
    {
        $this->already_equity_offered = $already_equity_offered;

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
     * Method to set the value of field wheel_invested_num
     *
     * @param integer $wheel_invested_num
     * @return $this
     */
    public function setWheelInvestedNum($wheel_invested_num)
    {
        $this->wheel_invested_num = $wheel_invested_num;

        return $this;
    }

    /**
     * Returns the value of field wheel_id
     *
     * @return integer
     */
    public function getWheelId()
    {
        return $this->wheel_id;
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
     * Returns the value of field wheel_desc
     *
     * @return string
     */
    public function getWheelDesc()
    {
        return $this->wheel_desc;
    }

    /**
     * Returns the value of field wheel_step
     *
     * @return integer
     */
    public function getWheelStep()
    {
        return $this->wheel_step;
    }

    /**
     * Returns the value of field aim_money
     *
     * @return double
     */
    public function getAimMoney()
    {
        return $this->aim_money;
    }

    /**
     * Returns the value of field already_money
     *
     * @return double
     */
    public function getAlreadyMoney()
    {
        return $this->already_money;
    }

    /**
     * Returns the value of field aim_equity_offered
     *
     * @return double
     */
    public function getAimEquityOffered()
    {
        return $this->aim_equity_offered;
    }

    /**
     * Returns the value of field already_equity_offered
     *
     * @return double
     */
    public function getAlreadyEquityOffered()
    {
        return $this->already_equity_offered;
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
     * Returns the value of field create_ts
     *
     * @return integer
     */
    public function getCreateTs()
    {
        return $this->create_ts;
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
     * Returns the value of field status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Returns the value of field wheel_invested_num
     *
     * @return integer
     */
    public function getWheelInvestedNum()
    {
        return $this->wheel_invested_num;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dtb_raise_project_wheel';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectWheel[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectWheel
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
