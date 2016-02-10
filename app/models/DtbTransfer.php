<?php

class DtbTransfer extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $transfer_id;

    /**
     *
     * @var integer
     */
    protected $raise_id;

    /**
     *
     * @var integer
     */
    protected $sale_id;

    /**
     *
     * @var integer
     */
    protected $offered_num;

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
     *
     * @var double
     */
    protected $percent_invest_total;

    /**
     *
     * @var double
     */
    protected $percent_invest_offered;

    /**
     *
     * @var integer
     */
    protected $pay_form;

    /**
     *
     * @var integer
     */
    protected $tax_form;

    /**
     *
     * @var integer
     */
    protected $end_ts;

    /**
     * Method to set the value of field transfer_id
     *
     * @param integer $transfer_id
     * @return $this
     */
    public function setTransferId($transfer_id)
    {
        $this->transfer_id = $transfer_id;

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
     * Method to set the value of field sale_id
     *
     * @param integer $sale_id
     * @return $this
     */
    public function setSaleId($sale_id)
    {
        $this->sale_id = $sale_id;

        return $this;
    }

    /**
     * Method to set the value of field offered_num
     *
     * @param integer $offered_num
     * @return $this
     */
    public function setOfferedNum($offered_num)
    {
        $this->offered_num = $offered_num;

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
     * Method to set the value of field percent_invest_total
     *
     * @param double $percent_invest_total
     * @return $this
     */
    public function setPercentInvestTotal($percent_invest_total)
    {
        $this->percent_invest_total = $percent_invest_total;

        return $this;
    }

    /**
     * Method to set the value of field percent_invest_offered
     *
     * @param double $percent_invest_offered
     * @return $this
     */
    public function setPercentInvestOffered($percent_invest_offered)
    {
        $this->percent_invest_offered = $percent_invest_offered;

        return $this;
    }

    /**
     * Method to set the value of field pay_form
     *
     * @param integer $pay_form
     * @return $this
     */
    public function setPayForm($pay_form)
    {
        $this->pay_form = $pay_form;

        return $this;
    }

    /**
     * Method to set the value of field tax_form
     *
     * @param integer $tax_form
     * @return $this
     */
    public function setTaxForm($tax_form)
    {
        $this->tax_form = $tax_form;

        return $this;
    }

    /**
     * Method to set the value of field end_ts
     *
     * @param integer $end_ts
     * @return $this
     */
    public function setEndTs($end_ts)
    {
        $this->end_ts = $end_ts;

        return $this;
    }

    /**
     * Returns the value of field transfer_id
     *
     * @return integer
     */
    public function getTransferId()
    {
        return $this->transfer_id;
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
     * Returns the value of field sale_id
     *
     * @return integer
     */
    public function getSaleId()
    {
        return $this->sale_id;
    }

    /**
     * Returns the value of field offered_num
     *
     * @return integer
     */
    public function getOfferedNum()
    {
        return $this->offered_num;
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
     * Returns the value of field percent_invest_total
     *
     * @return double
     */
    public function getPercentInvestTotal()
    {
        return $this->percent_invest_total;
    }

    /**
     * Returns the value of field percent_invest_offered
     *
     * @return double
     */
    public function getPercentInvestOffered()
    {
        return $this->percent_invest_offered;
    }

    /**
     * Returns the value of field pay_form
     *
     * @return integer
     */
    public function getPayForm()
    {
        return $this->pay_form;
    }

    /**
     * Returns the value of field tax_form
     *
     * @return integer
     */
    public function getTaxForm()
    {
        return $this->tax_form;
    }

    /**
     * Returns the value of field end_ts
     *
     * @return integer
     */
    public function getEndTs()
    {
        return $this->end_ts;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dtb_transfer';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbTransfer[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbTransfer
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
