<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class UserRaiseBasicController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }


    public function ajaxGetTypeAction(){
        if($this->request->isPost()){
            $pid=$this->request->getPost('pid');
            //行业分类
            $type_children_list=array();
            $type_list = $this->_getBusTypeList();
            if(isset($type_list[$pid])){
                $type_children_list=$type_list[$pid]['children'];
                echo json_encode($type_children_list);
            }

        }else{
            echo json_encode(array());
        }
        $this->view->disable();
    }

    /**
     * Searches for dtb_raise_project_basic
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "DtbRaiseProjectBasic", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "raise_id";

        $dtb_raise_project_basic = DtbRaiseProjectBasic::find($parameters);
        if (count($dtb_raise_project_basic) == 0) {
            $this->flash->notice("The search did not find any dtb_raise_project_basic");

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_basic",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $dtb_raise_project_basic,
            "limit"=> 10,
            "page" => $numberPage
        ));

        $this->view->page = $paginator->getPaginate();
    }

    /**
     * Displays the creation form
     */
    public function newAction()
    {
        $type= $this->request->get('type');
        $type=empty($type)?0:$type;
        $user_id=$this->_getCookie('user_id');
        $project_basic=DtbRaiseProjectBasic::findFirst(
        array(
            "conditions" => "user_id = :user_id: and status=0  ",
            "bind"       => array("user_id" => $user_id),
            "order"=>'raise_id desc'
        ));

        if($project_basic){
           // $this->view->setVar('raise_id',$project_basic->getRaiseId());
            $this->view->setVar('raise_id',1);
        }else{

        }
        //tag default
        $this->tag->setDefault('project_grow_up',$type);
        $this->tag->setDefault('currency',1);
        //行业分类
        $type_list = $this->_getBusTypeList();
        $this->view->type_list = $type_list;
        //tag setting
        $this->view->iscreate=1;
        $this->view->project_type=$type;
        $this->view->is_current=1;

    }


    /**
     * Displays the creation form
     */
    public function newcompanyAction($raise_id,$type)
    {
//        $type= $this->request->get('type');
//        $type=empty($type)?0:$type;
        $user_id=$this->_getCookie('user_id');
        if($raise_id)
        $dtb_raise_project_basic = DtbRaiseProjectBasic::findFirstByraise_id($raise_id);
        else
            $dtb_raise_project_basic=DtbRaiseProjectBasic::findFirst(
            array(
                "conditions" => "user_id = :user_id: and status=0  ",
                "bind"       => array("user_id" => $user_id),
                "order"=>'raise_id desc'
            ));

        $this->view->setVar('raise_id',$raise_id);


        $this->tag->setDefault("country", $dtb_raise_project_basic->getCountry());
        $this->tag->setDefault("address1", $dtb_raise_project_basic->getAddress1());
        $this->tag->setDefault("address2", $dtb_raise_project_basic->getAddress2());
        $this->tag->setDefault("post_card", $dtb_raise_project_basic->getPostCard());
        $this->tag->setDefault("city", $dtb_raise_project_basic->getCity());
        $this->tag->setDefault("next_two_y_total_wage", $dtb_raise_project_basic->getNextTwoYTotalWage());
        $this->tag->setDefault("company_number", $dtb_raise_project_basic->getCompanyNumber());
        $this->tag->setDefault("company_register_ts",date('Y-m-d',$dtb_raise_project_basic->getCompanyRegisterTs()));
        $this->tag->setDefault("immediate_loan", $dtb_raise_project_basic->getImmediateLoan());

        $this->view->setVar('company_register_ts',date('Y-m-d',$dtb_raise_project_basic->getCompanyRegisterTs()));
        //tag default
        $this->tag->setDefault('project_grow_up',$type);
        //行业分类

        //tag setting
        $this->view->iscreate=1;
        $this->view->project_type=$type;
        $this->view->is_current=2;

    }




    /**
     * Displays the creation form
     */
    public function editcompanyAction($raise_id)
    {
//        $type= $this->request->get('type');
//        $type=empty($type)?0:$type;
        $user_id=$this->_getCookie('user_id');
        if($raise_id)
            $dtb_raise_project_basic = DtbRaiseProjectBasic::findFirstByraise_id($raise_id);

        $this->view->setVar('raise_id',$raise_id);
        $this->view->setVar('project_type',$dtb_raise_project_basic->getProjectType());

        $this->tag->setDefault("country", $dtb_raise_project_basic->getCountry());
        $this->tag->setDefault("address1", $dtb_raise_project_basic->getAddress1());
        $this->tag->setDefault("address2", $dtb_raise_project_basic->getAddress2());
        $this->tag->setDefault("post_card", $dtb_raise_project_basic->getPostCard());
        $this->tag->setDefault("city", $dtb_raise_project_basic->getCity());
        $this->tag->setDefault("next_two_y_total_wage", $dtb_raise_project_basic->getNextTwoYTotalWage());
        $this->tag->setDefault("company_number", $dtb_raise_project_basic->getCompanyNumber());
        $this->tag->setDefault("company_register_ts",date('Y-m-d',$dtb_raise_project_basic->getCompanyRegisterTs()));
        $this->tag->setDefault("immediate_loan", $dtb_raise_project_basic->getImmediateLoan());

        $this->view->setVar('company_register_ts',date('Y-m-d',$dtb_raise_project_basic->getCompanyRegisterTs()));
        //tag default

        //tag setting
        $this->view->iscreate=0;
        $this->view->is_current=2;
        $this->view->isusercenter=1;

    }

    /**
     * Edits a dtb_raise_project_basic
     *
     * @param string $raise_id
     */
    public function editAction($raise_id)
    {

        if (!$this->request->isPost()) {
            $dtb_raise_project_basic = DtbRaiseProjectBasic::findFirstByraise_id($raise_id);
            if (!$dtb_raise_project_basic) {
                $this->flash->error("dtb_raise_project_basic was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "UserRaiseBasic",
                    "action" => "index"
                ));
            }

            $this->view->raise_id = $dtb_raise_project_basic->raise_id;

            $this->tag->setDefault("raise_id", $dtb_raise_project_basic->getRaiseId());
            $this->tag->setDefault("user_id", $dtb_raise_project_basic->getUserId());
            $this->tag->setDefault("project_name", $dtb_raise_project_basic->getProjectName());
            $this->tag->setDefault("project_desc", $dtb_raise_project_basic->getProjectDesc());
            $this->tag->setDefault("project_grow_up", $dtb_raise_project_basic->getProjectGrowUp());
            $this->tag->setDefault("company_logo", $dtb_raise_project_basic->getCompanyLogo());
            $this->tag->setDefault("aim_money", $dtb_raise_project_basic->getAimMoney());
            $this->tag->setDefault("project_type", $dtb_raise_project_basic->getProjectType());
        //    $this->tag->setDefault("aim_equity_offered", $dtb_raise_project_basic->getAimEquityOffered());
        //    $this->tag->setDefault("already_equity_offered", $dtb_raise_project_basic->getAlreadyEquityOffered());
         //   $this->tag->setDefault("already_money", $dtb_raise_project_basic->getAlreadyMoney());
//            $this->tag->setDefault("valuation", $dtb_raise_project_basic->getValuation());
//            $this->tag->setDefault("rate_of_return", $dtb_raise_project_basic->getRateOfReturn());
//            $this->tag->setDefault("video_url", $dtb_raise_project_basic->getVideoUrl());
//            $this->tag->setDefault("address1", $dtb_raise_project_basic->getAddress1());
//            $this->tag->setDefault("address2", $dtb_raise_project_basic->getAddress2());
//            $this->tag->setDefault("country", $dtb_raise_project_basic->getCountry());
//            $this->tag->setDefault("province", $dtb_raise_project_basic->getProvince());
//            $this->tag->setDefault("dist", $dtb_raise_project_basic->getDist());
//            $this->tag->setDefault("city", $dtb_raise_project_basic->getCity());
//            $this->tag->setDefault("post_card", $dtb_raise_project_basic->getPostCard());
//            $this->tag->setDefault("company", $dtb_raise_project_basic->getCompany());
//            $this->tag->setDefault("webstate", $dtb_raise_project_basic->getWebstate());
//            $this->tag->setDefault("create_ts", $dtb_raise_project_basic->getCreateTs());
//            $this->tag->setDefault("public_ts", $dtb_raise_project_basic->getPublicTs());
//            $this->tag->setDefault("end_ts", $dtb_raise_project_basic->getEndTs());
//            $this->tag->setDefault("invested_num", $dtb_raise_project_basic->getInvestedNum());

            $this->tag->setDefault("currency", $dtb_raise_project_basic->getCurrency());
            //$this->tag->setDefault("next_two_y_total_wage", $dtb_raise_project_basic->getNextTwoYTotalWage());
            $this->tag->setDefault("next_discount", $dtb_raise_project_basic->getNextDiscount());
//            $this->tag->setDefault("comment", $dtb_raise_project_basic->getComment());
//            $this->tag->setDefault("status", $dtb_raise_project_basic->getStatus());
//            $this->tag->setDefault("result", $dtb_raise_project_basic->getResult());
            $project_type=$dtb_raise_project_basic->getProjectType();
            //tag default
            $this->tag->setDefault('project_grow_up',$dtb_raise_project_basic->getProjectGrowUp());



            //行业分类
            $type_list = $this->_getBusTypeList();
            $this->view->type_list = $type_list;
            $pid=$this->getTypePid($type_list,$project_type);
            $this->view->setVar('pid',$pid);
            //tag setting
            $this->view->iscreate=1;
            $this->view->isusercenter=1;
            $this->view->project_type=intval($project_type);
            $this->view->is_current=1;
        }
    }



    /**
     * Creates a new dtb_raise_project_basic
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "UserRaiseBasic",
                "action" => "index"
            ));
        }

        $dtb_raise_project_basic = new DtbRaiseProjectBasic();

        $dtb_raise_project_basic->setUserId($this->request->getPost("user_id"));
        $dtb_raise_project_basic->setProjectName($this->request->getPost("project_name"));
        $dtb_raise_project_basic->setProjectDesc($this->request->getPost("project_desc"));
        $dtb_raise_project_basic->setProjectGrowUp($this->request->getPost("project_grow_up"));
        $dtb_raise_project_basic->setCompanyLogo($this->request->getPost("company_logo"));
        $dtb_raise_project_basic->setAimMoney($this->request->getPost("aim_money"));
        $dtb_raise_project_basic->setProjectType($this->request->getPost("project_type"));


        //图片上传
        $img_list=array();
        $project_log=array();
        list($img_list,$project_log) = $this->_upload_img();
        $company_logo=isset($img_list['company_logo'])?$img_list['company_logo']:'';
        var_dump($company_logo);
        if(!empty($company_logo))
        $dtb_raise_project_basic->setCompanyLogo($company_logo);
       // $dtb_raise_project_basic->setAimEquityOffered($this->request->getPost("aim_equity_offered"));
       // $dtb_raise_project_basic->setAlreadyEquityOffered($this->request->getPost("already_equity_offered"));
        //$dtb_raise_project_basic->setAlreadyMoney($this->request->getPost("already_money"));
        //$dtb_raise_project_basic->setValuation($this->request->getPost("valuation"));
        //$dtb_raise_project_basic->setRateOfReturn($this->request->getPost("rate_of_return"));
        //$dtb_raise_project_basic->setVideoUrl($this->request->getPost("video_url"));
        //$dtb_raise_project_basic->setAddress1($this->request->getPost("address1"));
        //$dtb_raise_project_basic->setAddress2($this->request->getPost("address2"));
        //$dtb_raise_project_basic->setCountry($this->request->getPost("country"));
        //$dtb_raise_project_basic->setProvince($this->request->getPost("province"));
        //$dtb_raise_project_basic->setDist($this->request->getPost("dist"));
        //$dtb_raise_project_basic->setCity($this->request->getPost("city"));
        //$dtb_raise_project_basic->setPostCard($this->request->getPost("post_card"));
        //$dtb_raise_project_basic->setCompany($this->request->getPost("company"));
        $dtb_raise_project_basic->setWebstate($this->request->getPost("webstate"));
        $dtb_raise_project_basic->setCreateTs(time());
        $dtb_raise_project_basic->setPublicTs(time()+10*24*3600);//默认10天
        $dtb_raise_project_basic->setEndTs(time()+180*24*3600);//默认3个月
        //$dtb_raise_project_basic->setInvestedNum($this->request->getPost("invested_num"));
        $dtb_raise_project_basic->setCurrency($this->request->getPost("currency"));
        //$dtb_raise_project_basic->setNextTwoYTotalWage($this->request->getPost("next_two_y_total_wage"));
        $dtb_raise_project_basic->setNextDiscount($this->request->getPost("next_discount"));
        //$dtb_raise_project_basic->setComment($this->request->getPost("comment"));
        //$dtb_raise_project_basic->setStatus($this->request->getPost("status"));
        //$dtb_raise_project_basic->setResult($this->request->getPost("result"));




        if (!$dtb_raise_project_basic->save()) {

            foreach ($dtb_raise_project_basic->getMessages() as $message) {
                $this->flash->error($message);
            }
            return $this->dispatcher->forward(array(
                "controller" => "user_raise_basic",
                "action" => "new"
            ));
        }

        $this->flash->success("dtb_raise_project_basic was created successfully");


        return $this->dispatcher->forward(array(
            "controller" => "user_raise_basic",
            "action" => "newcompany",
             "params" => array($dtb_raise_project_basic->raise_id,$dtb_raise_project_basic->project_type)
        ));

    }





    /**
     * Saves a dtb_raise_project_basic edited
     *
     */
    public function saveAction()
    {



        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "user_raise_basic",
                "action" => "index"
            ));
        }

        $raise_id = $this->request->getPost("raise_id");




        $dtb_raise_project_basic = DtbRaiseProjectBasic::findFirstByraise_id($raise_id);
        if (!$dtb_raise_project_basic) {
            $this->flash->error("dtb_raise_project_basic does not exist " . $raise_id);

            return $this->dispatcher->forward(array(
                "controller" => "user_raise_basic",
                "action" => "index"
            ));
        }




        #$dtb_raise_project_basic->setUserId($this->request->getPost("user_id"));
        $dtb_raise_project_basic->setProjectName($this->request->getPost("project_name"));
        $dtb_raise_project_basic->setProjectDesc($this->request->getPost("project_desc"));
        $dtb_raise_project_basic->setProjectGrowUp($this->request->getPost("project_grow_up"));
        $dtb_raise_project_basic->setProjectType($this->request->getPost("project_type"));
        //$dtb_raise_project_basic->setCompanyLogo($this->request->getPost("company_logo"));
        $dtb_raise_project_basic->setAimMoney($this->request->getPost("aim_money"));



