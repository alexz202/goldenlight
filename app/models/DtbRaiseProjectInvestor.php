<?php

class DtbRaiseProjectInvestor extends \Phalcon\Mvc\Model
{
    public function initialize(){
        $this->belongsTo('raise_id','DtbRaiseProjectBasic','raise_id');
    }
    /**
     *
     * @var integer
     */
    public $raise_id;

    /**
     *
     * @var integer
     */
    public $user_id;

    /**
     *
     * @var double
     */
    public $invest_money;

    /**
     *
     * @var integer
     */
    public $update_ts;

    /**
     *
     * @var integer
     */
    public $is_show;

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
