<?php

class DtbRaiseProjectMarket extends \Phalcon\Mvc\Model
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
    protected $aim_market;

    /**
     *
     * @var string
     */
    protected $aim_market_feaure;

    /**
     *
     * @var string
     */
    protected $competitive_strategy;

    /**
     *
     * @var integer
     */
    protected $update_ts;

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
     * Method to set the value of field aim_market
     *
     * @param string $aim_market
     * @return $this
     */
    public function setAimMarket($aim_market)
    {
        $this->aim_market = $aim_market;

        return $this;
    }

    /**
     * Method to set the value of field aim_market_feaure
     *
     * @param string $aim_market_feaure
     * @return $this
     */
    public function setAimMarketFeaure($aim_market_feaure)
    {
        $this->aim_market_feaure = $aim_market_feaure;

        return $this;
    }

    /**
     * Method to set the value of field competitive_strategy
     *
     * @param string $competitive_strategy
     * @return $this
     */
    public function setCompetitiveStrategy($competitive_strategy)
    {
        $this->competitive_strategy = $competitive_strategy;

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
     * Returns the value of field raise_id
     *
     * @return integer
     */
    public function getRaiseId()
    {
        return $this->raise_id;
    }

    /**
     * Returns the value of field aim_market
     *
     * @return string
     */
    public function getAimMarket()
    {
        return $this->aim_market;
    }

    /**
     * Returns the value of field aim_market_feaure
     *
     * @return string
     */
    public function getAimMarketFeaure()
    {
        return $this->aim_market_feaure;
    }

    /**
     * Returns the value of field competitive_strategy
     *
     * @return string
     */
    public function getCompetitiveStrategy()
    {
        return $this->competitive_strategy;
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
        return 'dtb_raise_project_market';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectMarket[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectMarket
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