//        $dtb_raise_project_basic->setAimEquityOffered($this->request->getPost("aim_equity_offered"));
//        $dtb_raise_project_basic->setAlreadyEquityOffered($this->request->getPost("already_equity_offered"));
//        $dtb_raise_project_basic->setAlreadyMoney($this->request->getPost("already_money"));
//        $dtb_raise_project_basic->setValuation($this->request->getPost("valuation"));
//        $dtb_raise_project_basic->setRateOfReturn($this->request->getPost("rate_of_return"));
//        $dtb_raise_project_basic->setVideoUrl($this->request->getPost("video_url"));
//        $dtb_raise_project_basic->setAddress1($this->request->getPost("address1"));
//        $dtb_raise_project_basic->setAddress2($this->request->getPost("address2"));
//        $dtb_raise_project_basic->setCountry($this->request->getPost("country"));
//        $dtb_raise_project_basic->setProvince($this->request->getPost("province"));
//        $dtb_raise_project_basic->setDist($this->request->getPost("dist"));
//        $dtb_raise_project_basic->setCity($this->request->getPost("city"));
//        $dtb_raise_project_basic->setPostCard($this->request->getPost("post_card"));
//        $dtb_raise_project_basic->setCompany($this->request->getPost("company"));
//        $dtb_raise_project_basic->setWebstate($this->request->getPost("webstate"));
//        $dtb_raise_project_basic->setCreateTs($this->request->getPost("create_ts"));
//        $dtb_raise_project_basic->setPublicTs($this->request->getPost("public_ts"));
//        $dtb_raise_project_basic->setEndTs($this->request->getPost("end_ts"));
        //$dtb_raise_project_basic->setInvestedNum($this->request->getPost("invested_num"));
        $dtb_raise_project_basic->setCurrency($this->request->getPost("currency"));
       // $dtb_raise_project_basic->setNextTwoYTotalWage($this->request->getPost("next_two_y_total_wage"));


        $dtb_raise_project_basic->setNextDiscount($this->request->getPost("next_discount"));

        //图片上传
        $img_list=array();
        $project_log=array();
        list($img_list,$project_log) = $this->_upload_img();
        $company_logo=isset($img_list['company_logo'])?$img_list['company_logo']:'';
        if(!empty($company_logo)){
            $dtb_raise_project_basic->setCompanyLogo($company_logo);
        }
 //       $dtb_raise_project_basic->setComment($this->request->getPost("comment"));
  //      $dtb_raise_project_basic->setStatus($this->request->getPost("status"));
   //     $dtb_raise_project_basic->setResult($this->request->getPost("result"));



        if (!$dtb_raise_project_basic->save()) {

            foreach ($dtb_raise_project_basic->getMessages() as $message) {
                $this->flash->error($message);
            }


            return $this->dispatcher->forward(array(
                "controller" => "user_raise_basic",
                "action" => "edit",
                "params" => array($dtb_raise_project_basic->raise_id)
            ));
        }

        $this->flash->success("dtb_raise_project_basic was updated successfully");

        $this->response->redirect("/user_raise_basic/edit/$dtb_raise_project_basic->raise_id");

        return $this->dispatcher->forward(array(
            "controller" => "user_raise_basic",
            "action" => "edit",
            "params" => array($dtb_raise_project_basic->raise_id)
        ));

    }

    /**
     * Deletes a dtb_raise_project_basic
     *
     * @param string $raise_id
     */
    public function deleteAction($raise_id)
    {

        $dtb_raise_project_basic = DtbRaiseProjectBasic::findFirstByraise_id($raise_id);
        if (!$dtb_raise_project_basic) {
            $this->flash->error("dtb_raise_project_basic was not found");

            return $this->dispatcher->forward(array(
                "controller" => "user_raise_basic",
                "action" => "index"
            ));
        }

        if (!$dtb_raise_project_basic->delete()) {

            foreach ($dtb_raise_project_basic->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "user_raise_basic",
                "action" => "index"
            ));
        }

        $this->flash->success("dtb_raise_project_basic was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "user_raise_basic",
            "action" => "index"
        ));
    }





    /**
     * Saves a dtb_raise_project_basic edited
     *
     */
    public function saveCompanyAction()
    {



        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "user_raise_basic",
                "action" => "index"
            ));
        }

        $raise_id = $this->request->getPost("raise_id");




        $dtb_raise_project_basic = DtbRaiseProjectBasic::findFirstByraise_id($raise_id);
        if (!$dtb_raise_project_basic) {
            $this->flash->error("dtb_raise_project_basic does not exist " . $raise_id);

            return $this->dispatcher->forward(array(
                "controller" => "user_raise_basic",
                "action" => "index"
            ));
        }
        $project_type=$dtb_raise_project_basic->getProjectType();


        //$dtb_raise_project_basic->setUserId($this->request->getPost("user_id"));
