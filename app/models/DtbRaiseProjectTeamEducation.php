<?php

class DtbRaiseProjectTeamEducation extends \Phalcon\Mvc\Model
{
    public function initialize(){
        $this->belongsTo('tmmember_id','DtbRaiseProjectTeam','tmmember_id');
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
    public $tmmember_id;

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
        return 'dtb_raise_project_team_education';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectTeamEducation[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectTeamEducation
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}