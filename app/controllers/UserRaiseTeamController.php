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
    public function newAction()
    {

    }

    /**
     * Edits a dtb_raise_project_team
     *
     * @param string $tmmember_id
     */
    public function editAction($tmmember_id)
    {

        if (!$this->request->isPost()) {

            $dtb_raise_project_team = DtbRaiseProjectTeam::findFirstBytmmember_id($tmmember_id);
            if (!$dtb_raise_project_team) {
                $this->flash->error("dtb_raise_project_team was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "dtb_raise_project_team",
                    "action" => "index"
                ));
            }

            $this->view->tmmember_id = $dtb_raise_project_team->tmmember_id;

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
            
        }
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
        

        if (!$dtb_raise_project_team->save()) {
            foreach ($dtb_raise_project_team->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team",
                "action" => "new"
            ));
        }

        $this->flash->success("dtb_raise_project_team was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "dtb_raise_project_team",
            "action" => "index"
        ));

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
                "controller" => "dtb_raise_project_team",
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
        $dtb_raise_project_team->setUpdateTs($this->request->getPost("update_ts"));
        

        if (!$dtb_raise_project_team->save()) {

            foreach ($dtb_raise_project_team->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team",
                "action" => "edit",
                "params" => array($dtb_raise_project_team->tmmember_id)
            ));
        }

        $this->flash->success("dtb_raise_project_team was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "dtb_raise_project_team",
            "action" => "index"
        ));

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