//        $dtb_raise_project_basic->setProjectName($this->request->getPost("project_name"));
//        $dtb_raise_project_basic->setProjectDesc($this->request->getPost("project_desc"));
//        $dtb_raise_project_basic->setProjectGrowUp($this->request->getPost("project_grow_up"));
//        $dtb_raise_project_basic->setProjectType($this->request->getPost("project_type"));
        //$dtb_raise_project_basic->setCompanyLogo($this->request->getPost("company_logo"));
//        $dtb_raise_project_basic->setAimMoney($this->request->getPost("aim_money"));



//        $dtb_raise_project_basic->setAimEquityOffered($this->request->getPost("aim_equity_offered"));
//        $dtb_raise_project_basic->setAlreadyEquityOffered($this->request->getPost("already_equity_offered"));
//        $dtb_raise_project_basic->setAlreadyMoney($this->request->getPost("already_money"));
//        $dtb_raise_project_basic->setValuation($this->request->getPost("valuation"));
//        $dtb_raise_project_basic->setRateOfReturn($this->request->getPost("rate_of_return"));
//        $dtb_raise_project_basic->setVideoUrl($this->request->getPost("video_url"));
        $dtb_raise_project_basic->setAddress1($this->request->getPost("address1"));
        $dtb_raise_project_basic->setAddress2($this->request->getPost("address2"));
        $dtb_raise_project_basic->setCountry($this->request->getPost("country"));
