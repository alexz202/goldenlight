<?php

class DtbRaiseProjectTeam extends \Phalcon\Mvc\Model
{
    public function initialize(){
        $this->belongsTo('raise_id','DtbRaiseProjectBasic','raise_id');
    }

    /**
     *
     * @var integer
     */
    public $tmmember_id;

    /**
     *
     * @var integer
     */
    public $raise_id;

    /**
     *
     * @var string
     */
    public $user_name;

    /**
     *
     * @var string
     */
    public $avatar;

    /**
     *
     * @var string
     */
    public $position;

    /**
     *
     * @var integer
     */
    public $commitment;

    /**
     *
     * @var double
     */
    public $ownership;

    /**
     *
     * @var string
     */
    public $nationality;

    /**
     *
     * @var string
     */
    public $role;

    /**
     *
     * @var string
     */
    public $birthday;

    /**
     *
     * @var string
     */
    public $country;

    /**
     *
     * @var string
     */
    public $city;

    /**
     *
     * @var string
     */
    public $address;

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
        return 'dtb_raise_project_team';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectTeam[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectTeam
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
