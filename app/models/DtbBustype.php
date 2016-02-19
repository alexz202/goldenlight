<?php

class DtbBustype extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $type_id;

    /**
     *
     * @var string
     */
    public $name;

    /**
     *
     * @var integer
     */
    public $pid;

    /**
     *
     * @var integer
     */
    public $sort;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dtb_bustype';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbBustype[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbBustype
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
