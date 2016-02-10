<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class UserRaiseTeamEducationController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for dtb_raise_project_team_education
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "DtbRaiseProjectTeamEducation", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "id";

        $dtb_raise_project_team_education = DtbRaiseProjectTeamEducation::find($parameters);
        if (count($dtb_raise_project_team_education) == 0) {
            $this->flash->notice("The search did not find any dtb_raise_project_team_education");

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team_education",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $dtb_raise_project_team_education,
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
     * Edits a dtb_raise_project_team_education
     *
     * @param string $id
     */
    public function editAction($id)
    {

        if (!$this->request->isPost()) {

            $dtb_raise_project_team_education = DtbRaiseProjectTeamEducation::findFirstByid($id);
            if (!$dtb_raise_project_team_education) {
                $this->flash->error("dtb_raise_project_team_education was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "dtb_raise_project_team_education",
                    "action" => "index"
                ));
            }

            $this->view->id = $dtb_raise_project_team_education->id;

            $this->tag->setDefault("id", $dtb_raise_project_team_education->getId());
            $this->tag->setDefault("tmmember_id", $dtb_raise_project_team_education->getTmmemberId());
            $this->tag->setDefault("organization", $dtb_raise_project_team_education->getOrganization());
            $this->tag->setDefault("major", $dtb_raise_project_team_education->getMajor());
            $this->tag->setDefault("education", $dtb_raise_project_team_education->getEducation());
            $this->tag->setDefault("reward_ts", $dtb_raise_project_team_education->getRewardTs());
            
        }
    }

    /**
     * Creates a new dtb_raise_project_team_education
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team_education",
                "action" => "index"
            ));
        }

        $dtb_raise_project_team_education = new DtbRaiseProjectTeamEducation();

        $dtb_raise_project_team_education->setTmmemberId($this->request->getPost("tmmember_id"));
        $dtb_raise_project_team_education->setOrganization($this->request->getPost("organization"));
        $dtb_raise_project_team_education->setMajor($this->request->getPost("major"));
        $dtb_raise_project_team_education->setEducation($this->request->getPost("education"));
        $dtb_raise_project_team_education->setRewardTs($this->request->getPost("reward_ts"));
        

        if (!$dtb_raise_project_team_education->save()) {
            foreach ($dtb_raise_project_team_education->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team_education",
                "action" => "new"
            ));
        }

        $this->flash->success("dtb_raise_project_team_education was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "dtb_raise_project_team_education",
            "action" => "index"
        ));

    }

    /**
     * Saves a dtb_raise_project_team_education edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team_education",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");

        $dtb_raise_project_team_education = DtbRaiseProjectTeamEducation::findFirstByid($id);
        if (!$dtb_raise_project_team_education) {
            $this->flash->error("dtb_raise_project_team_education does not exist " . $id);

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team_education",
                "action" => "index"
            ));
        }

        $dtb_raise_project_team_education->setTmmemberId($this->request->getPost("tmmember_id"));
        $dtb_raise_project_team_education->setOrganization($this->request->getPost("organization"));
        $dtb_raise_project_team_education->setMajor($this->request->getPost("major"));
        $dtb_raise_project_team_education->setEducation($this->request->getPost("education"));
        $dtb_raise_project_team_education->setRewardTs($this->request->getPost("reward_ts"));
        

        if (!$dtb_raise_project_team_education->save()) {

            foreach ($dtb_raise_project_team_education->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team_education",
                "action" => "edit",
                "params" => array($dtb_raise_project_team_education->id)
            ));
        }

        $this->flash->success("dtb_raise_project_team_education was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "dtb_raise_project_team_education",
            "action" => "index"
        ));

    }

    /**
     * Deletes a dtb_raise_project_team_education
     *
     * @param string $id
     */
    public function deleteAction($id)
    {

        $dtb_raise_project_team_education = DtbRaiseProjectTeamEducation::findFirstByid($id);
        if (!$dtb_raise_project_team_education) {
            $this->flash->error("dtb_raise_project_team_education was not found");

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team_education",
                "action" => "index"
            ));
        }

        if (!$dtb_raise_project_team_education->delete()) {

            foreach ($dtb_raise_project_team_education->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team_education",
                "action" => "search"
            ));
        }

        $this->flash->success("dtb_raise_project_team_education was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "dtb_raise_project_team_education",
            "action" => "index"
        ));
    }

}
