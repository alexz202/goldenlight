<?php

class DtbUserEducation extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $type;

    /**
     *
     * @var string
     */
    public $organization;

    /**
     *
     * @var string
     */
    public $major;

    /**
     *
     * @var string
     */
    public $education;

    /**
     *
     * @var string
     */
    public $reward_ts;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dtb_user_education';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbUserEducation[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbUserEducation
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
