<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;



class UserRaiseTeamController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for dtb_raise_project_team
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "DtbRaiseProjectTeam", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "tmmember_id";

        $dtb_raise_project_team = DtbRaiseProjectTeam::find($parameters);
        if (count($dtb_raise_project_team) == 0) {
            $this->flash->notice("The search did not find any dtb_raise_project_team");

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $dtb_raise_project_team,
            "limit"=> 10,
            "page" => $numberPage
        ));

        $this->view->page = $paginator->getPaginate();
    }

    /**
     * Displays the creation form
     */
    public function newAction($raise_id,$type)
    {
        $user_id=$this->_getCookie('user_id');
        $this->view->setVar('raise_id',$raise_id);
        $dtb_raise_project_team = DtbRaiseProjectTeam::findFirstByraise_id($raise_id);
        if ($dtb_raise_project_team){
           $this->view->setVar('tmmember_id',$dtb_raise_project_team->tmmember_id);

            $this->tag->setDefault("tmmember_id", $dtb_raise_project_team->getTmmemberId());
            $this->tag->setDefault("raise_id", $dtb_raise_project_team->getRaiseId());
            $this->tag->setDefault("user_name", $dtb_raise_project_team->getUserName());
            $this->tag->setDefault("avatar", $dtb_raise_project_team->getAvatar());
            $this->tag->setDefault("position", $dtb_raise_project_team->getPosition());
            $this->tag->setDefault("commitment", $dtb_raise_project_team->getCommitment());
            $this->tag->setDefault("ownership", $dtb_raise_project_team->getOwnership());
            $this->tag->setDefault("nationality", $dtb_raise_project_team->getNationality());
            $this->tag->setDefault("role", $dtb_raise_project_team->getRole());
            $this->tag->setDefault("birthday", $dtb_raise_project_team->getBirthday());
            $this->tag->setDefault("country", $dtb_raise_project_team->getCountry());
            $this->tag->setDefault("city", $dtb_raise_project_team->getCity());
            $this->tag->setDefault("address", $dtb_raise_project_team->getAddress());
            $this->tag->setDefault("update_ts", $dtb_raise_project_team->getUpdateTs());

            $tmmember_id=$dtb_raise_project_team->tmmember_id;

            $dtb_raise_project_team_work_info=DtbRaiseProjectTeamWorkInfo::findFirstBytmmember_id($tmmember_id);


            $dtb_raise_project_team_cert= DtbRaiseProjectTeamCertificate::findFirstBytmmember_id($tmmember_id);

            $dtb_raise_project_team_edc= DtbRaiseProjectTeamEducation::findFirstBytmmember_id($tmmember_id);

            if($dtb_raise_project_team_work_info){
                $this->tag->setDefault('company',$dtb_raise_project_team_work_info->getCompany());
                $this->tag->setDefault('position',$dtb_raise_project_team_work_info->getPosition());
                $this->tag->setDefault('start_ts',date('Y-m-d',$dtb_raise_project_team_work_info->getStartTs()));
                $this->tag->setDefault('end_ts',date('Y-m-d',$dtb_raise_project_team_work_info->getEndTs()));
                $this->view->setVar('start_ts',date('Y-m-d',$dtb_raise_project_team_work_info->getStartTs()));
                $this->view->setVar('end_ts',date('Y-m-d',$dtb_raise_project_team_work_info->getEndTs()));
            }
            if($dtb_raise_project_team_cert) {
                $this->tag->setDefault('organization',$dtb_raise_project_team_cert->getOrganization());
                $this->tag->setDefault('certificate_name',$dtb_raise_project_team_cert->getCertificateName());
                $this->tag->setDefault('reward_ts',date('Y-m-d',$dtb_raise_project_team_cert->getRewardTs()));
                $this->view->setVar('reward_ts',date('Y-m-d',$dtb_raise_project_team_cert->getRewardTs()));
            }


            if($dtb_raise_project_team_edc){
                $this->tag->setDefault('major',$dtb_raise_project_team_edc->getMajor());
                $this->tag->setDefault('education',$dtb_raise_project_team_edc->getEducation());
                $this->tag->setDefault('reward_ts',date('Y-m-d',$dtb_raise_project_team_edc->getRewardTs()));
                $this->view->setVar('reward_ts',date('Y-m-d',$dtb_raise_project_team_edc->getRewardTs()));
            }

        }else




        //tag setting
        $this->view->iscreate=1;
        $this->view->project_type=$type;
        $this->view->is_current=5;

    }

    /**
     * Edits a dtb_raise_project_team
     *
     * @param string $tmmember_id
     */
    public function editAction($raise_id)
    {

        if (!$this->request->isPost()) {

            $dtb_raise_project_team = DtbRaiseProjectTeam::findFirstByraise_id($raise_id);
            if (!$dtb_raise_project_team) {
                $this->flash->error("dtb_raise_project_team was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "dtb_raise_project_team",
                    "action" => "index"
                ));
            }
            $tmmember_id=$dtb_raise_project_team->tmmember_id;
            $this->view->tmmember_id = $dtb_raise_project_team->tmmember_id;

            $this->view->raise_id = $raise_id;

            $this->tag->setDefault("tmmember_id", $dtb_raise_project_team->getTmmemberId());
            $this->tag->setDefault("raise_id", $dtb_raise_project_team->getRaiseId());
            $this->tag->setDefault("user_name", $dtb_raise_project_team->getUserName());
            $this->tag->setDefault("avatar", $dtb_raise_project_team->getAvatar());
            $this->tag->setDefault("position", $dtb_raise_project_team->getPosition());
            $this->tag->setDefault("commitment", $dtb_raise_project_team->getCommitment());
            $this->tag->setDefault("ownership", $dtb_raise_project_team->getOwnership());
            $this->tag->setDefault("nationality", $dtb_raise_project_team->getNationality());
            $this->tag->setDefault("role", $dtb_raise_project_team->getRole());
            $this->tag->setDefault("birthday", date('Y-m-d',$dtb_raise_project_team->getBirthday()));
            $this->tag->setDefault("country", $dtb_raise_project_team->getCountry());
            $this->tag->setDefault("city", $dtb_raise_project_team->getCity());
            $this->tag->setDefault("address", $dtb_raise_project_team->getAddress());
            $this->tag->setDefault("update_ts",date('Y-m-d',$dtb_raise_project_team->getUpdateTs()));

            $dtb_raise_project_team_work_info=DtbRaiseProjectTeamWorkInfo::findFirstBytmmember_id($tmmember_id);


            $dtb_raise_project_team_cert= DtbRaiseProjectTeamCertificate::findFirstBytmmember_id($tmmember_id);

            $dtb_raise_project_team_edc= DtbRaiseProjectTeamEducation::findFirstBytmmember_id($tmmember_id);

            if($dtb_raise_project_team_work_info){
                $this->tag->setDefault('company',$dtb_raise_project_team_work_info->getCompany());
                $this->tag->setDefault('position',$dtb_raise_project_team_work_info->getPosition());
                $this->tag->setDefault('start_ts',date('Y-m-d',$dtb_raise_project_team_work_info->getStartTs()));
                $this->tag->setDefault('end_ts',date('Y-m-d',$dtb_raise_project_team_work_info->getEndTs()));
                $this->view->setVar('start_ts',date('Y-m-d',$dtb_raise_project_team_work_info->getStartTs()));
                $this->view->setVar('end_ts',date('Y-m-d',$dtb_raise_project_team_work_info->getEndTs()));
            }
           if($dtb_raise_project_team_cert) {
               $this->tag->setDefault('organization',$dtb_raise_project_team_cert->getOrganization());
               $this->tag->setDefault('certificate_name',$dtb_raise_project_team_cert->getCertificateName());
               $this->tag->setDefault('reward_ts',date('Y-m-d',$dtb_raise_project_team_cert->getRewardTs()));
               $this->view->setVar('reward_ts',date('Y-m-d',$dtb_raise_project_team_cert->getRewardTs()));
           }


            if($dtb_raise_project_team_edc){
                $this->tag->setDefault('major',$dtb_raise_project_team_edc->getMajor());
                $this->tag->setDefault('education',$dtb_raise_project_team_edc->getEducation());
                $this->tag->setDefault('reward_ts',date('Y-m-d',$dtb_raise_project_team_edc->getRewardTs()));
                $this->view->setVar('reward_ts',date('Y-m-d',$dtb_raise_project_team_edc->getRewardTs()));
            }

        }
        $this->view->iscreate=1;

        $this->view->is_current=5;
    }

    /**
     * Creates a new dtb_raise_project_team
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team",
                "action" => "index"
            ));
        }

        $dtb_raise_project_team = new DtbRaiseProjectTeam();

        $dtb_raise_project_team->setRaiseId($this->request->getPost("raise_id"));
        $dtb_raise_project_team->setUserName($this->request->getPost("user_name"));
        $dtb_raise_project_team->setAvatar($this->request->getPost("avatar"));
        $dtb_raise_project_team->setPosition($this->request->getPost("position"));
        $dtb_raise_project_team->setCommitment($this->request->getPost("commitment"));
        $dtb_raise_project_team->setOwnership($this->request->getPost("ownership"));
        $dtb_raise_project_team->setNationality($this->request->getPost("nationality"));
        $dtb_raise_project_team->setRole($this->request->getPost("role"));
        $dtb_raise_project_team->setBirthday($this->request->getPost("birthday"));
        $dtb_raise_project_team->setCountry($this->request->getPost("country"));
        $dtb_raise_project_team->setCity($this->request->getPost("city"));
        $dtb_raise_project_team->setAddress($this->request->getPost("address"));
        $dtb_raise_project_team->setUpdateTs($this->request->getPost("update_ts"));
        

//        if (!$dtb_raise_project_team->save()) {
//            foreach ($dtb_raise_project_team->getMessages() as $message) {
//                $this->flash->error($message);
//            }
//
//            return $this->dispatcher->forward(array(
//                "controller" => "dtb_raise_project_team",
//                "action" => "new"
//            ));
//        }



        $dtb_raise_project_team_work_info=new DtbRaiseProjectTeamWorkInfo();

        $dtb_raise_project_team_cert=new DtbRaiseProjectTeamCertificate();

        $dtb_raise_project_team_edc=new DtbRaiseProjectTeamEducation();

        $flag=false;
        $this->di['db']->begin();
        try{
            $res=$dtb_raise_project_team->save();
            $tmmember_id=$dtb_raise_project_team->tmmember_id;

            $dtb_raise_project_team_work_info->setTmmemberId($tmmember_id);
            $dtb_raise_project_team_work_info->setCompany($this->request->getPost("company"));
            $dtb_raise_project_team_work_info->setPosition($this->request->getPost("position"));
            $dtb_raise_project_team_work_info->setStartTs(strtotime($this->request->getPost("start_ts")));
            $dtb_raise_project_team_work_info->setEndTs(strtotime($this->request->getPost("end_ts")));

            $dtb_raise_project_team_cert->setTmmemberId($tmmember_id);
            $dtb_raise_project_team_cert->setOrganization($this->request->getPost("organization"));
            $dtb_raise_project_team_cert->setCertificateName($this->request->getPost("certificate_name"));
            $dtb_raise_project_team_cert->setRewardTs(strtotime($this->request->getPost("reward_ts")));

            $dtb_raise_project_team_edc->setTmmemberId($tmmember_id);
            $dtb_raise_project_team_edc->setMajor($this->request->getPost("major"));
            $dtb_raise_project_team_edc->setEducation($this->request->getPost("education"));
            $dtb_raise_project_team_edc->setRewardTs(strtotime($this->request->getPost("reward_ts")));


            $res1=$dtb_raise_project_team_work_info->save();
            $res2=$dtb_raise_project_team_cert->save();
            $res3=$dtb_raise_project_team_edc->save();

            if($res &&$res1 && $res2 && $res3 ){
                $this->di['db']->commit();
                $flag=true;
            }else{
                $this->di['db']->rollback();
            }



        }catch (Exception $ex){
            $this->di['db']->rollback();
        }

        if ($flag){
            $this->flash->success("dtb_raise_project_team was created successfully");

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team",
                "action" => "index"
            ));
        }
        else{
            foreach ($dtb_raise_project_team->getMessages() as $message) {
                $this->flash->error($message);
            }

            foreach ($dtb_raise_project_team_work_info->getMessages() as $message) {
                $this->flash->error($message);
            }

            foreach ($dtb_raise_project_team_cert->getMessages() as $message) {
                $this->flash->error($message);
            }

            foreach ($dtb_raise_project_team_edc->getMessages() as $message) {
                $this->flash->error($message);
            }

         }



    }

    /**
     * Saves a dtb_raise_project_team edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team",
                "action" => "index"
            ));
        }

         $tmmember_id = $this->request->getPost("tmmember_id");

        $dtb_raise_project_team = DtbRaiseProjectTeam::findFirstBytmmember_id($tmmember_id);


        if (!$dtb_raise_project_team) {

            $this->flash->error("dtb_raise_project_team does not exist " . $tmmember_id);

            return $this->dispatcher->forward(array(
                "controller" => "user_raise_team",
                "action" => "index"
            ));
        }

        $dtb_raise_project_team->setRaiseId($this->request->getPost("raise_id"));
        $dtb_raise_project_team->setUserName($this->request->getPost("user_name"));
        $dtb_raise_project_team->setAvatar($this->request->getPost("avatar"));
        $dtb_raise_project_team->setPosition($this->request->getPost("position"));
        $dtb_raise_project_team->setCommitment($this->request->getPost("commitment"));
        $dtb_raise_project_team->setOwnership($this->request->getPost("ownership"));
        $dtb_raise_project_team->setNationality($this->request->getPost("nationality"));
        $dtb_raise_project_team->setRole($this->request->getPost("role"));
        $dtb_raise_project_team->setBirthday($this->request->getPost("birthday"));
        $dtb_raise_project_team->setCountry($this->request->getPost("country"));
        $dtb_raise_project_team->setCity($this->request->getPost("city"));
        $dtb_raise_project_team->setAddress($this->request->getPost("address"));
        $dtb_raise_project_team->setUpdateTs(time());


//        $dtb_raise_project_team_work_info=new DtbRaiseProjectTeamWorkInfo();
//
//        $dtb_raise_project_team_cert=new DtbRaiseProjectTeamCertificate();
//
//        $dtb_raise_project_team_edc= new DtbRaiseProjectTeamEducation();

        $dtb_raise_project_team_work_info=DtbRaiseProjectTeamWorkInfo::findFirstBytmmember_id($tmmember_id);
        if (!$dtb_raise_project_team_work_info)
            $dtb_raise_project_team_work_info=new DtbRaiseProjectTeamWorkInfo();

        $dtb_raise_project_team_cert=DtbRaiseProjectTeamCertificate::findFirstBytmmember_id($tmmember_id);
        if (!$dtb_raise_project_team_cert)
            $dtb_raise_project_team_cert=new DtbRaiseProjectTeamCertificate();

        $dtb_raise_project_team_edc=DtbRaiseProjectTeamEducation::findFirstBytmmember_id($tmmember_id);
        if (!$dtb_raise_project_team_edc)
            $dtb_raise_project_team_edc=new DtbRaiseProjectTeamEducation();

        $flag=false;
        $this->di['db']->begin();

        try{

            $res=$dtb_raise_project_team->save();

            $dtb_raise_project_team_work_info->setTmmemberId($tmmember_id);
            $dtb_raise_project_team_work_info->setCompany($this->request->getPost("company"));
            $dtb_raise_project_team_work_info->setPosition($this->request->getPost("position"));
            $dtb_raise_project_team_work_info->setStartTs(strtotime($this->request->getPost("start_ts")));
            $dtb_raise_project_team_work_info->setEndTs(strtotime($this->request->getPost("end_ts")));

            $dtb_raise_project_team_cert->setTmmemberId($tmmember_id);
            $dtb_raise_project_team_cert->setOrganization($this->request->getPost("organization"));
            $dtb_raise_project_team_cert->setCertificateName($this->request->getPost("certificate_name"));
            $dtb_raise_project_team_cert->setRewardTs(strtotime($this->request->getPost("reward_ts")));

            $dtb_raise_project_team_edc->setTmmemberId($tmmember_id);
            $dtb_raise_project_team_edc->setMajor($this->request->getPost("major"));
            $dtb_raise_project_team_edc->setEducation($this->request->getPost("education"));
            $dtb_raise_project_team_edc->setRewardTs(strtotime($this->request->getPost("reward_ts")));


            $res1=$dtb_raise_project_team_work_info->save();
            $res2=$dtb_raise_project_team_cert->save();
            $res3=$dtb_raise_project_team_edc->save();

            if($res &&$res1 && $res2 && $res3 ){
                $this->di['db']->commit();
                $flag=true;
            }else{
                $this->di['db']->rollback();
            }



        }catch (Exception $ex){
            $this->di['db']->rollback();
        }

        if ($flag){
            $this->flash->success("dtb_raise_project_team was created successfully");

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team",
                "action" => "index"
            ));
        }
        else{
            foreach ($dtb_raise_project_team->getMessages() as $message) {
                $this->flash->error($message);
            }

            foreach ($dtb_raise_project_team_work_info->getMessages() as $message) {
                $this->flash->error($message);
            }

            foreach ($dtb_raise_project_team_cert->getMessages() as $message) {
                $this->flash->error($message);
            }

            foreach ($dtb_raise_project_team_edc->getMessages() as $message) {
                $this->flash->error($message);
            }

        }


    }

    /**
     * Deletes a dtb_raise_project_team
     *
     * @param string $tmmember_id
     */
    public function deleteAction($tmmember_id)
    {

        $dtb_raise_project_team = DtbRaiseProjectTeam::findFirstBytmmember_id($tmmember_id);
        if (!$dtb_raise_project_team) {
            $this->flash->error("dtb_raise_project_team was not found");

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team",
                "action" => "index"
            ));
        }

        if (!$dtb_raise_project_team->delete()) {

            foreach ($dtb_raise_project_team->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team",
                "action" => "search"
            ));
        }

        $this->flash->success("dtb_raise_project_team was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "dtb_raise_project_team",
            "action" => "index"
        ));
    }

}
