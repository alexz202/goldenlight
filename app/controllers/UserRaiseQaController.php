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
        $this->persistent->parameters = null;
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
