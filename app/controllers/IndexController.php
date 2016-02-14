<?php

class IndexController extends ControllerBase
{


    public function initialize (){
        parent::initialize();
    }

    public function indexAction()
    {
      //统计数据

        $invest_order_obj=new DtbProjectInvestOrder();
        $raise_project=new DtbRaiseProjectBasic();

        $total=array(
            'all_money'=>0,
            'all_project'=>0,
            'all_user'=>0,
            'all_orgaization'=>0,
            'last_percent'=>0,
            'return_value'=>0,
        );
        $success_raise_project=array();
        $leader_investors=array();

        $invest_total= $invest_order_obj->getAllSuccessTotal();
        $raise_project_total=$raise_project->getAllSuccessTotal();

        if(count($invest_total)>0){
            $total['all_money']=$invest_total[0]['all_money'];
            $total['all_user']=$invest_total[0]['all_user_count'];
        }

       if(count($raise_project_total)>0){
           $total['all_project']=$raise_project_total[0]['all_project_count'];
           $total['all_user']=$raise_project_total[0]['all_rate_of_return'];
           $total['all_raise_user']=$raise_project_total[0]['all_raise_user_count'];
       }

        // 成功案例
        $raise_success_list=$raise_project->getSuccessProject('0,5');
        if(count($raise_success_list)>0)
            $success_raise_project=$raise_success_list;


        // 明星领投人
        $_leader_investors= DtbInvestorOrgaization::find(array(
            "conditions" => "result =1 and is_invest_leader=1",
            'order'=>'gold_fund desc',
            'limit'=>'6'
        ));
        if(count($_leader_investors)>0){
            $leader_investors=$_leader_investors;
        }

        $this->view->shareTotal=$total;
        $this->view->raise_success_list=$success_raise_project;
        $this->view->leaders_list=$leader_investors;

    }


}

