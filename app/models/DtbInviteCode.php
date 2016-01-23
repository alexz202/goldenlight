<?php


class DtbInviteCode extends \Phalcon\Mvc\Model
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
    protected $invite_code;

    /**
     *
     * @var integer
     */
    protected $limited;

    /**
     *
     * @var integer
     */
    protected $create_ts;

    /**
     *
     * @var integer
     */
    protected $is_use;

    /**
     * Method to set the value of field d
     *
     * @param integer $d
     * @return $this
     */
    public function setD($d)
    {
        $this->d = $d;

        return $this;
    }

    /**
     * Method to set the value of field invite_code
     *
     * @param integer $invite_code
     * @return $this
     */
    public function setInviteCode($invite_code)
    {
        $this->invite_code = $invite_code;

        return $this;
    }

    /**
     * Method to set the value of field limited
     *
     * @param integer $limited
     * @return $this
     */
    public function setLimited($limited)
    {
        $this->limited = $limited;

        return $this;
    }

    /**
     * Method to set the value of field create_ts
     *
     * @param integer $create_ts
     * @return $this
     */
    public function setCreateTs($create_ts)
    {
        $this->create_ts = $create_ts;

        return $this;
    }

    /**
     * Returns the value of field d
     *
     * @return integer
     */
    public function getD()
    {
        return $this->d;
    }

    /**
     * Returns the value of field invite_code
     *
     * @return integer
     */
    public function getInviteCode()
    {
        return $this->invite_code;
    }

    /**
     * Returns the value of field limited
     *
     * @return integer
     */
    public function getLimited()
    {
        return $this->limited;
    }

    /**
     * Returns the value of field create_ts
     *
     * @return integer
     */
    public function getCreateTs()
    {
        return $this->create_ts;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dtb_invite_code';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbInviteCode[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbInviteCode
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }


    public  function getOneInviteCode(){
          $res=self::findFirst(array('is_use'=>'0','order'=>'id'));
          if($res==false){
             $value= $this->createInviteCodes();
              if(!empty($value))
                  return $value;
              else
                  return false;

          }else{
               return $res->invite_code;
          }



    }

    private function createInviteCodes($size=10,$len=6){
        $min=pow(10,$len);
        $max=pow(10,$len+1);
        $i=$size;
        $value=0;
        do{
            $inc=new DtbInviteCode();
            $value=mt_rand($min+1,$max-1);
            $inc->invite_code=$value;
            $inc->create_ts=time();
            if($inc->save()==false){

            }else{
                $i--;
            }
        }while($i>0);
        if(empty($value))
            return $value;
        else
            return false;
    }

}
