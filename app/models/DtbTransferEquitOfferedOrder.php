<?php

class DtbTransferEquitOfferedOrder extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var integer
     */
    protected $raise_id;

    /**
     *
     * @var integer
     */
    protected $origin_user_id;

    /**
     *
     * @var integer
     */
    protected $new_user_Id;

    /**
     *
     * @var integer
     */
    protected $equit_offered;

    /**
     *
     * @var double
     */
    protected $price;

    /**
     *
     * @var integer
     */
    protected $result;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

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
     * Method to set the value of field origin_user_id
     *
     * @param integer $origin_user_id
     * @return $this
     */
    public function setOriginUserId($origin_user_id)
    {
        $this->origin_user_id = $origin_user_id;

        return $this;
    }

    /**
     * Method to set the value of field new_user_Id
     *
     * @param integer $new_user_Id
     * @return $this
     */
    public function setNewUserId($new_user_Id)
    {
        $this->new_user_Id = $new_user_Id;

        return $this;
    }

    /**
     * Method to set the value of field equit_offered
     *
     * @param integer $equit_offered
     * @return $this
     */
    public function setEquitOffered($equit_offered)
    {
        $this->equit_offered = $equit_offered;

        return $this;
    }

    /**
     * Method to set the value of field price
     *
     * @param double $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Method to set the value of field result
     *
     * @param integer $result
     * @return $this
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
     * Returns the value of field origin_user_id
     *
     * @return integer
     */
    public function getOriginUserId()
    {
        return $this->origin_user_id;
    }

    /**
     * Returns the value of field new_user_Id
     *
     * @return integer
     */
    public function getNewUserId()
    {
        return $this->new_user_Id;
    }

    /**
     * Returns the value of field equit_offered
     *
     * @return integer
     */
    public function getEquitOffered()
    {
        return $this->equit_offered;
    }

    /**
     * Returns the value of field price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Returns the value of field result
     *
     * @return integer
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dtb_transfer_equit_offered_order';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbTransferEquitOfferedOrder[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbTransferEquitOfferedOrder
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
