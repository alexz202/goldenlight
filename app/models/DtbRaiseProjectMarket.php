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
    public $raise_id;

    /**
     *
     * @var string
     */
    public $aim_market;

    /**
     *
     * @var string
     */
    public $aim_market_feaure;

    /**
     *
     * @var string
     */
    public $competitive_strategy;

    /**
     *
     * @var integer
     */
    public $update_ts;

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
