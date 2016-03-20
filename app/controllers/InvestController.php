<?php
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


define('result_success',1);
define('result_fail',2);

define('status_success',1);
define('status_fail',2);
/**
 * 投资
 * Class InvestController
 */
class InvestController extends ControllerBase
{

    const project_success_value=0.8;

    public function initialize()
    {
        parent::initialize();
    }


    public function indexAction()
    {

        $nowurl = $this->request->getURI();

        $type_list = $this->_getBusTypeList();
        $this->view->type_list = $type_list;
        $this->view->url = $nowurl;

        $project_type='';
        $project_grow_up='';
        $is_type_belongs=false;

        $numberPage = 1;
        if ($this->request->isGet()) {

            if (isset($_GET['project_type'])) {
                $project_type = $_GET['project_type'];
                if (isset($type_list[$_GET['project_type']])) {
                    foreach ($type_list[$_GET['project_type']]['children'] as $value) {
                        $type_ids[] = intval($value['type_id']);
                    }
                    unset($_GET['project_type']);
                    $is_type_belongs=true;

                }
            }

            if (isset($_GET['project_grow_up'])) {
                $project_grow_up = $_GET['project_grow_up'];
            }
            $query = Criteria::fromInput($this->di, "DtbRaiseProjectBasic", $_GET);
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        if($is_type_belongs){
            $query->inWhere('project_type',$type_ids);
        }


        $this->persistent->parameters = $query->getParams();
        $parameters = $this->persistent->parameters;

        if (!is_array($parameters)) {
            $parameters = array();
        }

        $this->view->project_type = $project_type;
        $this->view->project_grow_up =$project_grow_up;

        $parameters["order"] = "raise_id";

        $dtb_raise_project_basic = DtbRaiseProjectBasic::find($parameters);
        if (count($dtb_raise_project_basic) == 0) {
            $this->flash->notice("The search did not find any dtb_raise_project_basic");

        }

        $paginator = new Paginator(array(
            "data" => $dtb_raise_project_basic,
            "limit" => $this->config->application->page_size,
            "page" => $numberPage
        ));

        $page=$paginator->getPaginate();

        $page_split=$this->_split_page($page->current,$page->total_pages);

        $this->view->page_split=$page_split;
        //$this->view->disable();
        $this->view->page = $page;



    }



    public function pjCenterAction($raise_id)
    {
        if($this->request->isGet()){
            $raise_id=$this->request->getQuery('raise_id');
            if(empty($raise_id)){
                die('invaild project');
            }
            $query = Criteria::fromInput($this->di, "DtbRaiseProjectBasic", $_GET);
            $this->persistent->parameters = $query->getParams();
            $parameters=$this->persistent->parameters;
            $dtb_raise_project_basic=DtbRaiseProjectBasic::findFirst($parameters);
            $this->view->dtb_raise_project_basic=$dtb_raise_project_basic;

            $volt = new \Phalcon\Mvc\View\Engine\Volt($this->view, $this->di);

            $compiler = $volt->getCompiler();
            $compiler->addFunction('shuffle', 'md5');

        }
        else{
            die('invaild error');
        }


    }


    public function makeOrderAction($raise_id){
        if (!$this->request->isPost()) {

            $dtb_project = DtbRaiseProjectBasic::findFirstByraise_id($raise_id);
            if (!$dtb_project) {
                $this->flash->error("dtb_product was not found");

            }

            $this->view->raise_id = $dtb_project->raise_id;

            $this->tag->setDefault("project_name", $dtb_project->getProjectName());
            $this->tag->setDefault("user_id", $dtb_project->getUserId());
            $this->tag->setDefault("project_desc", $dtb_project->getProjectDesc());
            $this->tag->setDefault("aim_money", $dtb_project->getAimMoney());
           // $this->tag->setDefault("aim_equity_offered", $dtb_project->getAimEquityOffered());
            //$this->tag->setDefault("already_equity_offered", $dtb_project->getAlreadyEquityOffered());
          //  $this->tag->setDefault("already_money", $dtb_project->getAlreadyMoney());
            $this->tag->setDefault("rate_of_return", $dtb_project->getRateOfReturn());


        }
    }

    public function payFormAction($order_id){
        $invest_order=DtbProjectInvestOrder::findFirstByorder_id($order_id);
        $invest_order->real_pay_fee;
        $this->view->setVar('order_id',$order_id);
        $this->view->setVar('real_pay_fee',$invest_order->real_pay_fee);
    }

    public function payFinishAction($order_id){
        $invest_order=DtbProjectInvestOrder::findFirstByorder_id($order_id);
        $invest_order->real_pay_fee;
        $this->view->setVar('order_id',$order_id);
        $this->view->setVar('real_pay_fee',$invest_order->real_pay_fee);
    }

//第三方支付
    public function payCallbackAction($order_id){
        $is_pay=true;
        if($is_pay){
            //TODO PAY CALLBACK
            //modify order_id
            $invest_order=DtbProjectInvestOrder::findFirstByorder_id($order_id);
            $raise_id=$invest_order->getRaiseId();
            $wheel_id=$invest_order->getWheelId();
            $project_wheel_info=DtbRaiseProjectWheel::findFirstBywheel_id($wheel_id);

            if($project_wheel_info->getRaiseId()!=$raise_id){
                die('project error');
            }
            $invest_money=$invest_order->getInvestMoney();
            $aim_money=$project_wheel_info->getAimMoney();
            $already_money=$project_wheel_info->getAlreadyMoney();
            $result=$project_wheel_info->getResult();
            $is_update_status=false;

            if(($invest_money+$already_money)>=$aim_money*self::project_success_value && intval($result)==0){
                $is_update_status=true;
            }
            $wheel_invested_num=$project_wheel_info->getWheelInvestedNum();


            try{
                $this->di['db']->begin();
                $invest_order_new=new DtbProjectInvestOrder();
                $params=array('result'=>result_success,
                    'status'=>0,
                    'update_ts'=>time(),
                );
               $res1=$invest_order_new->updateOrderId($order_id,$params);

                $project_wheel_info->setAlreadyMoney($invest_money+$already_money);
                $project_wheel_info->setAlreadyMoney(intval($invest_money+$already_money));
                $project_wheel_info->setWheelInvestedNum($wheel_invested_num+1);
                if($is_update_status){
                    $project_wheel_info->setResult(result_success);
                }

               $res2=$project_wheel_info->save();

                if($res1 &&$res2){
                    $this->di['db']->commit();
                    $this->flash->success('成功');
                    return  $this->response->redirect('/invest/payFinish/'.$order_id);

                }else{
                    $this->di['db']->rollback();
                }

            }catch (Exception $ex){
                $this->di['db']->rollback();
            }
        }

    }

    public function submitOrderAction($raise_id){
         //TODO 生成订单

        if($this->request->isPost()) {

            $raise_id=intval($raise_id);
            $dtb_project = DtbRaiseProjectBasic::findFirstByraise_id($raise_id);
            $invest_order=new DtbProjectInvestOrder();
            $invest_money = $this->request->getPost('invest_money');
            $invest_code = $this->request->getPost('invest_code');
            $check_use_invite_code = false;
            if (empty($invest_code)) {
                $invite_code = DtbInviteCode::findFirstByinvite_code($invest_code);
                if ($invite_code)
                    if ($invite_code['is_use'] == 0) {
                        $check_use_invite_code = true;
                    }
            }
            $user_id=$this->cookies->get('user_id');

            if(!$check_use_invite_code)
                $invest_code='';

            $params=array(
                'invest_money'=>$invest_money,
               'invest_code'=>$invest_code,
                'equit_offered'=>$invest_money,
                'service_fee'=>0,
                'bond'=>0,
                'real_pay_fee'=>$invest_money,
            );

           $res= $invest_order->creatOrder($order_id,$raise_id,$dtb_project->now_wheel_id,$user_id,$params);
            if($res) {
                //$this->flash->success('修改成功');

                $this->flash->success('认证成功');
                return  $this->response->redirect('/invest/payForm/'.$order_id);
//                return $this->dispatcher->forward(array(
//                    'controller' => 'invest',
//                    'action' => 'payForm',
//                    "params" => array($order_id)
//                ));
            }else{
                $this->flash->error("create order error");



            }



        }




    }




}

