<?php

class DtbLogUser extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $log_id;

    /**
     *
     * @var integer
     */
    protected $user_id;

    /**
     *
     * @var integer
     */
    protected $action_type;

    /**
     *
     * @var integer
     */
    protected $log_ts;

    /**
     * Method to set the value of field log_id
     *
     * @param integer $log_id
     * @return $this
     */
    public function setLogId($log_id)
    {
        $this->log_id = $log_id;

        return $this;
    }

    /**
     * Method to set the value of field user_id
     *
     * @param integer $user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Method to set the value of field action_type
     *
     * @param integer $action_type
     * @return $this
     */
    public function setActionType($action_type)
    {
        $this->action_type = $action_type;

        return $this;
    }

    /**
     * Method to set the value of field log_ts
     *
     * @param integer $log_ts
     * @return $this
     */
    public function setLogTs($log_ts)
    {
        $this->log_ts = $log_ts;

        return $this;
    }

    /**
     * Returns the value of field log_id
     *
     * @return integer
     */
    public function getLogId()
    {
        return $this->log_id;
    }

    /**
     * Returns the value of field user_id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Returns the value of field action_type
     *
     * @return integer
     */
    public function getActionType()
    {
        return $this->action_type;
    }

    /**
     * Returns the value of field log_ts
     *
     * @return integer
     */
    public function getLogTs()
    {
        return $this->log_ts;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dtb_log_user';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbLogUser[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbLogUser
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
