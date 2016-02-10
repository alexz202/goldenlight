<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class UserRaiseTeamWorkInfoController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for dtb_raise_project_team_work_info
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "DtbRaiseProjectTeamWorkInfo", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "id";

        $dtb_raise_project_team_work_info = DtbRaiseProjectTeamWorkInfo::find($parameters);
        if (count($dtb_raise_project_team_work_info) == 0) {
            $this->flash->notice("The search did not find any dtb_raise_project_team_work_info");

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team_work_info",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $dtb_raise_project_team_work_info,
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
     * Edits a dtb_raise_project_team_work_info
     *
     * @param string $id
     */
    public function editAction($id)
    {

        if (!$this->request->isPost()) {

            $dtb_raise_project_team_work_info = DtbRaiseProjectTeamWorkInfo::findFirstByid($id);
            if (!$dtb_raise_project_team_work_info) {
                $this->flash->error("dtb_raise_project_team_work_info was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "dtb_raise_project_team_work_info",
                    "action" => "index"
                ));
            }

            $this->view->id = $dtb_raise_project_team_work_info->id;

            $this->tag->setDefault("id", $dtb_raise_project_team_work_info->getId());
            $this->tag->setDefault("tmmember_id", $dtb_raise_project_team_work_info->getTmmemberId());
            $this->tag->setDefault("company", $dtb_raise_project_team_work_info->getCompany());
            $this->tag->setDefault("position", $dtb_raise_project_team_work_info->getPosition());
            $this->tag->setDefault("start_ts", $dtb_raise_project_team_work_info->getStartTs());
            $this->tag->setDefault("end_ts", $dtb_raise_project_team_work_info->getEndTs());
            
        }
    }

    /**
     * Creates a new dtb_raise_project_team_work_info
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team_work_info",
                "action" => "index"
            ));
        }

        $dtb_raise_project_team_work_info = new DtbRaiseProjectTeamWorkInfo();

        $dtb_raise_project_team_work_info->setTmmemberId($this->request->getPost("tmmember_id"));
        $dtb_raise_project_team_work_info->setCompany($this->request->getPost("company"));
        $dtb_raise_project_team_work_info->setPosition($this->request->getPost("position"));
        $dtb_raise_project_team_work_info->setStartTs($this->request->getPost("start_ts"));
        $dtb_raise_project_team_work_info->setEndTs($this->request->getPost("end_ts"));
        

        if (!$dtb_raise_project_team_work_info->save()) {
            foreach ($dtb_raise_project_team_work_info->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team_work_info",
                "action" => "new"
            ));
        }

        $this->flash->success("dtb_raise_project_team_work_info was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "dtb_raise_project_team_work_info",
            "action" => "index"
        ));

    }

    /**
     * Saves a dtb_raise_project_team_work_info edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team_work_info",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");

        $dtb_raise_project_team_work_info = DtbRaiseProjectTeamWorkInfo::findFirstByid($id);
        if (!$dtb_raise_project_team_work_info) {
            $this->flash->error("dtb_raise_project_team_work_info does not exist " . $id);

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team_work_info",
                "action" => "index"
            ));
        }

        $dtb_raise_project_team_work_info->setTmmemberId($this->request->getPost("tmmember_id"));
        $dtb_raise_project_team_work_info->setCompany($this->request->getPost("company"));
        $dtb_raise_project_team_work_info->setPosition($this->request->getPost("position"));
        $dtb_raise_project_team_work_info->setStartTs($this->request->getPost("start_ts"));
        $dtb_raise_project_team_work_info->setEndTs($this->request->getPost("end_ts"));
        

        if (!$dtb_raise_project_team_work_info->save()) {

            foreach ($dtb_raise_project_team_work_info->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team_work_info",
                "action" => "edit",
                "params" => array($dtb_raise_project_team_work_info->id)
            ));
        }

        $this->flash->success("dtb_raise_project_team_work_info was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "dtb_raise_project_team_work_info",
            "action" => "index"
        ));

    }

    /**
     * Deletes a dtb_raise_project_team_work_info
     *
     * @param string $id
     */
    public function deleteAction($id)
    {

        $dtb_raise_project_team_work_info = DtbRaiseProjectTeamWorkInfo::findFirstByid($id);
        if (!$dtb_raise_project_team_work_info) {
            $this->flash->error("dtb_raise_project_team_work_info was not found");

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team_work_info",
                "action" => "index"
            ));
        }

        if (!$dtb_raise_project_team_work_info->delete()) {

            foreach ($dtb_raise_project_team_work_info->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team_work_info",
                "action" => "search"
            ));
        }

        $this->flash->success("dtb_raise_project_team_work_info was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "dtb_raise_project_team_work_info",
            "action" => "index"
        ));
    }

}
