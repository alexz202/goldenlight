<?php

class DtbRaiseProjectInvestor extends \Phalcon\Mvc\Model
{
    public function initialize(){
        $this->belongsTo('raise_id','DtbRaiseProjectBasic','raise_id');
        $this->hasOne('user_id','DtbUserBasic','user_id');
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
     * @var double
     */
    protected $invest_money;

    /**
     *
     * @var integer
     */
    protected $update_ts;

    /**
     *
     * @var integer
     */
    protected $is_show;

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
     * Method to set the value of field invest_money
     *
     * @param double $invest_money
     * @return $this
     */
    public function setInvestMoney($invest_money)
    {
        $this->invest_money = $invest_money;

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
     * Method to set the value of field is_show
     *
     * @param integer $is_show
     * @return $this
     */
    public function setIsShow($is_show)
    {
        $this->is_show = $is_show;

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

    /**
     * Returns the value of field invest_money
     *
     * @return double
     */
    public function getInvestMoney()
    {
        return $this->invest_money;
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
     * Returns the value of field is_show
     *
     * @return integer
     */
    public function getIsShow()
    {
        return $this->is_show;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dtb_raise_project_investor';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectInvestor[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectInvestor
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
