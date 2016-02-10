<?php

class DtbRaiseProjectUpdates extends \Phalcon\Mvc\Model
{
    public function initialize(){
        $this->belongsTo('tmmember_id','DtbRaiseProjectTeam','tmmember_id');
    }
    /**
     *
     * @var string
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
    public $title;

    /**
     *
     * @var string
     */
    public $content;

    /**
     *
     * @var integer
     */
    public $create_ts;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dtb_raise_project_updates';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectUpdates[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectUpdates
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
