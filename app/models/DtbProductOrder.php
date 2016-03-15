<?php

class DtbProductOrder extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $order_Id;

    /**
     *
     * @var integer
     */
    protected $product_Id;

    /**
     *
     * @var integer
     */
    protected $user_Id;

    /**
     *
     * @var double
     */
    protected $price;

    /**
     *
     * @var integer
     */
    protected $num;

    /**
     *
     * @var double
     */
    protected $total;

    /**
     *
     * @var integer
     */
    protected $update_ts;

    /**
     *
     * @var integer
     */
    protected $result;

    /**
     * Method to set the value of field order_Id
     *
     * @param integer $order_Id
     * @return $this
     */
    public function setOrderId($order_Id)
    {
        $this->order_Id = $order_Id;

        return $this;
    }

    /**
     * Method to set the value of field product_Id
     *
     * @param integer $product_Id
     * @return $this
     */
    public function setProductId($product_Id)
    {
        $this->product_Id = $product_Id;

        return $this;
    }

    /**
     * Method to set the value of field user_Id
     *
     * @param integer $user_Id
     * @return $this
     */
    public function setUserId($user_Id)
    {
        $this->user_Id = $user_Id;

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
     * Method to set the value of field num
     *
     * @param integer $num
     * @return $this
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Method to set the value of field total
     *
     * @param double $total
     * @return $this
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Method to set the value of field update_ts
     *
     * @param integer $update_ts
     * @return $this
     */
    public function setUpdateTs($update_ts)
    {
        $this->update_ts = $update_ts;

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
     * Returns the value of field order_Id
     *
     * @return integer
     */
    public function getOrderId()
    {
        return $this->order_Id;
    }

    /**
     * Returns the value of field product_Id
     *
     * @return integer
     */
    public function getProductId()
    {
        return $this->product_Id;
    }

    /**
     * Returns the value of field user_Id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_Id;
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
     * Returns the value of field num
     *
     * @return integer
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Returns the value of field total
     *
     * @return double
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Returns the value of field update_ts
     *
     * @return integer
     */
    public function getUpdateTs()
    {
        return $this->update_ts;
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
        return 'dtb_product_order';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbProductOrder[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbProductOrder
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
