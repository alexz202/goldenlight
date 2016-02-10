<?php

class DtbRaiseProjectIdea extends \Phalcon\Mvc\Model
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
    public $idea_info;

    /**
     *
     * @var string
     */
    public $purpose;

    /**
     *
     * @var string
     */
    public $livestock;

    /**
     *
     * @var string
     */
    public $useform;

    /**
     *
     * @var string
     */
    public $technical;

    /**
     *
     * @var integer
     */
    public $update_ts;

    /**
     *
     * @var string
     */
    public $market_info;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dtb_raise_project_idea';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectIdea[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectIdea
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
