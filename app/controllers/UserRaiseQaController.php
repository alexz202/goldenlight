<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class UserRaiseQaController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $user_project_info=$this->getUserProject();
        if($user_project_info){
            $raise_id=$user_project_info->getRaiseId();
        }
       $this->view->setVar('raise_id',$raise_id);
        $dtb_raise_qa=DtbRaiseProjectQa::find(
            array(
                "conditions" => "raise_id = :raise_id: ",
                "bind"       => array("raise_id" => $raise_id),
                "order"=>'msg_ts desc'
            )
        );


        $this->view->dtb_raise_qa=$dtb_raise_qa;
        $this->view->is_user_nav=4;


    }

    public function ajaxRemsgAction($raise_id,$msg_id){
        if($this->request->isPost()){
            $remsg_obj=new DtbRaiseProjectQaRemsg();
            $remsg=$this->request->getPost('remsg');

            $remsg_obj->setRaiseId($raise_id);
            $remsg_obj->setRemsg($remsg);
            $remsg_obj->setCompanyAdminId($user_id=$this->_getCookie('user_id'));
            $remsg_obj->setRemsgTs(time());
            $res=$remsg_obj->save();
            if($res){
                echo  true;
            }else{
                echo false;
            }
        }
        echo false;

    }


    public function indexQaAction(){
        $user_project_info=$this->getUserProject();
        if($user_project_info){
            $raise_id=$user_project_info->getRaiseId();
        }
        $this->view->setVar('raise_id',$raise_id);
        $dtb_raise_qa=DtbRaiseProjectUpdates::findFirst(
            array(
                "conditions" => "raise_id = :raise_id: ",
                "bind"       => array("raise_id" => $raise_id),
                "order"=>'create_ts desc'
            )

        );

        $this->view->dtb_raise_project_update=$dtb_raise_qa;
        $this->view->is_user_nav=4;



    }



    /**
     * Searches for dtb_raise_project_qa
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "DtbRaiseProjectQa", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "id";

        $dtb_raise_project_qa = DtbRaiseProjectQa::find($parameters);
        if (count($dtb_raise_project_qa) == 0) {
            $this->flash->notice("The search did not find any dtb_raise_project_qa");

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_qa",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $dtb_raise_project_qa,
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

    }

    /**
     * Edits a dtb_raise_project_qa
     *
     * @param string $id
     */
    public function editAction($id)
    {

        if (!$this->request->isPost()) {

            $dtb_raise_project_qa = DtbRaiseProjectQa::findFirstByid($id);
            if (!$dtb_raise_project_qa) {
                $this->flash->error("dtb_raise_project_qa was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "dtb_raise_project_qa",
                    "action" => "index"
                ));
            }

            $this->view->id = $dtb_raise_project_qa->id;

            $this->tag->setDefault("id", $dtb_raise_project_qa->getId());
            $this->tag->setDefault("raise_id", $dtb_raise_project_qa->getRaiseId());
            $this->tag->setDefault("msg", $dtb_raise_project_qa->getMsg());
            $this->tag->setDefault("remsg", $dtb_raise_project_qa->getRemsg());
            $this->tag->setDefault("msg_ts", $dtb_raise_project_qa->getMsgTs());
            $this->tag->setDefault("remsg_ts", $dtb_raise_project_qa->getRemsgTs());
            $this->tag->setDefault("user_id", $dtb_raise_project_qa->getUserId());
            $this->tag->setDefault("company_admin_id", $dtb_raise_project_qa->getCompanyAdminId());
            
        }
    }

    /**
     * Creates a new dtb_raise_project_qa
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_qa",
                "action" => "index"
            ));
        }

        $dtb_raise_project_qa = new DtbRaiseProjectQa();

        $dtb_raise_project_qa->setRaiseId($this->request->getPost("raise_id"));
        $dtb_raise_project_qa->setMsg($this->request->getPost("msg"));
        $dtb_raise_project_qa->setRemsg($this->request->getPost("remsg"));
        $dtb_raise_project_qa->setMsgTs($this->request->getPost("msg_ts"));
        $dtb_raise_project_qa->setRemsgTs($this->request->getPost("remsg_ts"));
        $dtb_raise_project_qa->setUserId($this->request->getPost("user_id"));
        $dtb_raise_project_qa->setCompanyAdminId($this->request->getPost("company_admin_id"));
        

        if (!$dtb_raise_project_qa->save()) {
            foreach ($dtb_raise_project_qa->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_qa",
                "action" => "new"
            ));
        }

        $this->flash->success("dtb_raise_project_qa was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "dtb_raise_project_qa",
            "action" => "index"
        ));

    }

    /**
     * Saves a dtb_raise_project_qa edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_qa",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");

        $dtb_raise_project_qa = DtbRaiseProjectQa::findFirstByid($id);
        if (!$dtb_raise_project_qa) {
            $this->flash->error("dtb_raise_project_qa does not exist " . $id);

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_qa",
                "action" => "index"
            ));
        }

        $dtb_raise_project_qa->setRaiseId($this->request->getPost("raise_id"));
        $dtb_raise_project_qa->setMsg($this->request->getPost("msg"));
        $dtb_raise_project_qa->setRemsg($this->request->getPost("remsg"));
        $dtb_raise_project_qa->setMsgTs($this->request->getPost("msg_ts"));
        $dtb_raise_project_qa->setRemsgTs($this->request->getPost("remsg_ts"));
        $dtb_raise_project_qa->setUserId($this->request->getPost("user_id"));
        $dtb_raise_project_qa->setCompanyAdminId($this->request->getPost("company_admin_id"));
        

        if (!$dtb_raise_project_qa->save()) {

            foreach ($dtb_raise_project_qa->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_qa",
                "action" => "edit",
                "params" => array($dtb_raise_project_qa->id)
            ));
        }

        $this->flash->success("dtb_raise_project_qa was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "dtb_raise_project_qa",
            "action" => "index"
        ));

    }

    /**
     * Deletes a dtb_raise_project_qa
     *
     * @param string $id
     */
    public function deleteAction($id)
    {

        $dtb_raise_project_qa = DtbRaiseProjectQa::findFirstByid($id);
        if (!$dtb_raise_project_qa) {
            $this->flash->error("dtb_raise_project_qa was not found");

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_qa",
                "action" => "index"
            ));
        }

        if (!$dtb_raise_project_qa->delete()) {

            foreach ($dtb_raise_project_qa->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_qa",
                "action" => "search"
            ));
        }

        $this->flash->success("dtb_raise_project_qa was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "dtb_raise_project_qa",
            "action" => "index"
        ));
    }

}
