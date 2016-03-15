<?php

class DtbProductCart extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cart_Id;

    /**
     *
     * @var integer
     */
    protected $user_id;

    /**
     *
     * @var integer
     */
    protected $product_id;

    /**
     *
     * @var integer
     */
    protected $num;

    /**
     *
     * @var integer
     */
    protected $update_ts;

    /**
     *
     * @var double
     */
    protected $price;

    /**
     *
     * @var double
     */
    protected $total;

    /**
     * Method to set the value of field cart_Id
     *
     * @param integer $cart_Id
     * @return $this
     */
    public function setCartId($cart_Id)
    {
        $this->cart_Id = $cart_Id;

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
     * Method to set the value of field product_id
     *
     * @param integer $product_id
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;

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
     * Returns the value of field cart_Id
     *
     * @return integer
     */
    public function getCartId()
    {
        return $this->cart_Id;
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
     * Returns the value of field product_id
     *
     * @return integer
     */
    public function getProductId()
    {
        return $this->product_id;
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
     * Returns the value of field update_ts
     *
     * @return integer
     */
    public function getUpdateTs()
    {
        return $this->update_ts;
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
     * Returns the value of field total
     *
     * @return double
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dtb_product_cart';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbProductCart[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbProductCart
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