//        $dtb_raise_project_basic->setProvince($this->request->getPost("province"));
//        $dtb_raise_project_basic->setDist($this->request->getPost("dist"));
        $dtb_raise_project_basic->setCity($this->request->getPost("city"));
        $dtb_raise_project_basic->setPostCard($this->request->getPost("post_card"));
//        $dtb_raise_project_basic->setCompany($this->request->getPost("company"));
//        $dtb_raise_project_basic->setWebstate($this->request->getPost("webstate"));
//        $dtb_raise_project_basic->setCreateTs($this->request->getPost("create_ts"));
//        $dtb_raise_project_basic->setPublicTs($this->request->getPost("public_ts"));
//        $dtb_raise_project_basic->setEndTs($this->request->getPost("end_ts"));
        //$dtb_raise_project_basic->setInvestedNum($this->request->getPost("invested_num"));
        //$dtb_raise_project_basic->setCurrency($this->request->getPost("currency"));
         $dtb_raise_project_basic->setNextTwoYTotalWage($this->request->getPost("company_number"));
        if ($project_type>0){
            $dtb_raise_project_basic->setCompanyNumber($this->request->getPost("next_two_y_total_wage"));
            $dtb_raise_project_basic->setCompanyRegisterTs(strtotime($this->request->getPost("company_register_ts")));
            $dtb_raise_project_basic->setImmediateLoan($this->request->getPost("immediate_loan"));
        }



        //       $dtb_raise_project_basic->setComment($this->request->getPost("comment"));
        //      $dtb_raise_project_basic->setStatus($this->request->getPost("status"));
        //     $dtb_raise_project_basic->setResult($this->request->getPost("result"));
       $act_type= $this->request->getPost("act_type");
        if ($act_type==0){
            //create
            if (!$dtb_raise_project_basic->save()) {

                foreach ($dtb_raise_project_basic->getMessages() as $message) {
                    $this->flash->error($message);
                }


                return $this->dispatcher->forward(array(
                    "controller" => "user_raise_basic",
                    "action" => "newcompany",
                    "params" => array($dtb_raise_project_basic->raise_id,$dtb_raise_project_basic->project_type)
                ));
            }

            $this->flash->success("dtb_raise_project_basic was updated successfully");

            $this->response->redirect("/user_raise_idea/new/$dtb_raise_project_basic->raise_id");

            return $this->dispatcher->forward(array(
                "controller" => "user_raise_idea",
                "action" => "new",
                "params" => array($dtb_raise_project_basic->raise_id)
            ));


        }else{
            //modify

            if (!$dtb_raise_project_basic->save()) {

                foreach ($dtb_raise_project_basic->getMessages() as $message) {
                    $this->flash->error($message);
                }


                return $this->dispatcher->forward(array(
                    "controller" => "user_raise_basic",
                    "action" => "editcompany",
                    "params" => array($dtb_raise_project_basic->raise_id)
                ));
            }

            $this->flash->success("dtb_raise_project_basic was updated successfully");

            $this->response->redirect("/user_raise_basic/editcompany/$dtb_raise_project_basic->raise_id");

            return $this->dispatcher->forward(array(
                "controller" => "user_raise_basic",
                "action" => "editcompany",
                "params" => array($dtb_raise_project_basic->raise_id)
            ));



        }



    }


    private function _upload_img(){
        $img_list=array();
        $project_logo=array();
        //图片上传
        if ($this->request->hasFiles()) {
            $i=0;
            // Print the real file names and sizes
            foreach ($this->request->getUploadedFiles() as $file) {
                $o_name= $file->getName();
                if($file->getKey()=='project_logo'){
                    if(empty($o_name))
                        //特殊处理
                        $project_logo[$i]='';
                    else{
                        $ext = pathinfo($file->getName(), PATHINFO_EXTENSION);
                        // Print file details
                        $file_name = sha1(time() . mt_rand(111111, 999999)) . "." . $ext;
                        $img_list[$file->getKey()]=$file_name;
                        $project_logo[$i]=$file_name;
                        //  $file->moveTo('files/' . $file_name);
                    }
                    $i++;

                }else{
                    if(!empty($o_name)){
                        $ext = pathinfo($file->getName(), PATHINFO_EXTENSION);
                        // Print file details
                        $file_name = sha1(time() . mt_rand(111111, 999999)) . "." . $ext;
                        $img_list[$file->getKey()]=$file_name;
                        // Move the file into the application
                        // $file->moveTo('files/' . $file->getName());
                        //  $file->moveTo('files/' . $file_name);

                    }
                }
            }
        }
        return array($img_list,$project_logo);
    }

}
