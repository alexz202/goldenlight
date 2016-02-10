<?php

class DtbInvestLeaderCases extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $user_id;

    /**
     *
     * @var string
     */
    public $project_name;

    /**
     *
     * @var string
     */
    public $web_url;

    /**
     *
     * @var string
     */
    public $project_desc;

    /**
     *
     * @var string
     */
    public $logo;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dtb_invest_leader_cases';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbInvestLeaderCases[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbInvestLeaderCases
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
