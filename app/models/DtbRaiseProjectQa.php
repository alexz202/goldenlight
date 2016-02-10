<?php

class DtbRaiseProjectQa extends \Phalcon\Mvc\Model
{
    public function initialize(){
        $this->belongsTo('raise_id','DtbRaiseProjectBasic','raise_id');
    }

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $raise_id;

    /**
     *
     * @var string
     */
    public $msg;

    /**
     *
     * @var string
     */
    public $remsg;

    /**
     *
     * @var integer
     */
    public $msg_ts;

    /**
     *
     * @var integer
     */
    public $remsg_ts;

    /**
     *
     * @var integer
     */
    public $user_id;

    /**
     *
     * @var integer
     */
    public $company_admin_id;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dtb_raise_project_qa';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectQa[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectQa
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
