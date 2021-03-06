<?php

class DtbRaiseProjectQa extends \Phalcon\Mvc\Model
{

    public function initialize(){
        $this->belongsTo('raise_id','DtbRaiseProjectBasic','raise_id');
        $this->hasOne('user_id','DtbUserBasic','user_id');
       // $this->hasMany('msg_id','DtbRaiseProjectQaRemsg','msg_id');
         $this->hasOne('msg_id','DtbRaiseProjectQaRemsg','msg_id');
    }
    /**
     *
     * @var integer
     */
    protected $msg_id;

    /**
     *
     * @var integer
     */
    protected $raise_id;

    /**
     *
     * @var string
     */
    protected $msg;



    /**
     *
     * @var integer
     */
    protected $msg_ts;



    /**
     *
     * @var integer
     */
    protected $user_id;



    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setMsgId($msg_id)
    {
        $this->msg_id = $msg_id;

        return $this;
    }

    /**
     * Method to set the value of field raise_id
     *
     * @param integer $raise_id
     * @return $this
     */
    public function setRaiseId($raise_id)
    {
        $this->raise_id = $raise_id;

        return $this;
    }

    /**
     * Method to set the value of field msg
     *
     * @param string $msg
     * @return $this
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;

        return $this;
    }

    /**
     * Method to set the value of field remsg
     *
     * @param string $remsg
     * @return $this
     */
    public function setRemsg($remsg)
    {
        $this->remsg = $remsg;

        return $this;
    }

    /**
     * Method to set the value of field msg_ts
     *
     * @param integer $msg_ts
     * @return $this
     */
    public function setMsgTs($msg_ts)
    {
        $this->msg_ts = $msg_ts;

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
     * Returns the value of field id
     *
     * @return integer
     */
    public function getMsgId()
    {
        return $this->msg_id;
    }

    /**
     * Returns the value of field raise_id
     *
     * @return integer
     */
    public function getRaiseId()
    {
        return $this->raise_id;
    }

    /**
     * Returns the value of field msg
     *
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }



    /**
     * Returns the value of field msg_ts
     *
     * @return integer
     */
    public function getMsgTs()
    {
        return $this->msg_ts;
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
