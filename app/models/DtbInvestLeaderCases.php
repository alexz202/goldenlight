<?php


class DtbInvestLeaderCases extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    protected $id;

    /**
     *
     * @var integer
     */
    protected $user_id;

    /**
     *
     * @var string
     */
    protected $project_name;

    /**
     *
     * @var string
     */
    protected $web_url;

    /**
     *
     * @var string
     */
    protected $project_desc;

    /**
     * Method to set the value of field id
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

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
     * Method to set the value of field web_url
     *
     * @param string $web_url
     * @return $this
     */
    public function setWebUrl($web_url)
    {
        $this->web_url = $web_url;

        return $this;
    }

    /**
     * Method to set the value of field project_desc
     *
     * @param string $project_desc
     * @return $this
     */
    public function setProjectDesc($project_desc)
    {
        $this->project_desc = $project_desc;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
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
     * Returns the value of field project_name
     *
     * @return string
     */
    public function getProjectName()
    {
        return $this->project_name;
    }

    /**
     * Returns the value of field web_url
     *
     * @return string
     */
    public function getWebUrl()
    {
        return $this->web_url;
    }

    /**
     * Returns the value of field project_desc
     *
     * @return string
     */
    public function getProjectDesc()
    {
        return $this->project_desc;
    }

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
