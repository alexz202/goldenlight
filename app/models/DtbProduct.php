<?php

class DtbProduct extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $product_id;

    /**
     *
     * @var integer
     */
    protected $user_Id;

    /**
     *
     * @var string
     */
    protected $project_name;

    /**
     *
     * @var string
     */
    protected $product_name;

    /**
     *
     * @var double
     */
    protected $price;

    /**
     *
     * @var string
     */
    protected $product_img;

    /**
     *
     * @var integer
     */
    protected $exist_num;

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
     * Method to set the value of field project_name
     *
     * @param string $project_name
     * @return $this
     */
    public function setProjectName($project_name)
    {
        $this->project_name = $project_name;

        return $this;
    }

    /**
     * Method to set the value of field product_name
     *
     * @param string $product_name
     * @return $this
     */
    public function setProductName($product_name)
    {
        $this->product_name = $product_name;

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
     * Method to set the value of field product_img
     *
     * @param string $product_img
     * @return $this
     */
    public function setProductImg($product_img)
    {
        $this->product_img = $product_img;

        return $this;
    }

    /**
     * Method to set the value of field exist_num
     *
     * @param integer $exist_num
     * @return $this
     */
    public function setExistNum($exist_num)
    {
        $this->exist_num = $exist_num;

        return $this;
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
     * Returns the value of field user_Id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_Id;
    }

    /**
     * Returns the value of field project_name
     *
     * @return string
     */
    public function getProjectName()
    {
        return $this->project_name;
    }

    /**
     * Returns the value of field product_name
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->product_name;
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
     * Returns the value of field product_img
     *
     * @return string
     */
    public function getProductImg()
    {
        return $this->product_img;
    }

    /**
     * Returns the value of field exist_num
     *
     * @return integer
     */
    public function getExistNum()
    {
        return $this->exist_num;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dtb_product';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbProduct[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbProduct
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
