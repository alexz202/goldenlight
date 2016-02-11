<?php

class DtbRaiseProjectTeamCertificate extends \Phalcon\Mvc\Model
{
    public function initialize(){
        $this->belongsTo('tmmember_id','DtbRaiseProjectTeam','tmmember_id');
    }

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var integer
     */
    protected $tmmember_id;

    /**
     *
     * @var string
     */
    protected $organization;

    /**
     *
     * @var string
     */
    protected $certificate_name;

    /**
     *
     * @var string
     */
    protected $reward_ts;

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
     * Method to set the value of field tmmember_id
     *
     * @param integer $tmmember_id
     * @return $this
     */
    public function setTmmemberId($tmmember_id)
    {
        $this->tmmember_id = $tmmember_id;

        return $this;
    }

    /**
     * Method to set the value of field organization
     *
     * @param string $organization
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * Method to set the value of field certificate_name
     *
     * @param string $certificate_name
     * @return $this
     */
    public function setCertificateName($certificate_name)
    {
        $this->certificate_name = $certificate_name;

        return $this;
    }

    /**
     * Method to set the value of field reward_ts
     *
     * @param string $reward_ts
     * @return $this
     */
    public function setRewardTs($reward_ts)
    {
        $this->reward_ts = $reward_ts;

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
     * Returns the value of field tmmember_id
     *
     * @return integer
     */
    public function getTmmemberId()
    {
        return $this->tmmember_id;
    }

    /**
     * Returns the value of field organization
     *
     * @return string
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Returns the value of field certificate_name
     *
     * @return string
     */
    public function getCertificateName()
    {
        return $this->certificate_name;
    }

    /**
     * Returns the value of field reward_ts
     *
     * @return string
     */
    public function getRewardTs()
    {
        return $this->reward_ts;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dtb_raise_project_team_certificate';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectTeamCertificate[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbRaiseProjectTeamCertificate
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
