<?php

class DtbRaiseProjectIdea extends \Phalcon\Mvc\Model
{

    public function initialize(){
        $this->hasOne('raise_id','DtbRaiseProjectBasic','raise_id');
    }
    /**
     *
     * @var integer
     */
    protected $raise_id;

    /**
     *
     * @var string
     */
    protected $idea_info;

    /**
     *
     * @var string
     */
    protected $purpose;

    /**
     *
     * @var string
     */
    protected $livestock;

    /**
     *
     * @var string
     */
    protected $useform;

    /**
     *
     * @var string
     */
    protected $technical;

    /**
     *
     * @var integer
     */
    protected $update_ts;

    /**
     *
     * @var string
     */
    protected $market_info;

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
     * Method to set the value of field idea_info
     *
     * @param string $idea_info
     * @return $this
     */
    public function setIdeaInfo($idea_info)
    {
        $this->idea_info = $idea_info;

        return $this;
    }

    /**
     * Method to set the value of field purpose
     *
     * @param string $purpose
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;

        return $this;
    }

    /**
     * Method to set the value of field livestock
     *
     * @param string $livestock
     * @return $this
     */
    public function setLivestock($livestock)
    {
        $this->livestock = $livestock;

        return $this;
    }

    /**
     * Method to set the value of field useform
     *
     * @param string $useform
     * @return $this
     */
    public function setUseform($useform)
    {
        $this->useform = $useform;

        return $this;
    }

    /**
     * Method to set the value of field technical
     *
     * @param string $technical
     * @return $this
     */
    public function setTechnical($technical)
    {
        $this->technical = $technical;

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
     * Method to set the value of field market_info
     *
     * @param string $market_info
     * @return $this
     */
    public function setMarketInfo($market_info)
    {
        $this->market_info = $market_info;

        return $this;
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
     * Returns the value of field idea_info
     *
     * @return string
     */
    public function getIdeaInfo()
    {
        return $this->idea_info;
    }

    /**
     * Returns the value of field purpose
     *
     * @return string
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Returns the value of field livestock
     *
     * @return string
     */
    public function getLivestock()
    {
        return $this->livestock;
    }

    /**
     * Returns the value of field useform
     *
     * @return string
     */
    public function getUseform()
    {
        return $this->useform;
    }

    /**
     * Returns the value of field technical
     *
     * @return string
     */
    public function getTechnical()
    {
        return $this->technical;
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
     * Returns the value of field market_info
     *
     * @return string
     */
    public function getMarketInfo()
    {
        return $this->market_info;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dtb_raise_project_idea';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectIdea[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectIdea
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
