<?php

class DtbProjectInvestOrder extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    protected $order_id;

    /**
     *
     * @var double
     */
    protected $invest_money;

    /**
     *
     * @var integer
     */
    protected $equit_offered;

    /**
     *
     * @var double
     */
    protected $service_fee;

    /**
     *
     * @var integer
     */
    protected $raise_id;


    protected $wheel_id;

    /**
     *
     * @var integer
     */
    protected $user_id;

    /**
     *
     * @var integer
     */
    protected $bond;

    /**
     *
     * @var integer
     */
    protected $invite_code;

    /**
     *
     * @var double
     */
    protected $real_pay_fee;

    /**
     *
     * @var integer
     */
    protected $create_ts;

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
     *
     * @var integer
     */
    protected $status;
    /**
     * Method to set the value of field id
     *
     * @param string $id
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;

        return $this;
    }

    /**
     * Method to set the value of field invest_money
     *
     * @param double $invest_money
     * @return $this
     */
    public function setInvestMoney($invest_money)
    {
        $this->invest_money = $invest_money;

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
     * Method to set the value of field service_fee
     *
     * @param double $service_fee
     * @return $this
     */
    public function setServiceFee($service_fee)
    {
        $this->service_fee = $service_fee;

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
     * Method to set the value of field wheel_id
     *
     * @param integer $wheel_id
     * @return $this
     */

    public function setWheelId($wheel_id)
    {
        $this->wheel_id = $wheel_id;

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
     * Method to set the value of field bond
     *
     * @param integer $bond
     * @return $this
     */
    public function setBond($bond)
    {
        $this->bond = $bond;

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
     * Method to set the value of field real_pay_fee
     *
     * @param double $real_pay_fee
     * @return $this
     */
    public function setRealPayFee($real_pay_fee)
    {
        $this->real_pay_fee = $real_pay_fee;

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
     * Method to set the value of field result
     *
     * @param integer $result
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * Returns the value of field invest_money
     *
     * @return double
     */
    public function getInvestMoney()
    {
        return $this->invest_money;
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
     * Returns the value of field service_fee
     *
     * @return double
     */
    public function getServiceFee()
    {
        return $this->service_fee;
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
     * Returns the value of field raise_id
     *
     * @return integer
     */
    public function getWheelId()
    {
        return $this->wheel_id;
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
     * Returns the value of field bond
     *
     * @return integer
     */
    public function getBond()
    {
        return $this->bond;
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
     * Returns the value of field real_pay_fee
     *
     * @return double
     */
    public function getRealPayFee()
    {
        return $this->real_pay_fee;
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
     * Returns the value of field result
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dtb_project_invest_order';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbProjectInvestOrder[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DtbProjectInvestOrder
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    public  function getAllSuccessTotal(){
        $sql="select sum(invest_money) as all_money,count(DISTINCT(user_id)) as all_user_count from DtbProjectInvestOrder where status=1 ";
        //var_dump($this->getDI());
        $query=new Phalcon\Mvc\Model\Query($sql,$this->getDI());
        return  $res=$query->execute();
    }

    function creatOrder(&$order_id,$raise_id,$wheel_id,$user_id,$params){
        $flag=false;
        try {
            $this->di['db']->begin();
            $nowtime = time();
            $order = new  DtbProjectInvestOrder();
            $order->invest_money = $params['invest_money'];
            $order->equit_offered = $params['equit_offered'];
            $order->service_fee = $params['service_fee'];
            $order->raise_id = $raise_id;
            $order->user_id = $user_id;
            $order->bond = $params['bond'];
            $order->invite_code = $params['invite_code'];
            $order->real_pay_fee = $params['real_pay_fee'];//?
            $order->create_ts = $nowtime;
            $order->update_ts = $nowtime;
            $order->wheel_id = $wheel_id;
            $order->result = 0;

            if(!$order->create()){
                foreach($order->getMessages() as $message){
                    echo $message;
                }
                $this->di['db']->rollback();
                return $flag;
            }else{
                $action_type=$this->di['config']->log_user->createorder;
                $log_ts=time();
                $sql="insert into DtbLogUser (user_id,action_type,log_ts) values('{$user_id}','{$action_type}','{$log_ts}' )";
                $query=new Phalcon\Mvc\Model\Query($sql,$this->getDI());
                $res1=$query->execute();

                if(!$res1){
                    $this->di['db']->rollback();
                }
                else{
                    $flag=true;
                    $this->di['db']->commit();
                    $order_id=$order->getOrderId();
                }
                return $flag;
            }


        }catch (Exception $ex){
            $this->di['db']->rollback();
            return $flag;
        }
    }


    function updateOrderId($order_id,$params){
        $order = DtbProjectInvestOrder::findFirstByorder_id($order_id);
        if($order){
            $order->result=$params['result'];
            $order->status=$params['status'];
            $order->update_ts=$params['update_ts'];
            if(!$order->save()){
                foreach($order->getMessages() as $message){
                    echo $message;
                }
            }else{
                return true;
            }
        }else{
            throw new \InvalidArgumentException('The order is not found');
            return false;
        }
    }


}
